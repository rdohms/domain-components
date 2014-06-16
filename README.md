# Workflow

This package provides several interfaces and tools for your project.

## Included in this package

### Packages

* [Event Dispatcher](https://github.com/heybigname/event-dispatcher)
* [Laravel Doctrine](https://github.com/mitchellvanw/laravel-doctrine)

### Interfaces

**CommandBus** [BigName\Workflow\CommandBus](https://github.com/heybigname/workflow/blob/master/src/CommandBus.php)
```php
public function execute(Request $request);
```

**Request** `BigName\Workflow\Request`

No methods to implement.

**Response** `BigName\Workflow\Response`

No methods to implement.

**Handler** `BigName\Workflow\Handler`
```php
public function handle(Request $request);
```

**Identifier** `BigName\Workflow\Identifier`
```php
public function getId();
public function equals(Identifier $other);
```

### Traits

**EventRecorder** `BigName\Workflow\EventRecorder`
```php
public function raise(DomainEvent $event);
public function getRecordedEvents(): DomainEvents;
public function clearRecordedEvents();
```

### Classes

**DomainEvents** `BigName\Workflow\DomainEvents`

This class is an extension of ImmutableArray and only accepts instances of `BigName\Workflow\DomainEvent`.

### Abstract Classes

**ImmutableArray** `BigName\Workflow\ImmutableArray`
```php
protected function isItemOfCorrectType($item);
```

## License

This package is licensed under the [MIT license](https://github.com/heybigname/workflow/blob/master/LICENSE).