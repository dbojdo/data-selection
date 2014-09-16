<?php
/**
 * FilterAndTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 14:54
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterTypes;

/**
 * Class FilterAndTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterAndTest extends AbstractFilterTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterAnd';
        $this->filterType = FilterTypes::TYPE_AND;
    }
}
