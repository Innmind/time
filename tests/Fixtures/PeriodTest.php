<?php
declare(strict_types = 1);

namespace Tests\Innmind\Time\Fixtures;

use Fixtures\Innmind\Time\Period;
use Innmind\BlackBox\{
    Set,
    Random,
};
use Innmind\Time\Period as Model;
use Innmind\BlackBox\PHPUnit\Framework\TestCase;

class PeriodTest extends TestCase
{
    public function testAny()
    {
        $periods = Period::any()->take(100);

        $this->assertInstanceOf(Set::class, $periods);
        $this->assertCount(100, \iterator_to_array($periods->values(Random::default)));

        foreach ($periods->values(Random::default) as $period) {
            $this->assertInstanceOf(Set\Value::class, $period);
            $this->assertInstanceOf(Model::class, $period->unwrap());
        }
    }

    public function testAnyNumberOfYear()
    {
        $periods = Period::anyNumberOfYear()->take(100);

        $this->assertInstanceOf(Set::class, $periods);
        $this->assertCount(100, \iterator_to_array($periods->values(Random::default)));

        $periods = $periods->values(Random::default);
        $generated = [];

        foreach ($periods as $period) {
            $this->assertInstanceOf(Set\Value::class, $period);

            $value = $period->unwrap();
            $this->assertInstanceOf(Model::class, $value);
            $this->assertSame(0, $value->months());
            $this->assertSame(0, $value->days());
            $this->assertSame(0, $value->hours());
            $this->assertSame(0, $value->minutes());
            $this->assertSame(0, $value->seconds());
            $this->assertSame(0, $value->milliseconds());

            $generated[] = $value->years();
        }

        $this->assertGreaterThan(80, \count(\array_unique($generated)));
    }

    public function testLessThanAYear()
    {
        $periods = Period::lessThanAYear()->take(100);

        $this->assertInstanceOf(Set::class, $periods);
        $this->assertCount(100, \iterator_to_array($periods->values(Random::default)));

        $periods = $periods->values(Random::default);
        $unique = [];

        foreach ($periods as $period) {
            $this->assertInstanceOf(Set\Value::class, $period);

            $value = $period->unwrap();
            $this->assertInstanceOf(Model::class, $value);
            $this->assertLessThan(365, $value->days());
            $this->assertSame(0, $value->years());
            $this->assertSame(0, $value->months());
            $generated = [
                $value->days(),
                $value->hours(),
                $value->minutes(),
                $value->seconds(),
                $value->milliseconds(),
                $value->microseconds(),
            ];

            if (!\in_array($generated, $unique, true)) {
                $unique[] = $generated;
            }
        }

        $this->assertGreaterThan(80, \count($unique));
    }
}
