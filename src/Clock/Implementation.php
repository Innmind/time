<?php
declare(strict_types = 1);

namespace Innmind\Time\Clock;

use Innmind\Time\{
    Point,
    Format,
    Zones,
    Zone,
};
use Innmind\Immutable\Attempt;

/**
 * @internal
 */
interface Implementation
{
    /**
     * @param callable(Zones): Zone $changeTimezone
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
