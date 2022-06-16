<?php

namespace APolyakina\Tests;
use \PHPUnit\Framework\TestCase;
use APolyakina\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Полякина Альбина Михайловна...', $truncater->truncate('Полякина Альбина Михайловна'));
        $this->assertSame('Полякина А...', $truncater->truncate('Полякина Альбина Михайловна', ['length' => 10]));
        $this->assertSame('Полякина Альбина Михайловна...', $truncater->truncate('Полякина Альбина Михайловна', ['length' => 50]));
        $this->assertSame('Полякина Альбина Михайловна...', $truncater->truncate('Полякина Альбина Михайловна', ['length' => -10]));
        $this->assertSame('Полякина А*', $truncater->truncate('Полякина Альбина Михайловна', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Полякина Альбина Михайловна*', $truncater->truncate('Полякина Альбина Михайловна', ['separator' => '*']));
    }
}
