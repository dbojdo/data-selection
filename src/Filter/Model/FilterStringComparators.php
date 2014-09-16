<?php
/**
 * FilterStringComparators.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:55
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterStringComparators
 * @package Webit\DataSelection\Filter\Model
 */
final class FilterStringComparators
{
    const EQUAL     = 'eq';
    const NOT_EQUAL = 'neq';
    const LIKE      = 'like';
    const NOT_LIKE  = 'not-like';

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
