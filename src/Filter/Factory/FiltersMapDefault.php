<?php
/**
 * FiltersMapDefault.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 15:08
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Factory;

/**
 * Class FiltersMapDefault
 * @package Webit\DataSelection\Filter\Factory
 * @codeCoverageIgnore
 */
final class FiltersMapDefault
{
    /**
     * @return array
     */
    public static function getFiltersMap()
    {
        return array(
            'and' => 'Webit\\DataSelection\\Filter\\Model\\FilterAnd',
            'or' => 'Webit\\DataSelection\\Filter\\Model\\FilterOr',
            'number' => 'Webit\\DataSelection\\Filter\\Model\\FilterNumber',
            'in' => 'Webit\\DataSelection\\Filter\\Model\\FilterIn',
            'string' => 'Webit\\DataSelection\\Filter\\Model\\FilterString',
            'dateTime' => 'Webit\\DataSelection\\Filter\\Model\\FilterDateTime',
            'boolean' => 'Webit\\DataSelection\\Filter\\Model\\FilterBoolean',
            'null' => 'Webit\\DataSelection\\Filter\\Model\\FilterNull'
        );
    }
}
