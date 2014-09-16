<?php
/**
 * FilterNumber.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:23
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

use Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException;

/**
 * Class FilterNumber
 * @package Webit\DataSelection\Filter\Model
 */
class FilterNumber implements FilterNumberInterface
{
    /**
     * @var string
     */
    protected $property;

    /**
     * @var string
     */
    protected $comparator;

    /**
     * @var float
     */
    protected $value;

    /**
     * @param string $property
     * @param float $value
     * @param string $comparator
     */
    public function __construct($property = null, $value = null, $comparator = FilterNumberComparators::EQUAL)
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
        return FilterTypes::TYPE_NUMBER;
    }

    /**
     * @param string $comparator
     * @throws InvalidFilterComparatorException
     */
    public function setComparator($comparator)
    {
        $validComparators = FilterNumberComparators::getComparators();
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
     * @param float $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}
 