<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\Zone;

final class Arctic
{
    /**
     * @param callable(non-empty-string): Zone $of
     */
    private function __construct(
        private $of,
    ) {
    }

    /**
     * @internal
     *
     * @param callable(non-empty-string): Zone $of
     */
    #[\NoDiscard]
    public static function new(callable $of): self
    {
        return new self($of);
    }

    #[\NoDiscard]
    public function longyearbyen(): Zone
    {
        return ($this->of)('Arctic/Longyearbyen');
    }
}
