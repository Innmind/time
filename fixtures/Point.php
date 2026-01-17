<?php
declare(strict_types = 1);

namespace Fixtures\Innmind\Time;

use Innmind\Time\Point as Model;
use Innmind\BlackBox\Set;

final class Point
{
    /**
     * @return Set<Model>
     */
    public static function any(): Set
    {
        return self::yearRange(0, 9999);
    }

    /**
     * @param string $point String representation of a date
     *
     * @return Set<Model>
     */
    public static function after(string $point): Set
    {
        $lower = Model::at(new \DateTimeImmutable($point));

        return self::yearRange($lower->year()->toInt(), 9999)
            ->filter(static fn($point) => $point->aheadOf($lower));
    }

    /**
     * @param string $point String representation of a date
     * @return Set<Model>
     */
    public static function before(string $point): Set
    {
        $upper = Model::at(new \DateTimeImmutable($point));

        return self::yearRange(0, $upper->year()->toInt())
            ->filter(static fn($point) => $upper->aheadOf($point));
    }

    /**
     * @return Set<Model>
     */
    private static function yearRange(int $lowerBound, int $upperBound): Set
    {
        return Set::compose(
            static function(
                int|string ...$components,
            ): Model {
                return Model::at(new \DateTimeImmutable(\sprintf(
                    '%02s-%02d-%02dT%02d:%02d:%02d.%03d%03d%s%02d:%s',
                    ...$components,
                )));
            },
            Set::integers()->between($lowerBound, $upperBound),
            Set::integers()->between(1, 12),
            Set::integers()->between(1, 31),
            Set::integers()->between(0, 23),
            Set::integers()->between(0, 59),
            Set::integers()->between(0, 59),
            Set::integers()->between(0, 999),
            Set::integers()->between(0, 999),
            Set::of('-', '+'),
            Set::integers()->between(0, 12),
            Set::of('00', '15', '30', '45'),
        )->toSet();
    }
}
