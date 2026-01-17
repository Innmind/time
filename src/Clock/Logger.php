<?php
declare(strict_types = 1);

namespace Innmind\Time\Clock;

use Innmind\Time\{
    Point,
    Format,
};
use Innmind\Immutable\Attempt;
use Psr\Log\LoggerInterface;

/**
 * @internal
 */
final class Logger implements Implementation
{
    public function __construct(
        private Implementation $clock,
        private LoggerInterface $logger,
    ) {
    }

    #[\Override]
    public function switch(callable $changeTimezone): self
    {
        return new self(
            $this->clock->switch($changeTimezone),
            $this->logger,
        );
    }

    #[\Override]
    public function now(): Point
    {
        $now = $this->clock->now();
        $this->logger->debug('Current time is {point}', [
            'point' => $now->format(Format::iso8601()),
        ]);

        return $now;
    }

    /**
     * @psalm-mutation-free
     *
     * @param non-empty-string $date
     *
     * @return Attempt<Point>
     */
    #[\Override]
    public function at(string $date, Format $format): Attempt
    {
        return $this
            ->clock
            ->at($date, $format)
            ->map(fn($point) => $this->log($point, $date, $format));
    }

    #[\NoDiscard]
    private function log(
        Point $point,
        string $date,
        Format $format,
    ): Point {
        /**
         * @psalm-suppress ImpureVariable
         * @psalm-suppress ImpurePropertyFetch
         * @psalm-suppress ImpureMethodCall
         */
        $this->logger->debug('Asked time {date} ({format}) resolved to {point}', [
            'date' => $date,
            'format' => $format->toString(),
            'point' => $point->format(Format::iso8601()),
        ]);

        return $point;
    }
}
