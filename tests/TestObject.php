<?php

namespace ALebediev\Serializer\Test;


class TestObject
{
    protected $name;

    private $age;

    public $courses;

    public function __construct(string $name, int $age, array $courses=[])
    {
        $this->name = $name;
        $this->age = $age;
        $this->courses = $courses;
    }


}