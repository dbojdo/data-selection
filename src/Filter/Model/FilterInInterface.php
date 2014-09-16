<?php
/**
 * FilterInInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:41
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Interface FilterInInterface
 * @package Webit\DataSelection\Filter\Model
 */
interface FilterInInterface extends FilterInterface
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
     * @param mixed $value
     */
    public function addValue($value);

    /**
     * @return array
     */
    public function getValues();

    /**
     * @param array $values
     */
    public function setValues(array $values);
}
