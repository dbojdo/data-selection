<?php
/**
 * FilterDateTimeComparatorModes.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:35
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterDateTimeComparatorModes
 * @package Webit\DataSelection\Filter\Model
 */
final class FilterDateTimeComparatorModes
{
    const MODE_DATE = 'date';
    const MODE_DATE_TIME = 'date-time';

    /**
     * @return array
     */
    public static function getComparatorModes()
    {
        $refClass = new \ReflectionClass(get_class());
        $constants = $refClass->getConstants();
        $values = array_values($constants);

        return $values;
    }
}
