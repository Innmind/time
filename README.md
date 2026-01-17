# Time

[![Build Status](https://github.com/Innmind/time/actions/workflows/ci.yml/badge.svg)](https://github.com/Innmind/time/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/innmind/time/branch/develop/graph/badge.svg)](https://codecov.io/gh/innmind/time)
[![Type Coverage](https://shepherd.dev/github/innmind/time/coverage.svg)](https://shepherd.dev/github/innmind/time)

This library allows you to handle time down to the millisecond. The point was to also be explicit for every component of dates, this is why every php _magic strings_ have been converted into objects.

**All objects are immutable.**

## Installation

```sh
composer require innmind/time
```

## Usage

### Accessing time

```php
use Innmind\Time\{
    Clock,
    Point,
    Format,
};
use Innmind\Immutable\Attempt;

$clock = Clock::live();
$now = $clock->now(); // return an instance of Point
echo $now->toString(); // 2016-10-11T12:17:30.123456+02:00

$epoch = $clock->at(
    '1970-01-01T00:00:00.000000+00:00',
    Format::iso8601(),
); // Attempt<Point>
```

Here we reference 2 points in time, the first is the exact moment we call `now` down to the microsecond and the second one is the epoch time.

The method `at()` accepts any string that is allowed by `\DateTimeImmutable`.

### Halt process

```php
use Innmind\Time\{
    Halt
    Period,
};

function yourApp(Halt $halt): void
{
    // do something
    $halt(Period::minute(42))->unwrap();
    // do some more
}

yourApp(Halt::new());
```

This example will halt your program for 42 minutes.

#### Logging

```php
use Innmind\Time\Halt;
use Psr\Log\LoggerInterface;

$halt = Halt::logger($halt, /** an instance of LoggerInterface */);

## Documentation

Full documentation is available at <https://innmind.org/time/>.

