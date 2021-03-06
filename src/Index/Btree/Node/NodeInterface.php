<?php

namespace Btree\Index\Btree\Node;

use Btree\Index\Btree\Node\Data\DataInterface;

/**
 * Interface NodeInterface
 *
 * @package assassin215k/btree
 */
interface NodeInterface
{
    public function getId(): int;

    public function isLeaf(): bool;

    public function setLeaf(bool $isLeaf): void;

    public function getKeys(): array;

    public function getNodeByKey(string $index): NodeInterface;

    public function replaceKey(
        array $array,
        string $key = null,
        bool $fullReplace = false,
        bool $keyOnly = false
    ): void;

    public function hasKey(string $key): bool;

    public function getKey(string $key): DataInterface | NodeInterface | null;

    public function count(): int;

    public function nodeTotal(): int;

    public function extractLast(): array;

    public function extractFirst(): array;

    public function insertKey(string $key, object $value, int $position = null): void;

    public function dropKey(string $key): DataInterface;

    public function replaceNextPrevKey(NodeInterface $child, bool $replacePrev): void;

    public function replaceThreeWithOne(string $key, NodeInterface $node, array $keys, bool $next): void;

    public function getPrevNode(): ?NodeInterface;

    public function setPrevNode(?NodeInterface $node): void;

    public function getNextNode(): ?NodeInterface;

    public function setNextNode(?NodeInterface $node): void;

    public function getFirstKeyInChain(): string;
}
