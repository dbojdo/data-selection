<?php
/**
 * FilterFactoryMapBasedTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 15:23
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter\Factory;

use Webit\DataSelection\Filter\Factory\FilterFactoryMapBased;

/**
 * Class FilterFactoryMapBasedTest
 * @package Webit\DataSelection\Tests\Filter\Factory
 */
class FilterFactoryMapBasedTest extends \PHPUnit_Framework_TestCase
{

    public function testConstructorSetterAndCreateFilter()
    {
        $map = array(
            'type-1' => $this->getMockClass('Webit\\DataSelection\\Filter\\Model\\FilterInterface'),
            'type-2' => $this->getMockClass('Webit\\DataSelection\\Filter\\Model\\FilterInterface')
        );

        $factory = new FilterFactoryMapBased($map);

        foreach ($map as $key => $class) {
            $filter = $factory->createFilter($key);
            $this->assertInstanceOf($class, $filter);
        }
    }

    public function testSetFilterClass()
    {
        $map = array(
            'type-1' => $this->getMockClass('Webit\\DataSelection\\Filter\\Model\\FilterInterface'),
            'type-2' => $this->getMockClass('Webit\\DataSelection\\Filter\\Model\\FilterInterface')
        );

        $factory = new FilterFactoryMapBased();
        foreach ($map as $key => $class) {
            $factory->setFilterClass($key, $class);
        }

        foreach ($map as $key => $class) {
            $filter = $factory->createFilter($key);
            $this->assertInstanceOf($class, $filter);
        }

        // allow replace
        $mockClass = $this->getMockClass('Webit\\DataSelection\\Filter\\Model\\FilterInterface');
        $factory->setFilterClass('type-1', $mockClass);

        $filter = $factory->createFilter('type-1');
        $this->assertInstanceOf($mockClass, $filter);
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Factory\Exception\FilterClassNotFoundException
     */
    public function testUndefinedFilterClass()
    {
        $factory = new FilterFactoryMapBased();
        $factory->setFilterClass('type-1', 'UndefinedFilterClass');
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Factory\Exception\InvalidFilterClassException
     */
    public function testInvalidFilterClass()
    {
        $factory = new FilterFactoryMapBased();
        $factory->setFilterClass('type-1', $this->getMockClass('\stdClass'));
    }

    public function testSetFiltersMap()
    {
        $map = array(
            'type-1' => $this->getMockClass('Webit\\DataSelection\\Filter\\Model\\FilterInterface'),
            'type-2' => $this->getMockClass('Webit\\DataSelection\\Filter\\Model\\FilterInterface')
        );

        $factory = new FilterFactoryMapBased();
        $factory->setFilterMap($map);

        foreach ($map as $key => $class) {
            $filter = $factory->createFilter($key);
            $this->assertInstanceOf($class, $filter);
        }
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Factory\Exception\UnregisteredFilterTypeException
     */
    public function testUnsetFilterClass()
    {
        $factory = new FilterFactoryMapBased();
        $factory->createFilter('type-1');
    }
}
