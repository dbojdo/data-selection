<?php
/**
 * FilterStringTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:13
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterString;
use Webit\DataSelection\Filter\Model\FilterStringComparators;
use Webit\DataSelection\Filter\Model\FilterStringWildCards;
use Webit\DataSelection\Filter\Model\FilterTypes;

/**
 * Class FilterStringTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterStringTest extends AbstractFilterTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterString';
        $this->filterType = FilterTypes::TYPE_STRING;

        $this->defaultData = array(
            'property' => null,
            'value' => null,
            'comparator' => FilterStringComparators::EQUAL,
            'wildCard' => FilterStringWildCards::WILDCARD_NONE,
            'caseSensitive' => true
        );

        $this->expectedData = array(
            'property' => 'test-property',
            'value' => 'test-value',
            'comparator' => FilterStringComparators::LIKE,
            'wildCard' => FilterStringWildCards::WILDCARD_BOTH,
            'caseSensitive' => false
        );
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Model\Exception\InvalidFilterComparatorException
     */
    public function testInvalidComparator()
    {
        $filter = new FilterString();
        $filter->setComparator('invalid-comparator');
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Model\Exception\InvalidFilterStringWildCardException
     */
    public function testInvalidWildCard()
    {
        $filter = new FilterString();
        $filter->setWildCard('invalid-wild-card');
    }
}
 