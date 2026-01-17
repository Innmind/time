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
final class StartOfYear
{
    #[\NoDiscard]
    public function __invoke(Point $point): Point
    {
        return (new StartOfMonth)($point)->goBack(
            Period::month($point->month()->ofYear()->toInt() - 1),
        );
    }
}
