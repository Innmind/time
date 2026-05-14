<?php
declare(strict_types = 1);

use Innmind\Time\{
    Clock,
    Move\StartOfDay,
};
use Fixtures\Innmind\Time\Point;
use Innmind\BlackBox\Set;

return static function($prove) {
    yield $prove
        ->proof('Start of day')
        ->given(Set::either(
            Point::any(),
            Set::of(Clock::live()->now()),
        ))
        ->test(static function($assert, $point) {
            $startOfDay = (new StartOfDay)($point);

            $assert->same(
                $point->year()->toInt(),
                $startOfDay->year()->toInt(),
            );
            $assert->same(
                $point->month()->ofYear(),
                $startOfDay->month()->ofYear(),
            );
            $assert->same(
                $point->day()->ofMonth(),
                $startOfDay->day()->ofMonth(),
            );
            $assert->same(
                0,
                $startOfDay->hour()->toInt(),
            );
            $assert->same(
                0,
                $startOfDay->minute()->toInt(),
            );
            $assert->same(
                0,
                $startOfDay->second()->toInt(),
            );
            $assert->same(
                0,
                $startOfDay->millisecond()->toInt(),
            );
            $assert->same(
                0,
                $startOfDay->microsecond()->toInt(),
            );
        });
};
