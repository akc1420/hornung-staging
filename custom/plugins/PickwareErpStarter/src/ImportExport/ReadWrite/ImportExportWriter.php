<?php
/*
 * Copyright (c) Pickware GmbH. All rights reserved.
 * This file is part of software that is released under a proprietary license.
 * You must not copy, modify, distribute, make publicly available, or execute
 * its contents or parts thereof without express permission by the copyright
 * holder, unless otherwise permitted by law.
 */

declare(strict_types=1);

namespace Pickware\PickwareErpStarter\ImportExport\ReadWrite;

use Shopware\Core\Framework\Context;

interface ImportExportWriter
{
    public function writeChunk(string $exportId, WritingOffset $offset, Context $context): ?WritingOffset;

    public function getTechnicalName(): string;
}
