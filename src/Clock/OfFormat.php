<?php
declare(strict_types = 1);

namespace Innmind\Time\Clock;

use Innmind\Time\{
    Clock,
    Format,
    Point,
};
use Innmind\Immutable\Attempt;

/**
 * @psalm-immutable
 */
final class OfFormat
{
    private function __construct(
        private Clock $clock,
        private Format $format,
    ) {
    }

    /**
     * @psalm-pure
     * @internal
     */
    #[\NoDiscard]
    public static function new(Clock $clock, Format $format): self
    {
        return new self($clock, $format);
    }

    /**
     * @param non-empty-string $date
     *
     * @return Attempt<Point>
     */
    #[\NoDiscard]
    public function at(string $date): Attempt
    {
        return $this->clock->at($date, $this->format);
    }
}
