<?php

namespace ALebediev\Serializer;

use Symfony\Component\Yaml\Yaml;

final class SerializeToYaml extends AbstractSerializer implements SerializerInterface
{
    public function serialize($object)
    {
        return Yaml::dump($this->objectToArray($object));
    }
}