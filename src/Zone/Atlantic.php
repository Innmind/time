<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\Zone;

final class Atlantic
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
    public function faroe(): Zone
    {
        return ($this->of)('Atlantic/Faroe');
    }

    #[\NoDiscard]
    public function southGeorgia(): Zone
    {
        return ($this->of)('Atlantic/South_Georgia');
    }

    #[\NoDiscard]
    public function capeVerde(): Zone
    {
        return ($this->of)('Atlantic/Cape_Verde');
    }

    #[\NoDiscard]
    public function faeroe(): Zone
    {
        return ($this->of)('Atlantic/Faeroe');
    }

    #[\NoDiscard]
    public function bermuda(): Zone
    {
        return ($this->of)('Atlantic/Bermuda');
    }

    #[\NoDiscard]
    public function janMayen(): Zone
    {
        return ($this->of)('Atlantic/Jan_Mayen');
    }

    #[\NoDiscard]
    public function reykjavik(): Zone
    {
        return ($this->of)('Atlantic/Reykjavik');
    }

    #[\NoDiscard]
    public function saintHelena(): Zone
    {
        return ($this->of)('Atlantic/St_Helena');
    }

    #[\NoDiscard]
    public function canary(): Zone
    {
        return ($this->of)('Atlantic/Canary');
    }

    #[\NoDiscard]
    public function madeira(): Zone
    {
        return ($this->of)('Atlantic/Madeira');
    }

    #[\NoDiscard]
    public function azores(): Zone
    {
        return ($this->of)('Atlantic/Azores');
    }

    #[\NoDiscard]
    public function stanley(): Zone
    {
        return ($this->of)('Atlantic/Stanley');
    }
}
