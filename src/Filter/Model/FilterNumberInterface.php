<?php
/**
 * FilterNumberInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:40
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterNumberInterface
 * @package Webit\DataSelection\Filter\Model
 */
interface FilterNumberInterface extends FilterInterface
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
    public function getValue();

    /**
     * @param string $value
     */
    public function setValue($value);
}
