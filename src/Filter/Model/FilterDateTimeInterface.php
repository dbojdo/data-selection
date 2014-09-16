<?php
/**
 * FilterDateTimeInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:43
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Interface FilterDateTimeInterface
 * @package Webit\DataSelection\Filter\Model
 */
interface FilterDateTimeInterface extends FilterInterface
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
    public function getComparatorMode();

    /**
     * @param string $comparatorMode
     */
    public function setComparatorMode($comparatorMode);

    /**
     * @return \DateTime
     */
    public function getValue();

    /**
     * @param \DateTime $value
     */
    public function setValue(\DateTime $value);
}
