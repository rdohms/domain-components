# Workflow

This package provides several interfaces and tools for projects with domain modeling requirements.

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

No methods to implement. Exists for type-safety.

[**Response**](https://github.com/heybigname/workflow/blob/master/src/Response.php)

No methods to implement. Exists for type-safety.

[**Handler**](https://github.com/heybigname/workflow/blob/master/src/Handler.php)
```php
public function handle(Request $request);
```

[**AggregateIdentifier**](https://github.com/heybigname/workflow/blob/master/src/AggregateIdentifier.php)
```php
public static function fromString($id);
public function getId();
public function equals(Identifier $other);
```

### Concrete Classes

[**DomainEventArray**](https://github.com/heybigname/workflow/blob/master/src/DomainEventArray.php)

This class is an extension of ImmutableTypedArray and only accepts instances of `BigName\Workflow\DomainEvent`.

### Abstract Classes

[**ImmutableTypedArray**](https://github.com/heybigname/workflow/blob/master/src/ImmutableTypedArray.php)
```php
protected function isCorrectType($item);
```

[**AggregateRoot**](https://github.com/heybigname/workflow/blob/master/src/AggregateRoot.php)
```php
public function raise(DomainEvent $event);
public function releaseEvents(): DomainEventArray;
```

## License

This package is licensed under the [MIT license](https://github.com/heybigname/workflow/blob/master/LICENSE).
