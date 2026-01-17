<?php
declare(strict_types = 1);

use Innmind\Time\Period;
use Fixtures\Innmind\Time as Fixtures;
use Innmind\BlackBox\Set;

return static function() {
    yield proof(
        'Point::equals()',
        given(
            Fixtures\Point::any(),
            Set::either(
                Set::integers()->above(0)->map(Period::microsecond(...)),
                Set::integers()->above(0)->map(Period::millisecond(...)),
            ),
        ),
        static function($assert, $point, $period) {
            $assert->true(
                $point
                    ->goForward($period)
                    ->goBack($period)
                    ->equals($point),
            );
            $assert->true(
                $point
                    ->goBack($period)
                    ->goForward($period)
                    ->equals($point),
            );
            $assert->false(
                $point
                    ->goBack($period)
                    ->equals($point),
            );
            $assert->false(
                $point
                    ->goForward($period)
                    ->equals($point),
            );
        },
    );

    yield proof(
        'Point::aheadOf()',
        given(
            Fixtures\Point::any(),
            Fixtures\Period::any()->exclude(
                static fn($period) => $period->equals(Period::microsecond(0)),
            ),
        ),
        static function($assert, $point, $period) {
            $assert->true(
                $point
                    ->goForward($period)
                    ->aheadOf($point),
            );
            $assert->false(
                $point
                    ->goBack($period)
                    ->aheadOf($point),
            );
        },
    );
};
