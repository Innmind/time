<?php
declare(strict_types = 1);

namespace Innmind\Time\Clock;

use Innmind\Time\{
    Point,
    Format,
    Timezones,
    Timezone,
};
use Innmind\Immutable\Attempt;

/**
 * @internal
 */
interface Implementation
{
    /**
     * @param callable(Timezones): Timezone $changeTimezone
     */
    #[\NoDiscard]
    public function switch(callable $changeTimezone): self;

    #[\NoDiscard]
    public function now(): Point;

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Attempt<Point>
     */
    #[\NoDiscard]
    public function at(string $date, Format $format): Attempt;
}
