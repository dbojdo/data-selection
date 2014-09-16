<?php
/**
 * FilterStringWildCards.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 12:02
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterStringWildCards
 * @package Webit\DataSelection\Filter\Model
 */
final class FilterStringWildCards
{
    const WILDCARD_RIGHT = 'right';
    const WILDCARD_LEFT = 'left';
    const WILDCARD_BOTH = 'both';
    const WILDCARD_NONE = 'none';

    /**
     * @return array
     */
    public static function getWildCards()
    {
        $refClass = new \ReflectionClass(get_class());
        $constants = $refClass->getConstants();
        $values = array_values($constants);

        return $values;
    }
}
