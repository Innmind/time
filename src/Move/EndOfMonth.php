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
final class EndOfMonth
{
    #[\NoDiscard]
    public function __invoke(Point $point): Point
    {
        /** @psalm-suppress InvalidArgument The negative values can only happen when working with 2 different points in time */
        return (new EndOfDay)($point)->goForward(
            Period::day($point->month()->numberOfDays() - $point->day()->ofMonth()),
        );
    }
}
