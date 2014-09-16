<?php
/**
 * FilterBooleanComparatorsTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 11:23
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterBooleanComparators;

/**
 * Class FilterBooleanComparatorsTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterBooleanComparatorsTest extends AbstractFilterComparatorsTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterBooleanComparators';

        $this->expected = array(
            FilterBooleanComparators::EQUAL,
            FilterBooleanComparators::NOT_EQUAL,
        );
    }
}
