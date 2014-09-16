<?php
/**
 * FilterDateTime.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:33
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

use Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException;
use Webit\DataSelection\Filter\Model\Exception\InvalidFilterDateTimeComparatorModeException;

/**
 * Class FilterDateTime
 * @package Webit\DataSelection\Filter\Model
 */
class FilterDateTime implements FilterDateTimeInterface
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
     * @var string
     */
    protected $comparatorMode;

    /**
     * @var \DateTime
     */
    protected $value;

    /**
     * @param string $property
     * @param \DateTime $value
     * @param string $comparator
     * @param string $comparatorMode
     */
    public function __construct(
        $property = null,
        \DateTime $value = null,
        $comparator = FilterDateTimeComparators::EQUAL,
        $comparatorMode = FilterDateTimeComparatorModes::MODE_DATE_TIME
    ) {
        $this->setProperty($property);
        if ($value) {
            $this->setValue($value);
        }
        $this->setComparator($comparator);
        $this->setComparatorMode($comparatorMode);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return FilterTypes::TYPE_DATETIME;
    }

    /**
     * @param string $comparator
     * @throws InvalidFilterComparatorException
     */
    public function setComparator($comparator)
    {
        $validComparators = FilterDateTimeComparators::getComparators();
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
     * @param string $comparatorMode
     * @throws InvalidFilterDateTimeComparatorModeException
     */
    public function setComparatorMode($comparatorMode)
    {
        $validComparatorModes = FilterDateTimeComparatorModes::getComparatorModes();
        if (in_array($comparatorMode, $validComparatorModes) == false) {
            throw new InvalidFilterDateTimeComparatorModeException(
                sprintf(
                    'Invalid comparator mode has been passed: "%s". Valid comparator modes are: "%s".',
                    $comparatorMode,
                    implode('", "', $validComparatorModes)
                )
            );
        }

        $this->comparatorMode = $comparatorMode;
    }

    /**
     * @return string
     */
    public function getComparatorMode()
    {
        return $this->comparatorMode;
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
     * @param \DateTime $value
     */
    public function setValue(\DateTime $value)
    {
        $this->value = $value;
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
        return $this->value;
    }
}
