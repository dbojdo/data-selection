<?php
/**
 * FilterDateTimeComparators.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:48
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterDateTimeComparators
 * @package Webit\DataSelection\Filter\Model
 */
final class FilterDateTimeComparators
{
    const EQUAL                 = 'eq';
    const NOT_EQUAL             = 'neq';
    const LESS_THAN             = 'lt';
    const GREATER_THAN          = 'gt';
    const LESS_THAN_OR_EQUAL    = 'lte';
    const GREATER_THAN_OR_EQUAL = 'gte';

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
