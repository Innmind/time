<?php
declare(strict_types = 1);

namespace Innmind\Time\Format;

use Innmind\Time\Format;

/**
 * @psalm-immutable
 */
interface Custom
{
    #[\NoDiscard]
    public function normalize(): Format;
}
