<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\Zone;

final class Australia
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
    public function lindeman(): Zone
    {
        return ($this->of)('Australia/Lindeman');
    }

    #[\NoDiscard]
    public function currie(): Zone
    {
        return ($this->of)('Australia/Currie');
    }

    #[\NoDiscard]
    public function victoria(): Zone
    {
        return ($this->of)('Australia/Victoria');
    }

    #[\NoDiscard]
    public function adelaide(): Zone
    {
        return ($this->of)('Australia/Adelaide');
    }

    #[\NoDiscard]
    public function perth(): Zone
    {
        return ($this->of)('Australia/Perth');
    }

    #[\NoDiscard]
    public function brisbane(): Zone
    {
        return ($this->of)('Australia/Brisbane');
    }

    #[\NoDiscard]
    public function west(): Zone
    {
        return ($this->of)('Australia/West');
    }

    #[\NoDiscard]
    public function australianCapitalTerritory(): Zone
    {
        return ($this->of)('Australia/ACT');
    }

    #[\NoDiscard]
    public function north(): Zone
    {
        return ($this->of)('Australia/North');
    }

    #[\NoDiscard]
    public function eucla(): Zone
    {
        return ($this->of)('Australia/Eucla');
    }

    #[\NoDiscard]
    public function lordeHoweIsland(): Zone
    {
        return ($this->of)('Australia/LHI');
    }

    #[\NoDiscard]
    public function newSouthWales(): Zone
    {
        return ($this->of)('Australia/NSW');
    }

    #[\NoDiscard]
    public function queensland(): Zone
    {
        return ($this->of)('Australia/Queensland');
    }

    #[\NoDiscard]
    public function south(): Zone
    {
        return ($this->of)('Australia/South');
    }

    #[\NoDiscard]
    public function melbourne(): Zone
    {
        return ($this->of)('Australia/Melbourne');
    }

    #[\NoDiscard]
    public function yancowinna(): Zone
    {
        return ($this->of)('Australia/Yancowinna');
    }

    #[\NoDiscard]
    public function canberra(): Zone
    {
        return ($this->of)('Australia/Canberra');
    }

    #[\NoDiscard]
    public function sydney(): Zone
    {
        return ($this->of)('Australia/Sydney');
    }

    #[\NoDiscard]
    public function darwin(): Zone
    {
        return ($this->of)('Australia/Darwin');
    }

    #[\NoDiscard]
    public function hobart(): Zone
    {
        return ($this->of)('Australia/Hobart');
    }

    #[\NoDiscard]
    public function brokenHill(): Zone
    {
        return ($this->of)('Australia/Broken_Hill');
    }

    #[\NoDiscard]
    public function tasmania(): Zone
    {
        return ($this->of)('Australia/Tasmania');
    }
}
