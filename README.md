alebediev/serializer
===============

This project helps to serialize objects of different classes into JSON, YAML and XML formats. 

Installation
------------

```
$ git clone https://github.com/alebediev/serializer.git <your-project-name>
$ cd <your-project-name>
$ composer install
```

Usage
-----

```php
<?php

use ALebediev\Serializer\{SerializeToJSON, SerializeToXML, SerializeToYaml};

...

$jsonSerializer = new SerializeToJSON();
$xmlSerializer = new SerializeToXML();
$yamlSerializer = new SerializeToYaml();

$testStudent = new TestObject('User 2', 30, [['php-basic', 'php-advance'],'python']);

echo "============[TestObject1]============" . PHP_EOL;
echo "----JSON:" . PHP_EOL;
echo $jsonSerializer->serialize($testStudent) . PHP_EOL;
echo "----YAML:" . PHP_EOL;
echo $yamlSerializer->serialize($testStudent) . PHP_EOL;
echo "----XML:" . PHP_EOL;
echo $xmlSerializer->serialize($testStudent) . PHP_EOL;

```