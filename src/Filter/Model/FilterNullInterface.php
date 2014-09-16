<?php
/**
 * FilterNullInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:52
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Interface FilterNullInterface
 * @package Webit\DataSelection\Filter\Model
 */
interface FilterNullInterface extends FilterInterface
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
}
