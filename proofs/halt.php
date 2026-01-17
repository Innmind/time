<?php
declare(strict_types = 1);

use Innmind\Time\{
    Halt,
    Period,
};
use Innmind\Immutable\{
    Attempt,
    SideEffect,
};
use Psr\Log\NullLogger;

return static function() {
    yield test(
        'Halt::new()',
        static fn($assert) => $assert
            ->time(static function() use ($assert) {
                $assert
                    ->object(
                        Halt::new()(Period::millisecond(500))->unwrap(),
                    )
                    ->instance(SideEffect::class);
            })
            ->inMoreThan()
            ->milliseconds(500),
    );

    yield test(
        'Prevent converting months',
        static fn($assert) => $assert->throws(
            static fn() => Halt::new()(Period::month(1))->unwrap(),
            LogicException::class,
        ),
    );

    yield test(
        'Halt::logger()',
        static fn($assert) => $assert
            ->object(
                Halt::logger(Halt::new(), new NullLogger)(
                    Period::millisecond(100),
                )->unwrap(),
            )
            ->instance(SideEffect::class),
    );

    yield test(
        'Halt::via()',
        static function($assert) {
            $period = Period::millisecond(500);
            $expected = Attempt::result(SideEffect::identity);

            $halt = Halt::via(static function($in) use ($assert, $period, $expected) {
                $assert->same($period, $in);

                return $expected;
            });

            $assert->same($expected, $halt($period));
        },
    );
};
