<?php
declare(strict_types = 1);

namespace Innmind\Time\Zone;

use Innmind\Time\Zone;

final class Pacific
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
    public function kosrae(): Zone
    {
        return ($this->of)('Pacific/Kosrae');
    }

    #[\NoDiscard]
    public function enderbury(): Zone
    {
        return ($this->of)('Pacific/Enderbury');
    }

    #[\NoDiscard]
    public function apia(): Zone
    {
        return ($this->of)('Pacific/Apia');
    }

    #[\NoDiscard]
    public function noumea(): Zone
    {
        return ($this->of)('Pacific/Noumea');
    }

    #[\NoDiscard]
    public function chatham(): Zone
    {
        return ($this->of)('Pacific/Chatham');
    }

    #[\NoDiscard]
    public function wake(): Zone
    {
        return ($this->of)('Pacific/Wake');
    }

    #[\NoDiscard]
    public function wallis(): Zone
    {
        return ($this->of)('Pacific/Wallis');
    }

    #[\NoDiscard]
    public function johnston(): Zone
    {
        return ($this->of)('Pacific/Johnston');
    }

    #[\NoDiscard]
    public function saipan(): Zone
    {
        return ($this->of)('Pacific/Saipan');
    }

    #[\NoDiscard]
    public function tarawa(): Zone
    {
        return ($this->of)('Pacific/Tarawa');
    }

    #[\NoDiscard]
    public function pitcairn(): Zone
    {
        return ($this->of)('Pacific/Pitcairn');
    }

    #[\NoDiscard]
    public function niue(): Zone
    {
        return ($this->of)('Pacific/Niue');
    }

    #[\NoDiscard]
    public function ponape(): Zone
    {
        return ($this->of)('Pacific/Ponape');
    }

    #[\NoDiscard]
    public function guam(): Zone
    {
        return ($this->of)('Pacific/Guam');
    }

    #[\NoDiscard]
    public function auckland(): Zone
    {
        return ($this->of)('Pacific/Auckland');
    }

    #[\NoDiscard]
    public function pagoPago(): Zone
    {
        return ($this->of)('Pacific/Pago_Pago');
    }

    #[\NoDiscard]
    public function chuuk(): Zone
    {
        return ($this->of)('Pacific/Chuuk');
    }

    #[\NoDiscard]
    public function kwajalein(): Zone
    {
        return ($this->of)('Pacific/Kwajalein');
    }

    #[\NoDiscard]
    public function fakaofo(): Zone
    {
        return ($this->of)('Pacific/Fakaofo');
    }

    #[\NoDiscard]
    public function majuro(): Zone
    {
        return ($this->of)('Pacific/Majuro');
    }

    #[\NoDiscard]
    public function guadalcanal(): Zone
    {
        return ($this->of)('Pacific/Guadalcanal');
    }

    #[\NoDiscard]
    public function efate(): Zone
    {
        return ($this->of)('Pacific/Efate');
    }

    #[\NoDiscard]
    public function tongatapu(): Zone
    {
        return ($this->of)('Pacific/Tongatapu');
    }

    #[\NoDiscard]
    public function pohnpei(): Zone
    {
        return ($this->of)('Pacific/Pohnpei');
    }

    #[\NoDiscard]
    public function honolulu(): Zone
    {
        return ($this->of)('Pacific/Honolulu');
    }

    #[\NoDiscard]
    public function bougainville(): Zone
    {
        return ($this->of)('Pacific/Bougainville');
    }

    #[\NoDiscard]
    public function galapagos(): Zone
    {
        return ($this->of)('Pacific/Galapagos');
    }

    #[\NoDiscard]
    public function gambier(): Zone
    {
        return ($this->of)('Pacific/Gambier');
    }

    #[\NoDiscard]
    public function palau(): Zone
    {
        return ($this->of)('Pacific/Palau');
    }

    #[\NoDiscard]
    public function midway(): Zone
    {
        return ($this->of)('Pacific/Midway');
    }

    #[\NoDiscard]
    public function marquesas(): Zone
    {
        return ($this->of)('Pacific/Marquesas');
    }

    #[\NoDiscard]
    public function funafuti(): Zone
    {
        return ($this->of)('Pacific/Funafuti');
    }

    #[\NoDiscard]
    public function norfolk(): Zone
    {
        return ($this->of)('Pacific/Norfolk');
    }

    #[\NoDiscard]
    public function portMoresby(): Zone
    {
        return ($this->of)('Pacific/Port_Moresby');
    }

    #[\NoDiscard]
    public function tahiti(): Zone
    {
        return ($this->of)('Pacific/Tahiti');
    }

    #[\NoDiscard]
    public function fiji(): Zone
    {
        return ($this->of)('Pacific/Fiji');
    }

    #[\NoDiscard]
    public function kiritimati(): Zone
    {
        return ($this->of)('Pacific/Kiritimati');
    }

    #[\NoDiscard]
    public function truk(): Zone
    {
        return ($this->of)('Pacific/Truk');
    }

    #[\NoDiscard]
    public function easter(): Zone
    {
        return ($this->of)('Pacific/Easter');
    }

    #[\NoDiscard]
    public function rarotonga(): Zone
    {
        return ($this->of)('Pacific/Rarotonga');
    }

    #[\NoDiscard]
    public function yap(): Zone
    {
        return ($this->of)('Pacific/Yap');
    }

    #[\NoDiscard]
    public function nauru(): Zone
    {
        return ($this->of)('Pacific/Nauru');
    }
}
