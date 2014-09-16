<?php
/**
 * FilterDateTimeComparatorsTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 11:20
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterDateTimeComparators;

/**
 * Class FilterDateTimeComparatorsTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterDateTimeComparatorsTest extends AbstractFilterComparatorsTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterDateTimeComparators';

        $this->expected = array(
            FilterDateTimeComparators::EQUAL,
            FilterDateTimeComparators::NOT_EQUAL,
            FilterDateTimeComparators::GREATER_THAN,
            FilterDateTimeComparators::GREATER_THAN_OR_EQUAL,
            FilterDateTimeComparators::LESS_THAN,
            FilterDateTimeComparators::LESS_THAN_OR_EQUAL
        );
    }
}
