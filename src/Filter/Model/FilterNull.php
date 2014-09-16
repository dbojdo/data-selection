<?php
/**
 * FilterNull.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 12:47
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

use Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException;

/**
 * Class FilterNull
 * @package Webit\DataSelection\Filter\Model
 */
class FilterNull implements FilterNullInterface
{
    /**
     * @var string
     */
    protected $property;

    /**
     * @var string
     */
    protected $comparator = FilterNullComparators::IS_NULL;

    /**
     * @param string $property
     * @param string $comparator
     */
    public function __construct($property = null, $comparator = FilterNullComparators::IS_NULL)
    {
        $this->setProperty($property);
        $this->setComparator($comparator);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return FilterTypes::TYPE_NULL;
    }

    /**
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
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
    public function getComparator()
    {
        return $this->comparator;
    }

    /**
     * @param string $comparator
     * @throws Exception\InvalidFilterComparatorException
     */
    public function setComparator($comparator)
    {
        $validComparators = FilterNullComparators::getComparators();
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

}
