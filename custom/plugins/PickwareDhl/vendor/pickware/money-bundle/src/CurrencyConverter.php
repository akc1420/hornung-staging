<?php
/*
 * Copyright (c) Pickware GmbH. All rights reserved.
 * This file is part of software that is released under a proprietary license.
 * You must not copy, modify, distribute, make publicly available, or execute
 * its contents or parts thereof without express permission by the copyright
 * holder, unless otherwise permitted by law.
 */

declare(strict_types=1);

namespace Pickware\MoneyBundle;

interface CurrencyConverter
{
    public function convertMoneyValueToCurrency(
        MoneyValue $moneyValue,
        Currency $currency
        // Context $context @deprecated next-major parameter will be non-optional
    ): MoneyValue;
}
