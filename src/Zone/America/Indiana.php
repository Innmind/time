<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone\America;

use Innmind\Time\Zone;

final class Indiana
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
    public function vincennes(): Zone
    {
        return ($this->of)('America/Indiana/Vincennes');
    }

    #[\NoDiscard]
    public function marengo(): Zone
    {
        return ($this->of)('America/Indiana/Marengo');
    }

    #[\NoDiscard]
    public function tellCity(): Zone
    {
        return ($this->of)('America/Indiana/Tell_City');
    }

    #[\NoDiscard]
    public function knox(): Zone
    {
        return ($this->of)('America/Indiana/Knox');
    }

    #[\NoDiscard]
    public function vevay(): Zone
    {
        return ($this->of)('America/Indiana/Vevay');
    }

    #[\NoDiscard]
    public function indianapolis(): Zone
    {
        return ($this->of)('America/Indiana/Indianapolis');
    }

    #[\NoDiscard]
    public function petersburg(): Zone
    {
        return ($this->of)('America/Indiana/Petersburg');
    }

    #[\NoDiscard]
    public function winamac(): Zone
    {
        return ($this->of)('America/Indiana/Winamac');
    }
}
