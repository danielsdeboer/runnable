## Overview

This package provides a static constructor and handler interface, and a trait that implements the interface.

### Installation

Via Composer:

```
composer require aviator/runnable
```

### Testing

Via Composer:

```
composer test
```

### Usage

Use the trait:

```php
class Something
{
    use RunnableTrait;
}
```

Then the class can be instantiated and handled using `Class::run()()`. The static `run` method returns a closure which accepts any arguments the method (by default `get()`) requires:

```php
$closure = Something::run($arg1);
$result = $closure($arg2); 

// Or just:

$result = Something::run($arg1)($arg2);
```

The trait also pulls in `Aviator\Makeable`, so you get the static constructor `make()` out of the box.

The interface is optional, though it can be useful in composite interfaces to specify that a static constructor should be present:

```php
interface SomeInterface extends Runnable, SomeOtherInterface
{
    /* etc */
}
```

By default the trait will call `get()`, but this can be overridden:

```php
class Something
{
    use RunnableTrait;
    
    protected static $method = 'handle';
    
    public function handle ($arg)
    {
        /* etc */
    }
}

$result = Something::run()('arg');

// Calls the handle() method.
```

The magic of late static binding means you can override the default method on classes extending abstract classes and classes extending classes, etc.

## Other

### License

This package is licensed with the [MIT License (MIT)](LICENSE).

