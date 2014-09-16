<?php
/**
 * FilterString.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:09
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

use Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException;
use Webit\DataSelection\Filter\Model\Exception\InvalidFilterStringWildCardException;

/**
 * Class FilterString
 * @package Webit\DataSelection\Filter\Model
 */
class FilterString implements FilterStringInterface
{
    /**
     * @var string
     */
    protected $property;

    /**
     * @var string
     */
    protected $comparator = FilterStringComparators::EQUAL;

    /**
     * @var string
     */
    protected $wildCard = FilterStringWildCards::WILDCARD_NONE;

    /**
     * @var bool
     */
    protected $caseSensitive = true;

    /**
     * @var string
     */
    protected $value;

    /**
     * @param string $property
     * @param string $value
     * @param string $comparator
     * @param string $wildCard
     * @param bool $caseSensitive
     */
    public function __construct(
        $property = null,
        $value = null,
        $comparator = FilterStringComparators::EQUAL,
        $wildCard = FilterStringWildCards::WILDCARD_NONE,
        $caseSensitive = true
    ) {
        $this->setProperty($property);
        $this->setValue($value);
        $this->setComparator($comparator);
        $this->setWildCard($wildCard);
        $this->setCaseSensitive($caseSensitive);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return FilterTypes::TYPE_STRING;
    }

    /**
     * @param boolean $caseSensitive
     */
    public function setCaseSensitive($caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }

    /**
     * @return boolean
     */
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    /**
     * @param string $comparator
     * @throws InvalidFilterComparatorException
     */
    public function setComparator($comparator)
    {
        $validComparators = FilterStringComparators::getComparators();
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
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $wildCard
     * @throws InvalidFilterStringWildCardException
     */
    public function setWildCard($wildCard)
    {
        $validWildCards = FilterStringWildCards::getWildCards();
        if (in_array($wildCard, $validWildCards) == false) {
            throw new InvalidFilterStringWildCardException(
                sprintf(
                    'Invalid comparator has been passed: "%s". Valid comparators are: "%s".',
                    $wildCard,
                    implode('", "', $validWildCards)
                )
            );
        }

        $this->wildCard = $wildCard;
    }

    /**
     * @return string
     */
    public function getWildCard()
    {
        return $this->wildCard;
    }
}
