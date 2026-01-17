<?php
declare(strict_types = 1);

namespace Tests\Innmind\Time\Point;

use Innmind\Time\Point\Second;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class SecondTest extends TestCase
{
    public function testInterface()
    {
        $second = Second::of(13);

        $this->assertSame(13, $second->toInt());
    }
}
