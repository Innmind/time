<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\Zone;

final class Europe
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
    public function uzhgorod(): Zone
    {
        return ($this->of)('Europe/Uzhgorod');
    }

    #[\NoDiscard]
    public function riga(): Zone
    {
        return ($this->of)('Europe/Riga');
    }

    #[\NoDiscard]
    public function paris(): Zone
    {
        return ($this->of)('Europe/Paris');
    }

    #[\NoDiscard]
    public function guernsey(): Zone
    {
        return ($this->of)('Europe/Guernsey');
    }

    #[\NoDiscard]
    public function samara(): Zone
    {
        return ($this->of)('Europe/Samara');
    }

    #[\NoDiscard]
    public function athens(): Zone
    {
        return ($this->of)('Europe/Athens');
    }

    #[\NoDiscard]
    public function tirane(): Zone
    {
        return ($this->of)('Europe/Tirane');
    }

    #[\NoDiscard]
    public function london(): Zone
    {
        return ($this->of)('Europe/London');
    }

    #[\NoDiscard]
    public function helsinki(): Zone
    {
        return ($this->of)('Europe/Helsinki');
    }

    #[\NoDiscard]
    public function oslo(): Zone
    {
        return ($this->of)('Europe/Oslo');
    }

    #[\NoDiscard]
    public function podgorica(): Zone
    {
        return ($this->of)('Europe/Podgorica');
    }

    #[\NoDiscard]
    public function minsk(): Zone
    {
        return ($this->of)('Europe/Minsk');
    }

    #[\NoDiscard]
    public function monaco(): Zone
    {
        return ($this->of)('Europe/Monaco');
    }

    #[\NoDiscard]
    public function lisbon(): Zone
    {
        return ($this->of)('Europe/Lisbon');
    }

    #[\NoDiscard]
    public function tallinn(): Zone
    {
        return ($this->of)('Europe/Tallinn');
    }

    #[\NoDiscard]
    public function berlin(): Zone
    {
        return ($this->of)('Europe/Berlin');
    }

    #[\NoDiscard]
    public function gibraltar(): Zone
    {
        return ($this->of)('Europe/Gibraltar');
    }

    #[\NoDiscard]
    public function prague(): Zone
    {
        return ($this->of)('Europe/Prague');
    }

    #[\NoDiscard]
    public function stockholm(): Zone
    {
        return ($this->of)('Europe/Stockholm');
    }

    #[\NoDiscard]
    public function moscow(): Zone
    {
        return ($this->of)('Europe/Moscow');
    }

    #[\NoDiscard]
    public function bucharest(): Zone
    {
        return ($this->of)('Europe/Bucharest');
    }

    #[\NoDiscard]
    public function andorra(): Zone
    {
        return ($this->of)('Europe/Andorra');
    }

    #[\NoDiscard]
    public function vilnius(): Zone
    {
        return ($this->of)('Europe/Vilnius');
    }

    #[\NoDiscard]
    public function rome(): Zone
    {
        return ($this->of)('Europe/Rome');
    }

    #[\NoDiscard]
    public function kiev(): Zone
    {
        return ($this->of)('Europe/Kiev');
    }

    #[\NoDiscard]
    public function copenhagen(): Zone
    {
        return ($this->of)('Europe/Copenhagen');
    }

    #[\NoDiscard]
    public function belgrade(): Zone
    {
        return ($this->of)('Europe/Belgrade');
    }

    #[\NoDiscard]
    public function isleOfMan(): Zone
    {
        return ($this->of)('Europe/Isle_of_Man');
    }

    #[\NoDiscard]
    public function budapest(): Zone
    {
        return ($this->of)('Europe/Budapest');
    }

    #[\NoDiscard]
    public function tiraspol(): Zone
    {
        return ($this->of)('Europe/Tiraspol');
    }

    #[\NoDiscard]
    public function vaduz(): Zone
    {
        return ($this->of)('Europe/Vaduz');
    }

    #[\NoDiscard]
    public function sarajevo(): Zone
    {
        return ($this->of)('Europe/Sarajevo');
    }

    #[\NoDiscard]
    public function amsterdam(): Zone
    {
        return ($this->of)('Europe/Amsterdam');
    }

    #[\NoDiscard]
    public function mariehamn(): Zone
    {
        return ($this->of)('Europe/Mariehamn');
    }

    #[\NoDiscard]
    public function skopje(): Zone
    {
        return ($this->of)('Europe/Skopje');
    }

    #[\NoDiscard]
    public function kaliningrad(): Zone
    {
        return ($this->of)('Europe/Kaliningrad');
    }

    #[\NoDiscard]
    public function bratislava(): Zone
    {
        return ($this->of)('Europe/Bratislava');
    }

    #[\NoDiscard]
    public function sanMarino(): Zone
    {
        return ($this->of)('Europe/San_Marino');
    }

    #[\NoDiscard]
    public function busingen(): Zone
    {
        return ($this->of)('Europe/Busingen');
    }

    #[\NoDiscard]
    public function zaporozhye(): Zone
    {
        return ($this->of)('Europe/Zaporozhye');
    }

    #[\NoDiscard]
    public function chisinau(): Zone
    {
        return ($this->of)('Europe/Chisinau');
    }

    #[\NoDiscard]
    public function brussels(): Zone
    {
        return ($this->of)('Europe/Brussels');
    }

    #[\NoDiscard]
    public function luxembourg(): Zone
    {
        return ($this->of)('Europe/Luxembourg');
    }

    #[\NoDiscard]
    public function belfast(): Zone
    {
        return ($this->of)('Europe/Belfast');
    }

    #[\NoDiscard]
    public function vienna(): Zone
    {
        return ($this->of)('Europe/Vienna');
    }

    #[\NoDiscard]
    public function ljubljana(): Zone
    {
        return ($this->of)('Europe/Ljubljana');
    }

    #[\NoDiscard]
    public function simferopol(): Zone
    {
        return ($this->of)('Europe/Simferopol');
    }

    #[\NoDiscard]
    public function dublin(): Zone
    {
        return ($this->of)('Europe/Dublin');
    }

    #[\NoDiscard]
    public function nicosia(): Zone
    {
        return ($this->of)('Europe/Nicosia');
    }

    #[\NoDiscard]
    public function zagreb(): Zone
    {
        return ($this->of)('Europe/Zagreb');
    }

    #[\NoDiscard]
    public function jersey(): Zone
    {
        return ($this->of)('Europe/Jersey');
    }

    #[\NoDiscard]
    public function madrid(): Zone
    {
        return ($this->of)('Europe/Madrid');
    }

    #[\NoDiscard]
    public function vatican(): Zone
    {
        return ($this->of)('Europe/Vatican');
    }

    #[\NoDiscard]
    public function istanbul(): Zone
    {
        return ($this->of)('Europe/Istanbul');
    }

    #[\NoDiscard]
    public function zurich(): Zone
    {
        return ($this->of)('Europe/Zurich');
    }

    #[\NoDiscard]
    public function sofia(): Zone
    {
        return ($this->of)('Europe/Sofia');
    }

    #[\NoDiscard]
    public function volgograd(): Zone
    {
        return ($this->of)('Europe/Volgograd');
    }

    #[\NoDiscard]
    public function malta(): Zone
    {
        return ($this->of)('Europe/Malta');
    }

    #[\NoDiscard]
    public function warsaw(): Zone
    {
        return ($this->of)('Europe/Warsaw');
    }
}
