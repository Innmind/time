# Halt process

```php
use Innmind\Time\{
    Halt,
    Period,
};

$halt = Halt::new();
$halt(Period::second(1))->unwrap();
```

This is the equivalent of `sleep(1)`.
