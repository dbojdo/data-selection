<?php
/**
 * FilterStringInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:37
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Interface FilterStringInterface
 * @package Webit\DataSelection\Filter\Model
 */
interface FilterStringInterface extends FilterInterface
{
    /**
     * @return string
     */
    public function getProperty();

    /**
     * @param string $property
     */
    public function setProperty($property);

    /**
     * @return string
     */
    public function getComparator();

    /**
     * @param string $comparator
     */
    public function setComparator($comparator);

    /**
     * @return string
     */
    public function getWildCard();

    /**
     * @param string $wildCard
     */
    public function setWildCard($wildCard);

    /**
     * @return bool
     */
    public function getCaseSensitive();

    /**
     * @param bool $caseSensitive
     */
    public function setCaseSensitive($caseSensitive);

    /**
     * @return string
     */
    public function getValue();

    /**
     * @param string $value
     */
    public function setValue($value);
}
