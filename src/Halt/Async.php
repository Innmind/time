<?php
declare(strict_types = 1);

namespace Innmind\Time\Halt;

use Innmind\Time\{
    Async\Suspended,
    Async\Resumable,
    Clock,
    Period,
};
use Innmind\Immutable\Attempt;

/**
 * @internal
 */
final class Async implements Implementation
{
    private function __construct(
        private Clock $clock,
    ) {
    }

    #[\Override]
    public function __invoke(Period $period): Attempt
    {
        /** @var Resumable */
        $return = \Fiber::suspend(Suspended::of(
            $this->clock->now(),
            $period,
        ));

        return $return->unwrap();
    }

    #[\NoDiscard]
    public static function of(Clock $clock): self
    {
        return new self($clock);
    }
}
