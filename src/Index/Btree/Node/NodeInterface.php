<?php

namespace Btree\Index\Btree\Node;

/**
 * Interface INode
 *
 * @package assassin215k/btree
 */
interface NodeInterface
{
    public function insertKey(string $key, object $value): void;

    public function selectKey(string $key): array;

    public function dropKey(string $key): void;

    public function traverse(): void;

    public function searchLeaf(string $key): NodeInterface;

    public function searchNode($key, bool $leaf): NodeInterface;

    public function getRoot(): NodeInterface;
}