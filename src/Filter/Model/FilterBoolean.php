<?php
/**
 * FilterBoolean.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:50
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

use Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException;

/**
 * Class FilterBoolean
 * @package Webit\DataSelection\Filter\Model
 */
class FilterBoolean implements FilterBooleanInterface
{
    /**
     * @var string
     */
    protected $property;

    /**
     * @var string
     */
    protected $comparator = FilterBooleanComparators::EQUAL;

    /**
     * @var bool
     */
    protected $value;

    /**
     * @param string $property
     * @param bool $value
     * @param string $comparator
     */
    public function __construct($property = null, $value = null, $comparator = FilterBooleanComparators::EQUAL)
    {
        $this->setProperty($property);
        $this->setValue($value);
        $this->setComparator($comparator);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return FilterTypes::TYPE_BOOLEAN;
    }

    /**
     * @param string $comparator
     * @throws InvalidFilterComparatorException
     */
    public function setComparator($comparator)
    {
        $validComparators = FilterBooleanComparators::getComparators();
        if (in_array($comparator, $validComparators) == false) {
            throw new InvalidFilterComparatorException(
                sprintf(
                    'Invalid comparator has been passed: "%s". Valid comparators are: "%s".',
                    $comparator,
                    implode('", "', $validComparators)
                )
            );
        }
        $this->comparator = $comparator;
    }

    /**
     * @return string
     */
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * @param string $property
     */
    public function setProperty($property)
    {
        $this->property = $property;
    }

    /**
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param bool $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }
}
