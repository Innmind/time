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
final class EndOfDay
{
    #[\NoDiscard]
    public function __invoke(Point $point): Point
    {
        return $point->goForward(
            Period::hour(23 - $point->hour()->toInt())
                ->add(Period::minute(59 - $point->minute()->toInt()))
                ->add(Period::second(59 - $point->second()->toInt()))
                ->add(Period::millisecond(999 - $point->millisecond()->toInt()))
                ->add(Period::microsecond(999 - $point->microsecond()->toInt())),
        );
    }
}
