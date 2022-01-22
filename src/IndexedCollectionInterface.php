<?php

namespace Btree;

use Btree\Algorithm\IndexAlgorithm;
use Btree\Builder\EnumSort;

/**
 * Interface IndexedCollectionInterface
 *
 * Collection methods
 *
 * @package assassin215k/btree
 */
interface IndexedCollectionInterface
{
    public function addIndex(string|array $fieldName, IndexAlgorithm $algorithm): void;

    public function dropIndex(string|array $fieldName): void;

    public function sortBy(string $field, EnumSort $order): self;

    public function addSortBy(string $field, EnumSort $order): self;

    public function search(array $where): array;

    public function add(object $item): void;

    public function printFirstIndex(): void;
}
