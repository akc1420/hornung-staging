<?php
/*
 * Copyright (c) Pickware GmbH. All rights reserved.
 * This file is part of software that is released under a proprietary license.
 * You must not copy, modify, distribute, make publicly available, or execute
 * its contents or parts thereof without express permission by the copyright
 * holder, unless otherwise permitted by law.
 */

declare(strict_types=1);

namespace Pickware\PickwareErpStarter\GoodsReceipt\Model;

use Pickware\DalBundle\Field\FixedReferenceVersionField;
use Pickware\PickwareErpStarter\SupplierOrder\Model\SupplierOrderDefinition;
use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\CalculatedPriceField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Computed;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\WriteProtected;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FloatField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IntField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\JsonField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\PriceDefinitionField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class GoodsReceiptItemDefinition extends EntityDefinition
{
    public const ENTITY_NAME = 'pickware_erp_goods_receipt_item';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    public function getEntityClass(): string
    {
        return GoodsReceiptItemEntity::class;
    }

    public function getCollectionClass(): string
    {
        return GoodsReceiptItemCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),

            (new FkField('goods_receipt_id', 'goodsReceiptId', GoodsReceiptDefinition::class, 'id'))
                ->addFlags(new Required()),
            new ManyToOneAssociationField('goodsReceipt', 'goods_receipt_id', GoodsReceiptDefinition::class, 'id'),
            (new IntField('quantity', 'quantity'))->addFlags(new Required()),

            new FkField('product_id', 'productId', ProductDefinition::class, 'id'),
            new FixedReferenceVersionField(ProductDefinition::class, 'product_version_id'),
            new ManyToOneAssociationField('product', 'product_id', ProductDefinition::class, 'id'),

            (new JsonField('product_snapshot', 'productSnapshot'))->addFlags(new Required()),

            new CalculatedPriceField('price', 'price'),
            new PriceDefinitionField('price_definition', 'priceDefinition'),
            (new FloatField('unit_price', 'unitPrice'))->addFlags(new Computed(), new WriteProtected()),
            (new FloatField('total_price', 'totalPrice'))->addFlags(new Computed(), new WriteProtected()),

            new FkField('supplier_order_id', 'supplierOrderId', SupplierOrderDefinition::class, 'id'),
            new ManyToOneAssociationField('supplierOrder', 'supplier_order_id', SupplierOrderDefinition::class, 'id'),
        ]);
    }
}
