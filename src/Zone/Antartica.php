<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\Zone;

final class Antartica
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
    public function davis(): Zone
    {
        return ($this->of)('Antarctica/Davis');
    }

    #[\NoDiscard]
    public function palmer(): Zone
    {
        return ($this->of)('Antarctica/Palmer');
    }

    #[\NoDiscard]
    public function syowa(): Zone
    {
        return ($this->of)('Antarctica/Syowa');
    }

    #[\NoDiscard]
    public function casey(): Zone
    {
        return ($this->of)('Antarctica/Casey');
    }

    #[\NoDiscard]
    public function troll(): Zone
    {
        return ($this->of)('Antarctica/Troll');
    }

    #[\NoDiscard]
    public function mcMurdo(): Zone
    {
        return ($this->of)('Antarctica/McMurdo');
    }

    #[\NoDiscard]
    public function vostok(): Zone
    {
        return ($this->of)('Antarctica/Vostok');
    }

    #[\NoDiscard]
    public function rothera(): Zone
    {
        return ($this->of)('Antarctica/Rothera');
    }

    #[\NoDiscard]
    public function mawson(): Zone
    {
        return ($this->of)('Antarctica/Mawson');
    }

    #[\NoDiscard]
    public function macquarie(): Zone
    {
        return ($this->of)('Antarctica/Macquarie');
    }

    #[\NoDiscard]
    public function southPole(): Zone
    {
        return ($this->of)('Antarctica/South_Pole');
    }

    #[\NoDiscard]
    public function dumontDUrville(): Zone
    {
        return ($this->of)('Antarctica/DumontDUrville');
    }
}
