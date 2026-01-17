<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\Zone;

final class Indian
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
    public function cocos(): Zone
    {
        return ($this->of)('Indian/Cocos');
    }

    #[\NoDiscard]
    public function antananarivo(): Zone
    {
        return ($this->of)('Indian/Antananarivo');
    }

    #[\NoDiscard]
    public function reunion(): Zone
    {
        return ($this->of)('Indian/Reunion');
    }

    #[\NoDiscard]
    public function chagos(): Zone
    {
        return ($this->of)('Indian/Chagos');
    }

    #[\NoDiscard]
    public function comoro(): Zone
    {
        return ($this->of)('Indian/Comoro');
    }

    #[\NoDiscard]
    public function mayotte(): Zone
    {
        return ($this->of)('Indian/Mayotte');
    }

    #[\NoDiscard]
    public function maldives(): Zone
    {
        return ($this->of)('Indian/Maldives');
    }

    #[\NoDiscard]
    public function mauritius(): Zone
    {
        return ($this->of)('Indian/Mauritius');
    }

    #[\NoDiscard]
    public function mahe(): Zone
    {
        return ($this->of)('Indian/Mahe');
    }

    #[\NoDiscard]
    public function kerguelen(): Zone
    {
        return ($this->of)('Indian/Kerguelen');
    }

    #[\NoDiscard]
    public function christmas(): Zone
    {
        return ($this->of)('Indian/Christmas');
    }
}
