<?php
declare(strict_types = 1);

use Innmind\Time\{
    Clock,
    Move\StartOfMonth,
};
use Fixtures\Innmind\Time\Point;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'Start of month',
        given(Set::either(
            Point::any(),
            Set::call(static fn() => Clock::live()->now()),
        )),
        static function($assert, $point) {
            $startOfMonth = (new StartOfMonth)($point);

            $assert->same(
                $point->year()->toInt(),
                $startOfMonth->year()->toInt(),
            );
            $assert->same(
                $point->month()->ofYear(),
                $startOfMonth->month()->ofYear(),
            );
            $assert->same(
                1,
                $startOfMonth->day()->ofMonth(),
            );
            $assert->same(
                0,
                $startOfMonth->hour()->toInt(),
            );
            $assert->same(
                0,
                $startOfMonth->minute()->toInt(),
            );
            $assert->same(
                0,
                $startOfMonth->second()->toInt(),
            );
            $assert->same(
                0,
                $startOfMonth->millisecond()->toInt(),
            );
            $assert->same(
                0,
                $startOfMonth->microsecond()->toInt(),
            );
        },
    );
};
