<?php
declare(strict_types = 1);

namespace Fixtures\Innmind\Time;

use Innmind\Time\{
    Zone as Model,
    Zones,
    Offset,
};
use Innmind\BlackBox\Set;

final class Zone
{
    /**
     * @return Set\Provider<callable(Zones): Model>
     */
    public static function any(): Set\Provider
    {
        return Set::compose(
            static fn($offset, $daylight) => static fn(Zones $timezones) => Model::of(
                $offset,
                $daylight,
            ),
            Set::either(
                Set::compose(
                    Offset::plus(...),
                    Set::integers()->between(0, 14),
                    Set::of(0, 15, 30, 45),
                ),
                Set::compose(
                    Offset::minus(...),
                    Set::integers()->between(0, 12),
                    Set::of(0, 15, 30, 45),
                ),
            ),
            Set::of(true, false),
        );
    }
}
