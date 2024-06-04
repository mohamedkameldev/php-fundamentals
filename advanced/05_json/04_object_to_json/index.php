<?php

// serialize an object to JSON data

class Person implements JsonSerializable
{
    public function __construct(public string $name, public int $age)
    {

    }

    public function jsonSerialize(): mixed
    {
        return [
            'person name' => $this->name,
            'person age' => $this->age
        ];
    }
}

$ahmed = new Person('ahmed mostafa', 19);
$json = json_encode($ahmed);

header('Content-type:application/json');
echo $json;
