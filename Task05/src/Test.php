<?php

namespace APolyakina\Task05;


function runTest()
{
    $truncater = new Truncater();
  
echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;

echo $truncater->truncate('') . PHP_EOL;

echo $truncater->truncate('Полякина Альбина Михайловна') . PHP_EOL;

echo $truncater->truncate('Полякина Альбина Михайловна', ['length' => 10]) . PHP_EOL;

echo $truncater->truncate('Полякина Альбина Михайловна', ['length' => 50]) . PHP_EOL;

echo $truncater->truncate('Полякина Альбина Михайловна', ['length' => -10]) . PHP_EOL;

echo $truncater->truncate('Полякина Альбина Михайловна', ['length' => 10, 'separator' => '*']) . PHP_EOL;

echo $truncater->truncate('Полякина Альбина Михайловна', ['separator' => '*']) . PHP_EOL;
}
