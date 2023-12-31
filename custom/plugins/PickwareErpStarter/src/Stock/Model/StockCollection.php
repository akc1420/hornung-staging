<?php
/*
 * Copyright (c) Pickware GmbH. All rights reserved.
 * This file is part of software that is released under a proprietary license.
 * You must not copy, modify, distribute, make publicly available, or execute
 * its contents or parts thereof without express permission by the copyright
 * holder, unless otherwise permitted by law.
 */

declare(strict_types=1);

namespace Pickware\PickwareErpStarter\Stock\Model;

use Pickware\PickwareErpStarter\Collection\ImmutableCollection;
use Pickware\PickwareErpStarter\OrderShipping\ProductQuantityLocation;
use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(StockEntity $entity)
 * @method void set(string $key, StockEntity $entity)
 * @method StockEntity[] getIterator()
 * @method StockEntity[] getElements()
 * @method StockEntity|null get(string $key)
 * @method StockEntity|null first()
 * @method StockEntity|null last()
 */
class StockCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return StockEntity::class;
    }

    /**
     * @return ImmutableCollection<ProductQuantityLocation>
     */
    public function getProductQuantityLocations(): ImmutableCollection
    {
        return (new ImmutableCollection($this->elements))->map(
            fn (StockEntity $stock) => $stock->getProductQuantityLocation(),
        );
    }
}
