<?php

namespace ALebediev\Serializer;

use Spatie\ArrayToXml\ArrayToXml;

class XmlSerializer extends AbstractSerializer implements SerializerInterface
{
    public function serialize($object)
    {
        return ArrayToXml::convert($this->objectToArray($object));
    }
}