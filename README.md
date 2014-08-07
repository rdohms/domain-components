# Domain Components

This package provides components for projects with domain-modeling requirements.

## Included in this package

### Packages

* [Domain-Event Dispatcher](https://github.com/heybigname/domain-event-dispatcher)

### Interfaces

[**AggregateRepository**](https://github.com/heybigname/workflow/blob/master/src/AggregateRepository.php)
```php
public function get(IdentifiesAggregate $id);
public function add(AggregateRoot $aggregate);
```

[**AggregateRoot**](https://github.com/heybigname/workflow/blob/master/src/AggregateRoot.php)

No methods to implement. Extends `RecordsEvents` interface.

[**DomainComponentsException**](https://github.com/heybigname/workflow/blob/master/src/DomainComponentsException.php)

No methods to implement. Provides package-level exception catching.

[**DomainEvent**](https://github.com/heybigname/workflow/blob/master/src/DomainEvent.php)

[**IdentifiesAggregate**](https://github.com/heybigname/workflow/blob/master/src/IdentifiesAggregate.php)
```php
public static function fromString($id);
public function getId();
public function equal(IdentifiesAggregate $other);
```

[**RecordsEvents**](https://github.com/heybigname/workflow/blob/master/src/RecordsEvents.php)
```php
public function raise(DomainEvent $event);
public function releaseEvents();
```

### Classes

[**DomainEventCollection**](https://github.com/heybigname/workflow/blob/master/src/DomainEventCollection.php)

## License

This package is licensed under the [MIT license](https://github.com/heybigname/workflow/blob/master/LICENSE).
