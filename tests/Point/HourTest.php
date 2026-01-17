<?php
declare(strict_types = 1);

namespace Tests\Innmind\Time\Point;

use Innmind\Time\Point\Hour;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class HourTest extends TestCase
{
    public function testInterface()
    {
        $hour = Hour::of(13);

        $this->assertSame(60, $hour->numberOfMinutes());
        $this->assertSame(13, $hour->toInt());
    }
}
