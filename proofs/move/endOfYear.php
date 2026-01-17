<?php
declare(strict_types = 1);

use Innmind\Time\{
    Clock,
    Move\EndOfYear,
};
use Fixtures\Innmind\Time\Point;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'End of year',
        given(Set::either(
            Point::any(),
            Set::call(static fn() => Clock::live()->now()),
        )),
        static function($assert, $point) {
            $endOfYear = (new EndOfYear)($point);

            $assert->same(
                $point->year()->toInt(),
                $endOfYear->year()->toInt(),
            );
            $assert->same(
                12,
                $endOfYear->month()->ofYear()->toInt(),
            );
            $assert->same(
                31,
                $endOfYear->day()->ofMonth(),
            );
            $assert->same(
                23,
                $endOfYear->hour()->toInt(),
            );
            $assert->same(
                59,
                $endOfYear->minute()->toInt(),
            );
            $assert->same(
                59,
                $endOfYear->second()->toInt(),
            );
            $assert->same(
                999,
                $endOfYear->millisecond()->toInt(),
            );
            $assert->same(
                999,
                $endOfYear->microsecond()->toInt(),
            );
        },
    );
};
