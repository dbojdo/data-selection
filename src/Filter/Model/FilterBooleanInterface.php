<?php
/**
 * FilterBooleanInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 11:21
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Interface FilterBooleanInterface
 * @package Webit\DataSelection\Filter\Model
 */
interface FilterBooleanInterface extends FilterInterface
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
     * @return bool
     */
    public function getValue();

    /**
     * @param bool $value
     */
    public function setValue($value);
}
