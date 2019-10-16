#!/usr/bin/env php
<?php

require_once __DIR__ . '/../vendor/autoload.php';

use ALebediev\Serializer\Test\TestObject;
use ALebediev\Serializer\{JsonSerializer, XmlSerializer, YamlSerializer};

$jsonSerializer = new JsonSerializer();
$xmlSerializer = new XmlSerializer();
$yamlSerializer = new YamlSerializer();

$testStudent_1 = new TestObject('User 1', 23, ['php-basic']);
$testStudent_2 = new TestObject('User 2', 30, [['php-basic', 'php-advance'],'python']);

echo "============[TestObject1]============" . PHP_EOL;
echo "----JSON:" . PHP_EOL;
echo $jsonSerializer->serialize($testStudent_1) . PHP_EOL;
echo "----YAML:" . PHP_EOL;
echo $yamlSerializer->serialize($testStudent_1) . PHP_EOL;
echo "----XML:" . PHP_EOL;
echo $xmlSerializer->serialize($testStudent_1) . PHP_EOL;

echo "============[TestObject2]============" . PHP_EOL;
echo "----JSON:" . PHP_EOL;
echo $jsonSerializer->serialize($testStudent_2) . PHP_EOL;
echo "----YAML:" . PHP_EOL;
echo $yamlSerializer->serialize($testStudent_2) . PHP_EOL;
echo "----XML:" . PHP_EOL;
echo $xmlSerializer->serialize($testStudent_2) . PHP_EOL;

echo "============[TestArray]============" . PHP_EOL;
echo "----JSON:" . PHP_EOL;
echo $jsonSerializer->serialize(['courses' => [['php-basic', 'php-advance'],'python']]) . PHP_EOL;
echo "----YAML:" . PHP_EOL;
echo $yamlSerializer->serialize(['courses' => [['php-basic', 'php-advance'],'python']]) . PHP_EOL;
echo "----XML:" . PHP_EOL;
echo $xmlSerializer->serialize(['courses' => [['php-basic', 'php-advance'],'python']]) . PHP_EOL;
