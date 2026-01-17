<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone\America;

use Innmind\Time\Zone;

final class Argentina
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
    public function rioGallegos(): Zone
    {
        return ($this->of)('America/Argentina/Rio_Gallegos');
    }

    #[\NoDiscard]
    public function mendoza(): Zone
    {
        return ($this->of)('America/Argentina/Mendoza');
    }

    #[\NoDiscard]
    public function buenosAires(): Zone
    {
        return ($this->of)('America/Argentina/Buenos_Aires');
    }

    #[\NoDiscard]
    public function ushuaia(): Zone
    {
        return ($this->of)('America/Argentina/Ushuaia');
    }

    #[\NoDiscard]
    public function sanJuan(): Zone
    {
        return ($this->of)('America/Argentina/San_Juan');
    }

    #[\NoDiscard]
    public function laRioja(): Zone
    {
        return ($this->of)('America/Argentina/La_Rioja');
    }

    #[\NoDiscard]
    public function salta(): Zone
    {
        return ($this->of)('America/Argentina/Salta');
    }

    #[\NoDiscard]
    public function sanLuis(): Zone
    {
        return ($this->of)('America/Argentina/San_Luis');
    }

    #[\NoDiscard]
    public function jujuy(): Zone
    {
        return ($this->of)('America/Argentina/Jujuy');
    }

    #[\NoDiscard]
    public function tucuman(): Zone
    {
        return ($this->of)('America/Argentina/Tucuman');
    }

    #[\NoDiscard]
    public function comodRivadavia(): Zone
    {
        return ($this->of)('America/Argentina/ComodRivadavia');
    }

    #[\NoDiscard]
    public function catamarca(): Zone
    {
        return ($this->of)('America/Argentina/Catamarca');
    }

    #[\NoDiscard]
    public function cordoba(): Zone
    {
        return ($this->of)('America/Argentina/Cordoba');
    }
}
