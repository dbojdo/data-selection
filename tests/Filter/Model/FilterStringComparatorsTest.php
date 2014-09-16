<?php
/**
 * FilterStringComparatorsTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 11:15
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterStringComparators;

/**
 * Class FilterStringComparatorsTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterStringComparatorsTest extends AbstractFilterComparatorsTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterStringComparators';

        $this->expected = array(
            FilterStringComparators::EQUAL,
            FilterStringComparators::NOT_EQUAL,
            FilterStringComparators::LIKE,
            FilterStringComparators::NOT_LIKE
        );
    }
}
