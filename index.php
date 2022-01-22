<?php

require_once 'vendor/autoload.php';

use Btree\IndexedCollection;

class Person
{
    public function __toString(): string
    {
        return $this->name;
    }

    public function __construct(public string $name, public int $age)
    {
    }
}

$data = [
    new Person('Olga', 28),
    new Person('Owen', 17),
    new Person('Lisa', 44),
    new Person('Alex', 31),
    new Person('Artur', 28),
    new Person('Ivan', 17),
    new Person('Roman', 44),
    new Person('Peter', 31),
    new Person('Olga', 18),
    new Person('Owen', 27),
    new Person('Lisa', 34),
    new Person('Alex', 21),
];

//echo phpinfo();
//die;

$collection = new IndexedCollection($data, 3);
$collection->addIndex(['name','age']);
$collection->printFirstIndex();

//$collection->addSortBy('name', IndexSortOrder::DESC);
//$collection->add(new Person('Sofia', 18));
//var_dump($collection);
echo "=====","\n";
