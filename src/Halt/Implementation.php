<?php
declare(strict_types = 1);

namespace Innmind\Time\Halt;

use Innmind\Time\Period;
use Innmind\Immutable\{
    Attempt,
    SideEffect,
};

/**
 * @internal
 */
interface Implementation
{
    /**
     * Halt the program for the given period
     *
     * @return Attempt<SideEffect>
     */
    #[\NoDiscard]
    public function __invoke(Period $period): Attempt;
}
