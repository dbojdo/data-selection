<?php
/**
 * FilterTypes.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:56
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterTypes
 * @package Webit\DataSelection\Filter\Model
 */
final class FilterTypes
{
    const TYPE_AND      = 'and';
    const TYPE_OR       = 'or';
    const TYPE_NUMBER   = 'number';
    const TYPE_STRING   = 'string';
    const TYPE_DATETIME = 'date-time';
    const TYPE_IN       = 'in';
    const TYPE_NULL     = 'null';
    const TYPE_BOOLEAN  = 'boolean';

    public static function getTypes()
    {
        $refClass = new \ReflectionClass(get_class());
        $constants = $refClass->getConstants();
        $values = array_values($constants);

        return $values;
    }
}
