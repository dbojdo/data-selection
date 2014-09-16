<?php
/**
 * AbstractFilterTes.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 12:39
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterInterface;

/**
 * Class AbstractFilterTest
 * @package Webit\DataSelection\Tests\Filter
 */
abstract class AbstractFilterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $filterType;

    /**
     * @var array
     */
    protected $defaultData = array();

    /**
     * @var array
     */
    protected $expectedData = array();

    public function testGetType()
    {
        $this->checkClass();
        $this->checkFilterType();

        $filter = new $this->class;
        $this->assertEquals($this->filterType, $filter->getType());
    }

    public function testDefaultData()
    {
        $this->checkClass();

        $filter = new $this->class;
        $this->checkFilterData($filter, $this->defaultData);
    }

    public function testConstructorSetters()
    {
        $this->checkClass();

        $refClass = new \ReflectionClass($this->class);
        $filter = $refClass->newInstanceArgs($this->expectedData);

        $this->checkFilterData($filter, $this->expectedData);
    }

    public function testSettersAndGetters()
    {
        $this->checkClass();

        $filter = new $this->class;
        $this->setFilterData($filter, $this->expectedData);

        $this->checkFilterData($filter, $this->expectedData);
    }

    /**
     * @param FilterInterface $filter
     * @param array $expectedData
     */
    private function checkFilterData(FilterInterface $filter, array $expectedData)
    {
        foreach ($expectedData as $key => $value) {
            $getter = 'get'.ucfirst($key);
            $this->assertEquals($value, call_user_func(array($filter, $getter)));
        }
    }

    /**
     * @param FilterInterface $filter
     * @param array $expectedData
     */
    private function setFilterData(FilterInterface $filter, array $expectedData)
    {
        foreach ($expectedData as $key => $value) {
            $setter = 'set'.ucfirst($key);
            call_user_func(array($filter, $setter), $value);
        }
    }

    /**
     * @throws \RuntimeException
     */
    private function checkClass()
    {
        if (empty($this->class)) {
            throw new \RuntimeException(sprintf('Filter class has not been set.', get_class($this)));
        }
    }

    /**
     * @throws \RuntimeException
     */
    private function checkFilterType()
    {
        if (empty($this->filterType)) {
            throw new \RuntimeException(sprintf('Filter type has not been set (%s).', get_class($this)));
        }
    }
}
