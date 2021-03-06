<?php

namespace Btree;

use Btree\Builder\BuilderInterface;
use Btree\Index\IndexInterface;

/**
 * Interface IndexedCollectionInterface
 *
 * Collection methods
 *
 * @package assassin215k/btree
 */
interface IndexedCollectionInterface
{
    public function addIndex(string | array $fieldName, IndexInterface $index): void;

    public function dropIndex(string | array $fieldName): void;

    public function add(object $item): void;

    public function delete(string $key): void;

    public function printFirstIndex(): ?string;

    public function createBuilder(): BuilderInterface;
}
