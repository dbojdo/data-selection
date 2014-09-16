<?php
/**
 * FilterNullTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 12:52
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterNull;
use Webit\DataSelection\Filter\Model\FilterNullComparators;
use Webit\DataSelection\Filter\Model\FilterTypes;

/**
 * Class FilterNullTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterNullTest extends AbstractFilterTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterNull';
        $this->filterType = FilterTypes::TYPE_NULL;

        $this->defaultData = array(
            'comparator' => FilterNullComparators::IS_NULL
        );

        $this->expectedData = array(
            'property' => 'test-property',
            'comparator' => FilterNullComparators::IS_NOT_NULL
        );
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException
     */
    public function testInvalidComparator()
    {
        $filter = new FilterNull();
        $filter->setComparator('invalid-comparator');
    }
}
