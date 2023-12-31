<?php

namespace Swag\Security\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Defaults;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1646397836UpdateRolePrivilegesOfOrderCreator extends MigrationStep
{
    public const NEW_PRIVILEGES = [
        'order.creator' => [
            'api_proxy_switch-customer',
        ],
    ];

    public function getCreationTimestamp(): int
    {
        return 1646397836;
    }

    public function update(Connection $connection): void
    {
        if (\method_exists($connection, 'fetchAllAssociative')) {
            $roles = $connection->fetchAllAssociative('SELECT * from `acl_role`');
        } else {
            $roles = $connection->fetchAll('SELECT * from `acl_role`');
        }

        foreach ($roles as $role) {
            $currentPrivileges = \json_decode($role['privileges'], true);
            $newPrivileges = array_values($this->fixRolePrivileges($currentPrivileges));

            if ($currentPrivileges === $newPrivileges) {
                continue;
            }

            $role['privileges'] = json_encode($newPrivileges);
            $role['updated_at'] = (new \DateTimeImmutable())->format(Defaults::STORAGE_DATE_FORMAT);

            $connection->update('acl_role', $role, ['id' => $role['id']]);
        }
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }

    private function fixRolePrivileges(array $rolePrivileges): array
    {
        foreach (self::NEW_PRIVILEGES as $key => $new) {
            if (\in_array($key, $rolePrivileges, true)) {
                $rolePrivileges = array_merge($rolePrivileges, $new);
            }
        }

        return array_unique($rolePrivileges);
    }
}
