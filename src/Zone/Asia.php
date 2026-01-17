<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\Zone;

final class Asia
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
    public function manila(): Zone
    {
        return ($this->of)('Asia/Manila');
    }

    #[\NoDiscard]
    public function baghdad(): Zone
    {
        return ($this->of)('Asia/Baghdad');
    }

    #[\NoDiscard]
    public function ulaanbaatar(): Zone
    {
        return ($this->of)('Asia/Ulaanbaatar');
    }

    #[\NoDiscard]
    public function almaty(): Zone
    {
        return ($this->of)('Asia/Almaty');
    }

    #[\NoDiscard]
    public function samarkand(): Zone
    {
        return ($this->of)('Asia/Samarkand');
    }

    #[\NoDiscard]
    public function ustNera(): Zone
    {
        return ($this->of)('Asia/Ust-Nera');
    }

    #[\NoDiscard]
    public function pontianak(): Zone
    {
        return ($this->of)('Asia/Pontianak');
    }

    #[\NoDiscard]
    public function tehran(): Zone
    {
        return ($this->of)('Asia/Tehran');
    }

    #[\NoDiscard]
    public function saigon(): Zone
    {
        return ($this->of)('Asia/Saigon');
    }

    #[\NoDiscard]
    public function krasnoyarsk(): Zone
    {
        return ($this->of)('Asia/Krasnoyarsk');
    }

    #[\NoDiscard]
    public function hebron(): Zone
    {
        return ($this->of)('Asia/Hebron');
    }

    #[\NoDiscard]
    public function kuching(): Zone
    {
        return ($this->of)('Asia/Kuching');
    }

    #[\NoDiscard]
    public function katmandu(): Zone
    {
        return ($this->of)('Asia/Katmandu');
    }

    #[\NoDiscard]
    public function shanghai(): Zone
    {
        return ($this->of)('Asia/Shanghai');
    }

    #[\NoDiscard]
    public function calcutta(): Zone
    {
        return ($this->of)('Asia/Calcutta');
    }

    #[\NoDiscard]
    public function jayapura(): Zone
    {
        return ($this->of)('Asia/Jayapura');
    }

    #[\NoDiscard]
    public function muscat(): Zone
    {
        return ($this->of)('Asia/Muscat');
    }

    #[\NoDiscard]
    public function omsk(): Zone
    {
        return ($this->of)('Asia/Omsk');
    }

    #[\NoDiscard]
    public function aqtau(): Zone
    {
        return ($this->of)('Asia/Aqtau');
    }

    #[\NoDiscard]
    public function khandyga(): Zone
    {
        return ($this->of)('Asia/Khandyga');
    }

    #[\NoDiscard]
    public function riyadh(): Zone
    {
        return ($this->of)('Asia/Riyadh');
    }

    #[\NoDiscard]
    public function bangkok(): Zone
    {
        return ($this->of)('Asia/Bangkok');
    }

    #[\NoDiscard]
    public function thimphu(): Zone
    {
        return ($this->of)('Asia/Thimphu');
    }

    #[\NoDiscard]
    public function aden(): Zone
    {
        return ($this->of)('Asia/Aden');
    }

    #[\NoDiscard]
    public function yekaterinburg(): Zone
    {
        return ($this->of)('Asia/Yekaterinburg');
    }

    #[\NoDiscard]
    public function oral(): Zone
    {
        return ($this->of)('Asia/Oral');
    }

    #[\NoDiscard]
    public function novokuznetsk(): Zone
    {
        return ($this->of)('Asia/Novokuznetsk');
    }

    #[\NoDiscard]
    public function bishkek(): Zone
    {
        return ($this->of)('Asia/Bishkek');
    }

    #[\NoDiscard]
    public function macau(): Zone
    {
        return ($this->of)('Asia/Macau');
    }

    #[\NoDiscard]
    public function qyzylorda(): Zone
    {
        return ($this->of)('Asia/Qyzylorda');
    }

    #[\NoDiscard]
    public function seoul(): Zone
    {
        return ($this->of)('Asia/Seoul');
    }

    #[\NoDiscard]
    public function irkutsk(): Zone
    {
        return ($this->of)('Asia/Irkutsk');
    }

    #[\NoDiscard]
    public function aqtobe(): Zone
    {
        return ($this->of)('Asia/Aqtobe');
    }

    #[\NoDiscard]
    public function chongqing(): Zone
    {
        return ($this->of)('Asia/Chongqing');
    }

    #[\NoDiscard]
    public function kabul(): Zone
    {
        return ($this->of)('Asia/Kabul');
    }

    #[\NoDiscard]
    public function thimbu(): Zone
    {
        return ($this->of)('Asia/Thimbu');
    }

    #[\NoDiscard]
    public function karachi(): Zone
    {
        return ($this->of)('Asia/Karachi');
    }

    #[\NoDiscard]
    public function jakarta(): Zone
    {
        return ($this->of)('Asia/Jakarta');
    }

    #[\NoDiscard]
    public function harbin(): Zone
    {
        return ($this->of)('Asia/Harbin');
    }

    #[\NoDiscard]
    public function novosibirsk(): Zone
    {
        return ($this->of)('Asia/Novosibirsk');
    }

    #[\NoDiscard]
    public function dili(): Zone
    {
        return ($this->of)('Asia/Dili');
    }

    #[\NoDiscard]
    public function colombo(): Zone
    {
        return ($this->of)('Asia/Colombo');
    }

    #[\NoDiscard]
    public function ashkhabad(): Zone
    {
        return ($this->of)('Asia/Ashkhabad');
    }

    #[\NoDiscard]
    public function dacca(): Zone
    {
        return ($this->of)('Asia/Dacca');
    }

    #[\NoDiscard]
    public function ashgabat(): Zone
    {
        return ($this->of)('Asia/Ashgabat');
    }

    #[\NoDiscard]
    public function ujungPandang(): Zone
    {
        return ($this->of)('Asia/Ujung_Pandang');
    }

    #[\NoDiscard]
    public function qatar(): Zone
    {
        return ($this->of)('Asia/Qatar');
    }

    #[\NoDiscard]
    public function tokyo(): Zone
    {
        return ($this->of)('Asia/Tokyo');
    }

    #[\NoDiscard]
    public function macao(): Zone
    {
        return ($this->of)('Asia/Macao');
    }

    #[\NoDiscard]
    public function tashkent(): Zone
    {
        return ($this->of)('Asia/Tashkent');
    }

    #[\NoDiscard]
    public function baku(): Zone
    {
        return ($this->of)('Asia/Baku');
    }

    #[\NoDiscard]
    public function pyongyang(): Zone
    {
        return ($this->of)('Asia/Pyongyang');
    }

    #[\NoDiscard]
    public function tbilisi(): Zone
    {
        return ($this->of)('Asia/Tbilisi');
    }

    #[\NoDiscard]
    public function amman(): Zone
    {
        return ($this->of)('Asia/Amman');
    }

    #[\NoDiscard]
    public function vladivostok(): Zone
    {
        return ($this->of)('Asia/Vladivostok');
    }

    #[\NoDiscard]
    public function damascus(): Zone
    {
        return ($this->of)('Asia/Damascus');
    }

    #[\NoDiscard]
    public function bahrain(): Zone
    {
        return ($this->of)('Asia/Bahrain');
    }

    #[\NoDiscard]
    public function vientiane(): Zone
    {
        return ($this->of)('Asia/Vientiane');
    }

    #[\NoDiscard]
    public function hovd(): Zone
    {
        return ($this->of)('Asia/Hovd');
    }

    #[\NoDiscard]
    public function kuwait(): Zone
    {
        return ($this->of)('Asia/Kuwait');
    }

    #[\NoDiscard]
    public function magadan(): Zone
    {
        return ($this->of)('Asia/Magadan');
    }

    #[\NoDiscard]
    public function ulanBator(): Zone
    {
        return ($this->of)('Asia/Ulan_Bator');
    }

    #[\NoDiscard]
    public function nicosia(): Zone
    {
        return ($this->of)('Asia/Nicosia');
    }

    #[\NoDiscard]
    public function telAviv(): Zone
    {
        return ($this->of)('Asia/Tel_Aviv');
    }

    #[\NoDiscard]
    public function choibalsan(): Zone
    {
        return ($this->of)('Asia/Choibalsan');
    }

    #[\NoDiscard]
    public function brunei(): Zone
    {
        return ($this->of)('Asia/Brunei');
    }

    #[\NoDiscard]
    public function kualaLumpur(): Zone
    {
        return ($this->of)('Asia/Kuala_Lumpur');
    }

    #[\NoDiscard]
    public function kathmandu(): Zone
    {
        return ($this->of)('Asia/Kathmandu');
    }

    #[\NoDiscard]
    public function srednekolymsk(): Zone
    {
        return ($this->of)('Asia/Srednekolymsk');
    }

    #[\NoDiscard]
    public function dubai(): Zone
    {
        return ($this->of)('Asia/Dubai');
    }

    #[\NoDiscard]
    public function yakutsk(): Zone
    {
        return ($this->of)('Asia/Yakutsk');
    }

    #[\NoDiscard]
    public function beirut(): Zone
    {
        return ($this->of)('Asia/Beirut');
    }

    #[\NoDiscard]
    public function gaza(): Zone
    {
        return ($this->of)('Asia/Gaza');
    }

    #[\NoDiscard]
    public function singapore(): Zone
    {
        return ($this->of)('Asia/Singapore');
    }

    #[\NoDiscard]
    public function rangoon(): Zone
    {
        return ($this->of)('Asia/Rangoon');
    }

    #[\NoDiscard]
    public function sakhalin(): Zone
    {
        return ($this->of)('Asia/Sakhalin');
    }

    #[\NoDiscard]
    public function phnomPenh(): Zone
    {
        return ($this->of)('Asia/Phnom_Penh');
    }

    #[\NoDiscard]
    public function kamchatka(): Zone
    {
        return ($this->of)('Asia/Kamchatka');
    }

    #[\NoDiscard]
    public function yerevan(): Zone
    {
        return ($this->of)('Asia/Yerevan');
    }

    #[\NoDiscard]
    public function chungking(): Zone
    {
        return ($this->of)('Asia/Chungking');
    }

    #[\NoDiscard]
    public function hoChiMinh(): Zone
    {
        return ($this->of)('Asia/Ho_Chi_Minh');
    }

    #[\NoDiscard]
    public function chita(): Zone
    {
        return ($this->of)('Asia/Chita');
    }

    #[\NoDiscard]
    public function istanbul(): Zone
    {
        return ($this->of)('Asia/Istanbul');
    }

    #[\NoDiscard]
    public function hongKong(): Zone
    {
        return ($this->of)('Asia/Hong_Kong');
    }

    #[\NoDiscard]
    public function dhaka(): Zone
    {
        return ($this->of)('Asia/Dhaka');
    }

    #[\NoDiscard]
    public function jerusalem(): Zone
    {
        return ($this->of)('Asia/Jerusalem');
    }

    #[\NoDiscard]
    public function makassar(): Zone
    {
        return ($this->of)('Asia/Makassar');
    }

    #[\NoDiscard]
    public function kolkata(): Zone
    {
        return ($this->of)('Asia/Kolkata');
    }

    #[\NoDiscard]
    public function taipei(): Zone
    {
        return ($this->of)('Asia/Taipei');
    }

    #[\NoDiscard]
    public function dushanbe(): Zone
    {
        return ($this->of)('Asia/Dushanbe');
    }

    #[\NoDiscard]
    public function anadyr(): Zone
    {
        return ($this->of)('Asia/Anadyr');
    }
}
