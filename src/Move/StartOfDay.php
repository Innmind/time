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
final class StartOfDay
{
    #[\NoDiscard]
    public function __invoke(Point $point): Point
    {
        return $point->goBack(
            Period::hour($point->hour()->toInt())
                ->add(Period::minute($point->minute()->toInt()))
                ->add(Period::second($point->second()->toInt()))
                ->add(Period::millisecond($point->millisecond()->toInt()))
                ->add(Period::microsecond($point->microsecond()->toInt())),
        );
    }
}
