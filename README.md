# Domain Components

This package provides components for projects with domain-modeling requirements.

This package requires the [Domain-Event Dispatcher](https://github.com/heybigname/domain-event-dispatcher) package.

## Interfaces

[**AggregateRepository**](https://github.com/heybigname/domain-components/blob/master/src/AggregateRepository.php)
```php
public function get(IdentifiesAggregate $id);
public function add(AggregateRoot $aggregate);
```

[**AggregateRoot**](https://github.com/heybigname/domain-components/blob/master/src/AggregateRoot.php)

Extends [RecordsEvents](https://github.com/heybigname/domain-components/blob/master/src/RecordsEvents.php) interface.

[**DomainComponentsException**](https://github.com/heybigname/domain-components/blob/master/src/DomainComponentsException.php)

Provides package-level exception catching.

[**DomainEvent**](https://github.com/heybigname/domain-components/blob/master/src/DomainEvent.php)

Extends [heybigname/domain-event-dispatcher](https://github.com/heybigname/domain-event-dispatcher) package's [Event](https://github.com/heybigname/domain-event-dispatcher/blob/master/src/Event.php) interface.

[**IdentifiesAggregate**](https://github.com/heybigname/domain-components/blob/master/src/IdentifiesAggregate.php)
```php
public static function fromString($id);
public function __toString();
public function equal(IdentifiesAggregate $other);
```

[**RecordsEvents**](https://github.com/heybigname/domain-components/blob/master/src/RecordsEvents.php)
```php
public function raise(DomainEvent $event);
public function releaseEvents();
```

## Classes

[**DomainEventCollection**](https://github.com/heybigname/domain-components/blob/master/src/DomainEventCollection.php)

## Installation

Run the command below to install via Composer

```shell
composer require heybigname/domain-components
```
