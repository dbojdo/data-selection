<?php
/**
 * FilterDateTimeTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:40
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterDateTime;
use Webit\DataSelection\Filter\Model\FilterDateTimeComparatorModes;
use Webit\DataSelection\Filter\Model\FilterDateTimeComparators;
use Webit\DataSelection\Filter\Model\FilterTypes;

/**
 * Class FilterDateTimeTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterDateTimeTest extends AbstractFilterTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterDateTime';
        $this->filterType = FilterTypes::TYPE_DATETIME;

        $this->defaultData = array(
            'property' => null,
            'value' => null,
            'comparator' => FilterDateTimeComparators::EQUAL,
            'comparatorMode' => FilterDateTimeComparatorModes::MODE_DATE_TIME
        );

        $this->expectedData = array(
            'property' => 'test-property',
            'value' => new \DateTime(),
            'comparator' => FilterDateTimeComparators::GREATER_THAN,
            'comparatorMode' => FilterDateTimeComparatorModes::MODE_DATE
        );
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException
     */
    public function testInvalidComparator()
    {
        $filter = new FilterDateTime();
        $filter->setComparator('invalid-comparator');
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Model\Exception\InvalidFilterDateTimeComparatorModeException
     */
    public function testInvalidComparatorMode()
    {
        $filter = new FilterDateTime();
        $filter->setComparatorMode('invalid-comparator-mode');
    }
}
