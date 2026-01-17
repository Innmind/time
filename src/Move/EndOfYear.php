<?php
declare(strict_types = 1);

namespace Innmind\Time\Move;

use Innmind\Time\{
    Point,
    Period,
};

/**
 * @psalm-immutable
 */
final class EndOfYear
{
    #[\NoDiscard]
    public function __invoke(Point $point): Point
    {
        $point = (new StartOfMonth)($point)->goForward(
            Period::month(12 - $point->month()->ofYear()->toInt()),
        );

        return (new EndOfMonth)($point);
    }
}
