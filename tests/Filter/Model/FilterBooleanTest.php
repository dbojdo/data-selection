<?php
/**
 * FilterBooleanTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:57
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterBoolean;
use Webit\DataSelection\Filter\Model\FilterBooleanComparators;
use Webit\DataSelection\Filter\Model\FilterTypes;

/**
 * Class FilterBooleanTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterBooleanTest extends AbstractFilterTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterBoolean';
        $this->filterType = FilterTypes::TYPE_BOOLEAN;

        $this->defaultData = array(
            'property' => null,
            'value' => null,
            'comparator' => FilterBooleanComparators::EQUAL
        );

        $this->expectedData = array(
            'property' => 'test-property',
            'value' => 'test-value',
            'comparator' => FilterBooleanComparators::NOT_EQUAL
        );
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException
     */
    public function testInvalidComparator()
    {
        $filter = new FilterBoolean();
        $filter->setComparator('invalid-comparator');
    }
}
 