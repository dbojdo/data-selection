<?php
/**
 * FilterInTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:45
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterIn;
use Webit\DataSelection\Filter\Model\FilterTypes;

/**
 * Class FilterInTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterInTest extends AbstractFilterTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterIn';
        $this->filterType = FilterTypes::TYPE_IN;

        $this->defaultData = array(
            'property' => null,
            'values' => array()
        );

        $this->expectedData = array(
            'property' => 'test-property',
            'values' => array('value1', 'value2')
        );
    }

    public function testAddValue()
    {
        $filter = new FilterIn();

        $filter->addValue('value1');
        $this->assertCount(1, $filter->getValues());
        $this->assertContains('value1', $filter->getValues());

        $filter->addValue('value2');
        $this->assertCount(2, $filter->getValues());
        $this->assertContains('value1', $filter->getValues());
        $this->assertContains('value2', $filter->getValues());

        // no duplicates
        $filter->addValue('value1');
        $this->assertCount(2, $filter->getValues());
        $this->assertContains('value1', $filter->getValues());
        $this->assertContains('value2', $filter->getValues());
    }

    public function testSetValues()
    {
        $filter = new FilterIn();

        $filter->setValues(array('value1', 'value2'));
        $this->assertCount(2, $filter->getValues());
        $this->assertContains('value1', $filter->getValues());
        $this->assertContains('value2', $filter->getValues());

        $filter->setValues(array('value3', 'value4'));
        $this->assertCount(2, $filter->getValues());
        $this->assertContains('value3', $filter->getValues());
        $this->assertContains('value4', $filter->getValues());
    }
}
 