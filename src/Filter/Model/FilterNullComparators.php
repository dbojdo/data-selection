<?php
/**
 * FilterNullComparators.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:54
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterNullComparators
 * @package Webit\DataSelection\Filter\Model
 */
final class FilterNullComparators
{
    const IS_NULL     = 'null';
    const IS_NOT_NULL = 'not-null';

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
