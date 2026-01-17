<?php
declare(strict_types = 1);

namespace Tests\Innmind\Time\Clock;

use Innmind\Time\{
    Clock,
    Format,
    Point as PointInTimeInterface,
};
use Fixtures\Innmind\Time\Point;
use Innmind\BlackBox\{
    PHPUnit\Framework\TestCase,
    PHPUnit\BlackBox,
};

class FrozenTest extends TestCase
{
    use BlackBox;

    public function testNow(): BlackBox\Proof
    {
        return $this
            ->forAll(Point::any())
            ->prove(function($now) {
                $this->assertSame(
                    $now->toString(),
                    Clock::frozen($now)->now()->toString(),
                );
            });
    }

    public function testAtReturnWithTheSameTimezoneAsNow(): BlackBox\Proof
    {
        return $this
            ->forAll(
                Point::any(),
                Point::any(),
            )
            ->prove(function($now, $at) {
                $clock = Clock::frozen($now);

                $point = $clock->at($at->format(Format::iso8601()), Format::iso8601())->match(
                    static fn($point) => $point,
                    static fn() => null,
                );

                $this->assertInstanceOf(PointInTimeInterface::class, $point);
                $this->assertSame($now->offset()->toString(), $point->offset()->toString());
            });
    }
}
