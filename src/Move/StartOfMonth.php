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
final class StartOfMonth
{
    #[\NoDiscard]
    public function __invoke(Point $point): Point
    {
        return (new StartOfDay)($point)->goBack(
            Period::day($point->day()->ofMonth() - 1),
        );
    }
}
