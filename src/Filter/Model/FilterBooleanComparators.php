<?php
/**
 * FilterBooleanComparators.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 11:23
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterBooleanComparators
 * @package Webit\DataSelection\Filter\Model
 */
final class FilterBooleanComparators
{
    const EQUAL     = 'eq';
    const NOT_EQUAL = 'neq';

    /**
     * @return array
     */
    public static function getComparators()
    {
        $refClass = new \ReflectionClass(get_class());
        $constants = $refClass->getConstants();
        $values = array_values($constants);

        return $values;
    }
}
