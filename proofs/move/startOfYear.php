<?php
declare(strict_types = 1);

use Innmind\Time\{
    Clock,
    Move\StartOfYear,
};
use Fixtures\Innmind\Time\Point;
use Innmind\BlackBox\Set;

return static function($prove) {
    yield $prove
        ->proof('Start of year')
        ->given(Set::either(
            Point::any(),
            Set::of(Clock::live()->now()),
        ))
        ->test(static function($assert, $point) {
            $startOfYear = (new StartOfYear)($point);

            $assert->same(
                $point->year()->toInt(),
                $startOfYear->year()->toInt(),
            );
            $assert->same(
                1,
                $startOfYear->month()->ofYear()->toInt(),
            );
            $assert->same(
                1,
                $startOfYear->day()->ofMonth(),
            );
            $assert->same(
                0,
                $startOfYear->hour()->toInt(),
            );
            $assert->same(
                0,
                $startOfYear->minute()->toInt(),
            );
            $assert->same(
                0,
                $startOfYear->second()->toInt(),
            );
            $assert->same(
                0,
                $startOfYear->millisecond()->toInt(),
            );
            $assert->same(
                0,
                $startOfYear->microsecond()->toInt(),
            );
        });
};
