<?php
/**
 * FilterNumberComparatorsTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 11:11
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterNumberComparators;

/**
 * Class FilterNumberComparatorsTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterNumberComparatorsTest extends AbstractFilterComparatorsTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterNumberComparators';

        $this->expected = array(
            FilterNumberComparators::EQUAL,
            FilterNumberComparators::NOT_EQUAL,
            FilterNumberComparators::GREATER_THAN,
            FilterNumberComparators::GREATER_THAN_OR_EQUAL,
            FilterNumberComparators::LESS_THAN,
            FilterNumberComparators::LESS_THAN_OR_EQUAL
        );
    }
}
