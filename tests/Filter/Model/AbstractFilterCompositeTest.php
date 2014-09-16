<?php
/**
 * AbstractFilterCompositeTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 14:32
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

/**
 * Class AbstractFilterCompositeTest
 * @package Webit\DataSelection\Tests\Filter
 */
class AbstractFilterCompositeTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetters()
    {
        $filters = array(
            $this->getFilter(),
            $this->getFilter(),
            $this->getFilter()
        );

        $filter = $this->getMockForAbstractClass(
            'Webit\\DataSelection\\Filter\\Model\\AbstractFilterComposite', array($filters)
        );

        $this->assertEquals($filters, $filter->getFilters());
    }

    public function testSettersAndGetters()
    {
        $filters = array(
            $this->getFilter(),
            $this->getFilter(),
            $this->getFilter()
        );

        $filter = $this->getMockForAbstractClass('Webit\\DataSelection\\Filter\\Model\\AbstractFilterComposite');
        $filter->setFilters($filters);

        $this->assertEquals($filters, $filter->getFilters());
    }

    public function testAddFilter()
    {
        $filters = array(
            $this->getFilter(),
            $this->getFilter()
        );

        $filter = $this->getMockForAbstractClass('Webit\\DataSelection\\Filter\\Model\\AbstractFilterComposite');

        $filter->addFilter($filters[0]);
        $this->assertCount(1, $filter->getFilters());
        $this->assertContains($filters[0], $filter->getFilters());

        $filter->addFilter($filters[1]);
        $this->assertCount(2, $filter->getFilters());
        $this->assertContains($filters[0], $filter->getFilters());
        $this->assertContains($filters[1], $filter->getFilters());

        // no duplicates
        $filter->addFilter($filters[1]);
        $this->assertCount(2, $filter->getFilters());
        $this->assertContains($filters[0], $filter->getFilters());
        $this->assertContains($filters[1], $filter->getFilters());
    }

    private function getFilter()
    {
        $filter = $this->getMock('Webit\\DataSelection\\Filter\\Model\\FilterInterface');

        return $filter;
    }
}
