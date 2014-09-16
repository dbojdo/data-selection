<?php
/**
 * FilterNumberTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:19
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterNumberComparators;
use Webit\DataSelection\Filter\Model\FilterTypes;
use Webit\DataSelection\Filter\Model\FilterNumber;

/**
 * Class FilterNumberTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterNumberTest extends AbstractFilterTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterNumber';
        $this->filterType = FilterTypes::TYPE_NUMBER;

        $this->defaultData = array(
            'property' => null,
            'value' => null,
            'comparator' => FilterNumberComparators::EQUAL
        );

        $this->expectedData = array(
            'property' => 'test-property',
            'value' => 15.5,
            'comparator' => FilterNumberComparators::GREATER_THAN
        );
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException
     */
    public function testInvalidComparator()
    {
        $filter = new FilterNumber();
        $filter->setComparator('invalid-comparator');
    }
}
 