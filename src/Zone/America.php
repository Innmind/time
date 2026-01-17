<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\{
    Zone,
    Zone\America\Argentina,
    Zone\America\Indiana,
    Zone\America\NorthDakota,
};

final class America
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
    public function argentina(): Argentina
    {
        return Argentina::new($this->of);
    }

    #[\NoDiscard]
    public function indiana(): Indiana
    {
        return Indiana::new($this->of);
    }

    #[\NoDiscard]
    public function northDakota(): NorthDakota
    {
        return NorthDakota::new($this->of);
    }

    #[\NoDiscard]
    public function montreal(): Zone
    {
        return ($this->of)('America/Montreal');
    }

    #[\NoDiscard]
    public function guatemala(): Zone
    {
        return ($this->of)('America/Guatemala');
    }

    #[\NoDiscard]
    public function boaVista(): Zone
    {
        return ($this->of)('America/Boa_Vista');
    }

    #[\NoDiscard]
    public function portoAcre(): Zone
    {
        return ($this->of)('America/Porto_Acre');
    }

    #[\NoDiscard]
    public function winnipeg(): Zone
    {
        return ($this->of)('America/Winnipeg');
    }

    #[\NoDiscard]
    public function santiago(): Zone
    {
        return ($this->of)('America/Santiago');
    }

    #[\NoDiscard]
    public function virgin(): Zone
    {
        return ($this->of)('America/Virgin');
    }

    #[\NoDiscard]
    public function moncton(): Zone
    {
        return ($this->of)('America/Moncton');
    }

    #[\NoDiscard]
    public function noronha(): Zone
    {
        return ($this->of)('America/Noronha');
    }

    #[\NoDiscard]
    public function recife(): Zone
    {
        return ($this->of)('America/Recife');
    }

    #[\NoDiscard]
    public function saintKitts(): Zone
    {
        return ($this->of)('America/St_Kitts');
    }

    #[\NoDiscard]
    public function rankinInlet(): Zone
    {
        return ($this->of)('America/Rankin_Inlet');
    }

    #[\NoDiscard]
    public function jamaica(): Zone
    {
        return ($this->of)('America/Jamaica');
    }

    #[\NoDiscard]
    public function lima(): Zone
    {
        return ($this->of)('America/Lima');
    }

    #[\NoDiscard]
    public function rosario(): Zone
    {
        return ($this->of)('America/Rosario');
    }

    #[\NoDiscard]
    public function cambridgeBay(): Zone
    {
        return ($this->of)('America/Cambridge_Bay');
    }

    #[\NoDiscard]
    public function coralHarbour(): Zone
    {
        return ($this->of)('America/Coral_Harbour');
    }

    #[\NoDiscard]
    public function fortWayne(): Zone
    {
        return ($this->of)('America/Fort_Wayne');
    }

    #[\NoDiscard]
    public function nassau(): Zone
    {
        return ($this->of)('America/Nassau');
    }

    #[\NoDiscard]
    public function mazatlan(): Zone
    {
        return ($this->of)('America/Mazatlan');
    }

    #[\NoDiscard]
    public function grandTurk(): Zone
    {
        return ($this->of)('America/Grand_Turk');
    }

    #[\NoDiscard]
    public function merida(): Zone
    {
        return ($this->of)('America/Merida');
    }

    #[\NoDiscard]
    public function ensenada(): Zone
    {
        return ($this->of)('America/Ensenada');
    }

    #[\NoDiscard]
    public function rainyRiver(): Zone
    {
        return ($this->of)('America/Rainy_River');
    }

    #[\NoDiscard]
    public function bahiaBanderas(): Zone
    {
        return ($this->of)('America/Bahia_Banderas');
    }

    #[\NoDiscard]
    public function guadeloupe(): Zone
    {
        return ($this->of)('America/Guadeloupe');
    }

    #[\NoDiscard]
    public function cuiaba(): Zone
    {
        return ($this->of)('America/Cuiaba');
    }

    #[\NoDiscard]
    public function scoresbysund(): Zone
    {
        return ($this->of)('America/Scoresbysund');
    }

    #[\NoDiscard]
    public function maceio(): Zone
    {
        return ($this->of)('America/Maceio');
    }

    #[\NoDiscard]
    public function curacao(): Zone
    {
        return ($this->of)('America/Curacao');
    }

    #[\NoDiscard]
    public function aruba(): Zone
    {
        return ($this->of)('America/Aruba');
    }

    #[\NoDiscard]
    public function monterrey(): Zone
    {
        return ($this->of)('America/Monterrey');
    }

    #[\NoDiscard]
    public function hermosillo(): Zone
    {
        return ($this->of)('America/Hermosillo');
    }

    #[\NoDiscard]
    public function guayaquil(): Zone
    {
        return ($this->of)('America/Guayaquil');
    }

    #[\NoDiscard]
    public function managua(): Zone
    {
        return ($this->of)('America/Managua');
    }

    #[\NoDiscard]
    public function matamoros(): Zone
    {
        return ($this->of)('America/Matamoros');
    }

    #[\NoDiscard]
    public function losAngeles(): Zone
    {
        return ($this->of)('America/Los_Angeles');
    }

    #[\NoDiscard]
    public function tegucigalpa(): Zone
    {
        return ($this->of)('America/Tegucigalpa');
    }

    #[\NoDiscard]
    public function monticello(): Zone
    {
        return ($this->of)('America/Kentucky/Monticello');
    }

    #[\NoDiscard]
    public function nome(): Zone
    {
        return ($this->of)('America/Nome');
    }

    #[\NoDiscard]
    public function montevideo(): Zone
    {
        return ($this->of)('America/Montevideo');
    }

    #[\NoDiscard]
    public function gooseBay(): Zone
    {
        return ($this->of)('America/Goose_Bay');
    }

    #[\NoDiscard]
    public function boise(): Zone
    {
        return ($this->of)('America/Boise');
    }

    #[\NoDiscard]
    public function belem(): Zone
    {
        return ($this->of)('America/Belem');
    }

    #[\NoDiscard]
    public function atikokan(): Zone
    {
        return ($this->of)('America/Atikokan');
    }

    #[\NoDiscard]
    public function swiftCurrent(): Zone
    {
        return ($this->of)('America/Swift_Current');
    }

    #[\NoDiscard]
    public function detroit(): Zone
    {
        return ($this->of)('America/Detroit');
    }

    #[\NoDiscard]
    public function laPaz(): Zone
    {
        return ($this->of)('America/La_Paz');
    }

    #[\NoDiscard]
    public function chicago(): Zone
    {
        return ($this->of)('America/Chicago');
    }

    #[\NoDiscard]
    public function creston(): Zone
    {
        return ($this->of)('America/Creston');
    }

    #[\NoDiscard]
    public function nipigon(): Zone
    {
        return ($this->of)('America/Nipigon');
    }

    #[\NoDiscard]
    public function costaRica(): Zone
    {
        return ($this->of)('America/Costa_Rica');
    }

    #[\NoDiscard]
    public function halifax(): Zone
    {
        return ($this->of)('America/Halifax');
    }

    #[\NoDiscard]
    public function yellowknife(): Zone
    {
        return ($this->of)('America/Yellowknife');
    }

    #[\NoDiscard]
    public function puertoRico(): Zone
    {
        return ($this->of)('America/Puerto_Rico');
    }

    #[\NoDiscard]
    public function edmonton(): Zone
    {
        return ($this->of)('America/Edmonton');
    }

    #[\NoDiscard]
    public function mexicoCity(): Zone
    {
        return ($this->of)('America/Mexico_City');
    }

    #[\NoDiscard]
    public function saoPaulo(): Zone
    {
        return ($this->of)('America/Sao_Paulo');
    }

    #[\NoDiscard]
    public function yakutat(): Zone
    {
        return ($this->of)('America/Yakutat');
    }

    #[\NoDiscard]
    public function saintThomas(): Zone
    {
        return ($this->of)('America/St_Thomas');
    }

    #[\NoDiscard]
    public function chihuahua(): Zone
    {
        return ($this->of)('America/Chihuahua');
    }

    #[\NoDiscard]
    public function grenada(): Zone
    {
        return ($this->of)('America/Grenada');
    }

    #[\NoDiscard]
    public function elSalvador(): Zone
    {
        return ($this->of)('America/El_Salvador');
    }

    #[\NoDiscard]
    public function santoDomingo(): Zone
    {
        return ($this->of)('America/Santo_Domingo');
    }

    #[\NoDiscard]
    public function montserrat(): Zone
    {
        return ($this->of)('America/Montserrat');
    }

    #[\NoDiscard]
    public function portoVelho(): Zone
    {
        return ($this->of)('America/Porto_Velho');
    }

    #[\NoDiscard]
    public function panama(): Zone
    {
        return ($this->of)('America/Panama');
    }

    #[\NoDiscard]
    public function antigua(): Zone
    {
        return ($this->of)('America/Antigua');
    }

    #[\NoDiscard]
    public function santarem(): Zone
    {
        return ($this->of)('America/Santarem');
    }

    #[\NoDiscard]
    public function dawson(): Zone
    {
        return ($this->of)('America/Dawson');
    }

    #[\NoDiscard]
    public function saintBarthelemy(): Zone
    {
        return ($this->of)('America/St_Barthelemy');
    }

    #[\NoDiscard]
    public function iqaluit(): Zone
    {
        return ($this->of)('America/Iqaluit');
    }

    #[\NoDiscard]
    public function eirunepe(): Zone
    {
        return ($this->of)('America/Eirunepe');
    }

    #[\NoDiscard]
    public function inuvik(): Zone
    {
        return ($this->of)('America/Inuvik');
    }

    #[\NoDiscard]
    public function anguilla(): Zone
    {
        return ($this->of)('America/Anguilla');
    }

    #[\NoDiscard]
    public function portOfSpain(): Zone
    {
        return ($this->of)('America/Port_of_Spain');
    }

    #[\NoDiscard]
    public function araguaina(): Zone
    {
        return ($this->of)('America/Araguaina');
    }

    #[\NoDiscard]
    public function guyana(): Zone
    {
        return ($this->of)('America/Guyana');
    }

    #[\NoDiscard]
    public function fortaleza(): Zone
    {
        return ($this->of)('America/Fortaleza');
    }

    #[\NoDiscard]
    public function blancSablon(): Zone
    {
        return ($this->of)('America/Blanc-Sablon');
    }

    #[\NoDiscard]
    public function juneau(): Zone
    {
        return ($this->of)('America/Juneau');
    }

    #[\NoDiscard]
    public function cayman(): Zone
    {
        return ($this->of)('America/Cayman');
    }

    #[\NoDiscard]
    public function menominee(): Zone
    {
        return ($this->of)('America/Menominee');
    }

    #[\NoDiscard]
    public function cayenne(): Zone
    {
        return ($this->of)('America/Cayenne');
    }

    #[\NoDiscard]
    public function pangnirtung(): Zone
    {
        return ($this->of)('America/Pangnirtung');
    }

    #[\NoDiscard]
    public function metlakatla(): Zone
    {
        return ($this->of)('America/Metlakatla');
    }

    #[\NoDiscard]
    public function asuncion(): Zone
    {
        return ($this->of)('America/Asuncion');
    }

    #[\NoDiscard]
    public function saintLucia(): Zone
    {
        return ($this->of)('America/St_Lucia');
    }

    #[\NoDiscard]
    public function saintVincent(): Zone
    {
        return ($this->of)('America/St_Vincent');
    }

    #[\NoDiscard]
    public function martinique(): Zone
    {
        return ($this->of)('America/Martinique');
    }

    #[\NoDiscard]
    public function kralendijk(): Zone
    {
        return ($this->of)('America/Kralendijk');
    }

    #[\NoDiscard]
    public function newYork(): Zone
    {
        return ($this->of)('America/New_York');
    }

    #[\NoDiscard]
    public function vancouver(): Zone
    {
        return ($this->of)('America/Vancouver');
    }

    #[\NoDiscard]
    public function bogota(): Zone
    {
        return ($this->of)('America/Bogota');
    }

    #[\NoDiscard]
    public function dominica(): Zone
    {
        return ($this->of)('America/Dominica');
    }

    #[\NoDiscard]
    public function danmarkshavn(): Zone
    {
        return ($this->of)('America/Danmarkshavn');
    }

    #[\NoDiscard]
    public function anchorage(): Zone
    {
        return ($this->of)('America/Anchorage');
    }

    #[\NoDiscard]
    public function marigot(): Zone
    {
        return ($this->of)('America/Marigot');
    }

    #[\NoDiscard]
    public function rioBranco(): Zone
    {
        return ($this->of)('America/Rio_Branco');
    }

    #[\NoDiscard]
    public function paramaribo(): Zone
    {
        return ($this->of)('America/Paramaribo');
    }

    #[\NoDiscard]
    public function caracas(): Zone
    {
        return ($this->of)('America/Caracas');
    }

    #[\NoDiscard]
    public function resolute(): Zone
    {
        return ($this->of)('America/Resolute');
    }

    #[\NoDiscard]
    public function godthab(): Zone
    {
        return ($this->of)('America/Godthab');
    }

    #[\NoDiscard]
    public function catamarca(): Zone
    {
        return ($this->of)('America/Catamarca');
    }

    #[\NoDiscard]
    public function glaceBay(): Zone
    {
        return ($this->of)('America/Glace_Bay');
    }

    #[\NoDiscard]
    public function regina(): Zone
    {
        return ($this->of)('America/Regina');
    }

    #[\NoDiscard]
    public function toronto(): Zone
    {
        return ($this->of)('America/Toronto');
    }

    #[\NoDiscard]
    public function barbados(): Zone
    {
        return ($this->of)('America/Barbados');
    }

    #[\NoDiscard]
    public function santaIsabel(): Zone
    {
        return ($this->of)('America/Santa_Isabel');
    }

    #[\NoDiscard]
    public function miquelon(): Zone
    {
        return ($this->of)('America/Miquelon');
    }

    #[\NoDiscard]
    public function havana(): Zone
    {
        return ($this->of)('America/Havana');
    }

    #[\NoDiscard]
    public function ojinaga(): Zone
    {
        return ($this->of)('America/Ojinaga');
    }

    #[\NoDiscard]
    public function denver(): Zone
    {
        return ($this->of)('America/Denver');
    }

    #[\NoDiscard]
    public function cancun(): Zone
    {
        return ($this->of)('America/Cancun');
    }

    #[\NoDiscard]
    public function thunderBay(): Zone
    {
        return ($this->of)('America/Thunder_Bay');
    }

    #[\NoDiscard]
    public function adak(): Zone
    {
        return ($this->of)('America/Adak');
    }

    #[\NoDiscard]
    public function saintJohns(): Zone
    {
        return ($this->of)('America/St_Johns');
    }

    #[\NoDiscard]
    public function portAuPrince(): Zone
    {
        return ($this->of)('America/Port-au-Prince');
    }

    #[\NoDiscard]
    public function whitehorse(): Zone
    {
        return ($this->of)('America/Whitehorse');
    }

    #[\NoDiscard]
    public function louisville(): Zone
    {
        return ($this->of)('America/Louisville');
    }

    #[\NoDiscard]
    public function manaus(): Zone
    {
        return ($this->of)('America/Manaus');
    }

    #[\NoDiscard]
    public function lowerPrinces(): Zone
    {
        return ($this->of)('America/Lower_Princes');
    }

    #[\NoDiscard]
    public function sitka(): Zone
    {
        return ($this->of)('America/Sitka');
    }

    #[\NoDiscard]
    public function thule(): Zone
    {
        return ($this->of)('America/Thule');
    }

    #[\NoDiscard]
    public function campoGrande(): Zone
    {
        return ($this->of)('America/Campo_Grande');
    }

    #[\NoDiscard]
    public function phoenix(): Zone
    {
        return ($this->of)('America/Phoenix');
    }

    #[\NoDiscard]
    public function shiprock(): Zone
    {
        return ($this->of)('America/Shiprock');
    }

    #[\NoDiscard]
    public function bahia(): Zone
    {
        return ($this->of)('America/Bahia');
    }

    #[\NoDiscard]
    public function tortola(): Zone
    {
        return ($this->of)('America/Tortola');
    }

    #[\NoDiscard]
    public function dawsonCreek(): Zone
    {
        return ($this->of)('America/Dawson_Creek');
    }

    #[\NoDiscard]
    public function tijuana(): Zone
    {
        return ($this->of)('America/Tijuana');
    }

    #[\NoDiscard]
    public function belize(): Zone
    {
        return ($this->of)('America/Belize');
    }

    #[\NoDiscard]
    public function atka(): Zone
    {
        return ($this->of)('America/Atka');
    }
}
