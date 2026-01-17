<?php
declare(strict_types = 1);

namespace Fixtures\Innmind\Time;

use Innmind\Time\Period as Model;
use Innmind\BlackBox\Set;

final class Period
{
    /**
     * @return Set<Model>
     */
    public static function any(): Set
    {
        return Set::compose(
            Model::of(...),
            Set::integers()->between(0, 9999),
            Set::integers()->between(0, 12),
            Set::integers()->between(0, 31),
            Set::integers()->between(0, 23),
            Set::integers()->between(0, 59),
            Set::integers()->between(0, 59),
            Set::integers()->between(0, 999),
            Set::integers()->between(0, 999),
        )->toSet();
    }

    /**
     * @return Set<Model>
     */
    public static function anyNumberOfYear(): Set
    {
        return Set::integers()
            ->between(0, 9999)
            ->map(Model::year(...));
    }

    /**
     * @return Set<Model>
     */
    public static function lessThanAYear(): Set
    {
        return Set::compose(
            static function($day, $hour, $minute, $second, $millisecond, $microsecond): Model {
                return Model::of(
                    0,
                    0,
                    $day,
                    $hour,
                    $minute,
                    $second,
                    $millisecond,
                    $microsecond,
                );
            },
            Set::integers()->between(0, 364),
            Set::integers()->between(0, 23),
            Set::integers()->between(0, 59),
            Set::integers()->between(0, 59),
            Set::integers()->between(0, 999),
            Set::integers()->between(0, 999),
        )->toSet();
    }
}
