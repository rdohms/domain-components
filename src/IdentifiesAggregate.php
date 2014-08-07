<?php namespace BigName\DomainComponents;

/**
 * Interface IdentifiesAggregate
 * @package BigName\DomainComponents
 */
interface IdentifiesAggregate
{
    /**
     * @param $id
     * @return IdentifiesAggregate
     */
    public static function fromString($id);

    /**
     * @return string
     */
    public function __toString();

    /**
     * @param IdentifiesAggregate $other
     * @return bool
     */
    public function equal(IdentifiesAggregate $other);
} 
