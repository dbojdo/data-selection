<?php
/**
 * FilterNullComparatorsTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 11:17
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterNullComparators;

/**
 * Class FilterNullComparatorsTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterNullComparatorsTest extends AbstractFilterComparatorsTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterNullComparators';

        $this->expected = array(
            FilterNullComparators::IS_NULL,
            FilterNullComparators::IS_NOT_NULL
        );
    }
}
