<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\Zone;

final class Africa
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
    public function lome(): Zone
    {
        return ($this->of)('Africa/Lome');
    }

    #[\NoDiscard]
    public function ceuta(): Zone
    {
        return ($this->of)('Africa/Ceuta');
    }

    #[\NoDiscard]
    public function elAaiun(): Zone
    {
        return ($this->of)('Africa/El_Aaiun');
    }

    #[\NoDiscard]
    public function portoNovo(): Zone
    {
        return ($this->of)('Africa/Porto-Novo');
    }

    #[\NoDiscard]
    public function djibouti(): Zone
    {
        return ($this->of)('Africa/Djibouti');
    }

    #[\NoDiscard]
    public function windhoek(): Zone
    {
        return ($this->of)('Africa/Windhoek');
    }

    #[\NoDiscard]
    public function algiers(): Zone
    {
        return ($this->of)('Africa/Algiers');
    }

    #[\NoDiscard]
    public function ouagadougou(): Zone
    {
        return ($this->of)('Africa/Ouagadougou');
    }

    #[\NoDiscard]
    public function bamako(): Zone
    {
        return ($this->of)('Africa/Bamako');
    }

    #[\NoDiscard]
    public function harare(): Zone
    {
        return ($this->of)('Africa/Harare');
    }

    #[\NoDiscard]
    public function bujumbura(): Zone
    {
        return ($this->of)('Africa/Bujumbura');
    }

    #[\NoDiscard]
    public function douala(): Zone
    {
        return ($this->of)('Africa/Douala');
    }

    #[\NoDiscard]
    public function brazzaville(): Zone
    {
        return ($this->of)('Africa/Brazzaville');
    }

    #[\NoDiscard]
    public function tripoli(): Zone
    {
        return ($this->of)('Africa/Tripoli');
    }

    #[\NoDiscard]
    public function casablanca(): Zone
    {
        return ($this->of)('Africa/Casablanca');
    }

    #[\NoDiscard]
    public function niamey(): Zone
    {
        return ($this->of)('Africa/Niamey');
    }

    #[\NoDiscard]
    public function mbabane(): Zone
    {
        return ($this->of)('Africa/Mbabane');
    }

    #[\NoDiscard]
    public function blantyre(): Zone
    {
        return ($this->of)('Africa/Blantyre');
    }

    #[\NoDiscard]
    public function conakry(): Zone
    {
        return ($this->of)('Africa/Conakry');
    }

    #[\NoDiscard]
    public function khartoum(): Zone
    {
        return ($this->of)('Africa/Khartoum');
    }

    #[\NoDiscard]
    public function luanda(): Zone
    {
        return ($this->of)('Africa/Luanda');
    }

    #[\NoDiscard]
    public function libreville(): Zone
    {
        return ($this->of)('Africa/Libreville');
    }

    #[\NoDiscard]
    public function maseru(): Zone
    {
        return ($this->of)('Africa/Maseru');
    }

    #[\NoDiscard]
    public function lusaka(): Zone
    {
        return ($this->of)('Africa/Lusaka');
    }

    #[\NoDiscard]
    public function darEsSalaam(): Zone
    {
        return ($this->of)('Africa/Dar_es_Salaam');
    }

    #[\NoDiscard]
    public function nairobi(): Zone
    {
        return ($this->of)('Africa/Nairobi');
    }

    #[\NoDiscard]
    public function banjul(): Zone
    {
        return ($this->of)('Africa/Banjul');
    }

    #[\NoDiscard]
    public function bissau(): Zone
    {
        return ($this->of)('Africa/Bissau');
    }

    #[\NoDiscard]
    public function nouakchott(): Zone
    {
        return ($this->of)('Africa/Nouakchott');
    }

    #[\NoDiscard]
    public function johannesburg(): Zone
    {
        return ($this->of)('Africa/Johannesburg');
    }

    #[\NoDiscard]
    public function timbuktu(): Zone
    {
        return ($this->of)('Africa/Timbuktu');
    }

    #[\NoDiscard]
    public function saoTome(): Zone
    {
        return ($this->of)('Africa/Sao_Tome');
    }

    #[\NoDiscard]
    public function freetown(): Zone
    {
        return ($this->of)('Africa/Freetown');
    }

    #[\NoDiscard]
    public function kampala(): Zone
    {
        return ($this->of)('Africa/Kampala');
    }

    #[\NoDiscard]
    public function dakar(): Zone
    {
        return ($this->of)('Africa/Dakar');
    }

    #[\NoDiscard]
    public function lagos(): Zone
    {
        return ($this->of)('Africa/Lagos');
    }

    #[\NoDiscard]
    public function cairo(): Zone
    {
        return ($this->of)('Africa/Cairo');
    }

    #[\NoDiscard]
    public function mogadishu(): Zone
    {
        return ($this->of)('Africa/Mogadishu');
    }

    #[\NoDiscard]
    public function gaborone(): Zone
    {
        return ($this->of)('Africa/Gaborone');
    }

    #[\NoDiscard]
    public function tunis(): Zone
    {
        return ($this->of)('Africa/Tunis');
    }

    #[\NoDiscard]
    public function kigali(): Zone
    {
        return ($this->of)('Africa/Kigali');
    }

    #[\NoDiscard]
    public function malabo(): Zone
    {
        return ($this->of)('Africa/Malabo');
    }

    #[\NoDiscard]
    public function abidjan(): Zone
    {
        return ($this->of)('Africa/Abidjan');
    }

    #[\NoDiscard]
    public function accra(): Zone
    {
        return ($this->of)('Africa/Accra');
    }

    #[\NoDiscard]
    public function asmera(): Zone
    {
        return ($this->of)('Africa/Asmera');
    }

    #[\NoDiscard]
    public function ndjamena(): Zone
    {
        return ($this->of)('Africa/Ndjamena');
    }

    #[\NoDiscard]
    public function lubumbashi(): Zone
    {
        return ($this->of)('Africa/Lubumbashi');
    }

    #[\NoDiscard]
    public function juba(): Zone
    {
        return ($this->of)('Africa/Juba');
    }

    #[\NoDiscard]
    public function monrovia(): Zone
    {
        return ($this->of)('Africa/Monrovia');
    }

    #[\NoDiscard]
    public function maputo(): Zone
    {
        return ($this->of)('Africa/Maputo');
    }

    #[\NoDiscard]
    public function kinshasa(): Zone
    {
        return ($this->of)('Africa/Kinshasa');
    }

    #[\NoDiscard]
    public function asmara(): Zone
    {
        return ($this->of)('Africa/Asmara');
    }

    #[\NoDiscard]
    public function bangui(): Zone
    {
        return ($this->of)('Africa/Bangui');
    }

    #[\NoDiscard]
    public function addisAbaba(): Zone
    {
        return ($this->of)('Africa/Addis_Ababa');
    }
}
