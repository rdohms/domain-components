# Workflow

This package provides several interfaces and tools for your project.

## Included in this package

### Packages

* [Event Dispatcher](https://github.com/heybigname/event-dispatcher)
* [Laravel Doctrine](https://github.com/mitchellvanw/laravel-doctrine)

### Interfaces

[**CommandBus**](https://github.com/heybigname/workflow/blob/master/src/CommandBus.php)
```php
public function execute(Request $request);
```

[**Request**](https://github.com/heybigname/workflow/blob/master/src/Request.php)

No methods to implement.

[**Response**](https://github.com/heybigname/workflow/blob/master/src/Response.php)

No methods to implement.

[**Handler**](https://github.com/heybigname/workflow/blob/master/src/Handler.php)
```php
public function handle(Request $request);
```

[**Identifier**](https://github.com/heybigname/workflow/blob/master/src/Identifier.php)
```php
public function getId();
public function equals(Identifier $other);
```

### Traits

[**EventRecorder**](https://github.com/heybigname/workflow/blob/master/src/EventRecorder.php)
```php
public function raise(DomainEvent $event);
public function getRecordedEvents(): DomainEvents;
public function clearRecordedEvents();
```

### Classes

[**DomainEvents**](https://github.com/heybigname/workflow/blob/master/src/DomainEvents.php)

This class is an extension of ImmutableArray and only accepts instances of `BigName\Workflow\DomainEvent`.

### Abstract Classes

[**ImmutableArray**](https://github.com/heybigname/workflow/blob/master/src/ImmutableArray.php)
```php
protected function isItemOfCorrectType($item);
```

## License

This package is licensed under the [MIT license](https://github.com/heybigname/workflow/blob/master/LICENSE).