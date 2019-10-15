<?php

namespace App;

interface SerializerInterface
{
    public function serialize(object $object);
}