<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\CmsExtensions\Util\Exception;

use Shopware\Core\Framework\ShopwareHttpException;

class FormValidationPassedException extends ShopwareHttpException
{
    public function __construct()
    {
        parent::__construct('Form validation seems to have passed but should not be written');
    }

    public function getErrorCode(): string
    {
        return 'SWAG_CMS_EXTENSIONS__FORM_VALIDATION_PASSED';
    }
}
