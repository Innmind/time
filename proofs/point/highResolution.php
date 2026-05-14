<?php
declare(strict_types = 1);

use Innmind\Time\Point\HighResolution;
use Innmind\BlackBox\Set;

return static function($prove) {
    yield $prove
        ->proof('HighResolution::aheadOf() on different seconds')
        ->given(
            Set::integers()->above(0),
            Set::integers()->above(0),
            Set::integers()->between(0, 999_999_999),
            Set::integers()->between(0, 999_999_999),
        )
        ->filter(static fn($start, $end) => $start < $end)
        ->test(static function($assert, $start, $end, $startNanoseconds, $endNanoseconds) {
            $start = HighResolution::of($start, $startNanoseconds);
            $end = HighResolution::of($end, $endNanoseconds);

            $assert->true($end->aheadOf($start));
            $assert->false($start->aheadOf($end));
        });

    yield $prove
        ->proof('HighResolution::aheadOf() in same second')
        ->given(
            Set::integers()->above(0),
            Set::integers()->between(0, 999_999_999),
            Set::integers()->between(0, 999_999_999),
        )
        ->filter(static fn($_, $start, $end) => $start < $end)
        ->test(static function($assert, $second, $start, $end) {
            $start = HighResolution::of($second, $start);
            $end = HighResolution::of($second, $end);

            $assert->true($end->aheadOf($start));
            $assert->false($start->aheadOf($end));
        });
};
