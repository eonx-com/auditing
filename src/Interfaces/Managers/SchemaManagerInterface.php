<?php
declare(strict_types=1);

namespace LoyaltyCorp\Auditing\Interfaces\Managers;

use LoyaltyCorp\Auditing\Interfaces\DocumentInterface;

interface SchemaManagerInterface
{
    /**
     * Create table.
     *
     * @param \LoyaltyCorp\Auditing\Interfaces\DocumentInterface $entity
     *
     * @return bool
     */
    public function create(DocumentInterface $entity): bool;

    /**
     * Drop table.
     *
     * @param string $documentClass Document table to be dropped
     *
     * @return bool
     */
    public function drop(string $documentClass): bool;
}
