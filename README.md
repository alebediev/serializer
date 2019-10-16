alebediev/serializer
===============

This library helps to serialize objects of different classes into JSON, YAML and XML formats. 

Installation
------------

Use the following command to add this library in your project:
```
composer require alebediev/serializer
```

Usage
-----

```php
<?php

use ALebediev\Serializer\{JsonSerializer, XmlSerializer, YamlSerializer};

...

$jsonSerializer = new JsonSerializer();
$xmlSerializer = new XmlSerializer();
$yamlSerializer = new YamlSerializer();

$testStudent = new TestObject('User 2', 30, [['php-basic', 'php-advance'],'python']);

echo "============[TestObject1]============" . PHP_EOL;
echo "----JSON:" . PHP_EOL;
echo $jsonSerializer->serialize($testStudent) . PHP_EOL;
echo "----YAML:" . PHP_EOL;
echo $yamlSerializer->serialize($testStudent) . PHP_EOL;
echo "----XML:" . PHP_EOL;
echo $xmlSerializer->serialize($testStudent) . PHP_EOL;

```


License
-------

MIT [license](LICENSE).

Copyright (c) 2019 Andrii Lebediev