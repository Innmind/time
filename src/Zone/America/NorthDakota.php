<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone\America;

use Innmind\Time\Zone;

final class NorthDakota
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
    public function beulah(): Zone
    {
        return ($this->of)('America/North_Dakota/Beulah');
    }

    #[\NoDiscard]
    public function newSalem(): Zone
    {
        return ($this->of)('America/North_Dakota/New_Salem');
    }

    #[\NoDiscard]
    public function center(): Zone
    {
        return ($this->of)('America/North_Dakota/Center');
    }
}
