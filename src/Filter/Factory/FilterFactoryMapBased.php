<?php
/**
 * FilterFactoryMapBased.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 14:57
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Factory;

use Webit\DataSelection\Filter\Factory\Exception\FilterClassNotFoundException;
use Webit\DataSelection\Filter\Factory\Exception\InvalidFilterClassException;
use Webit\DataSelection\Filter\Factory\Exception\UnregisteredFilterTypeException;
use Webit\DataSelection\Filter\Model\FilterInterface;

/**
 * Class FilterFactoryMapBased
 * @package Webit\DataSelection\Filter\Factory
 */
class FilterFactoryMapBased implements FilterFactoryInterface
{
    /**
     * @var array
     */
    private $filtersMap = array();

    /**
     * @param array $filtersMap
     */
    public function __construct(array $filtersMap = array())
    {
        $this->setFilterMap($filtersMap);
    }

    /**
     * @param array $filtersMap
     */
    public function setFilterMap(array $filtersMap)
    {
        foreach ($filtersMap as $type => $class) {
            $this->setFilterClass($type, $class);
        }
    }

    /**
     * @param string $type
     * @param string $class
     * @throws InvalidFilterClassException
     */
    public function setFilterClass($type, $class)
    {
        $this->checkFilterClass($class);

        $this->filtersMap[$type] = $class;
    }

    /**
     * @param string $type
     * @param array $arguments
     * @throws FilterClassNotFoundException
     * @return FilterInterface
     */
    public function createFilter($type, array $arguments = array())
    {
        $class = $this->getClass($type);
        if (empty($class)) {
            throw new UnregisteredFilterTypeException(
                sprintf('Filter class for type "%s" has never been registered.', $type)
            );
        }

        $refClass = new \ReflectionClass($class);
        $filter = $refClass->newInstanceArgs($arguments);

        return $filter;
    }

    /**
     * @param $class
     * @throws InvalidFilterClassException
     * @throws FilterClassNotFoundException
     */
    private function checkFilterClass($class)
    {
        if (class_exists($class, true) == false) {
            throw new FilterClassNotFoundException(sprintf('Class "%s" cannot be found.', $class));
        }

        $refClass = new \ReflectionClass($class);

        $filterInterface = 'Webit\\DataSelection\\Filter\\Model\\FilterInterface';
        if ($refClass->implementsInterface($filterInterface) == false) {
            throw new InvalidFilterClassException(sprintf('Class "%s" must implement "%s".', $class, $filterInterface));
        }
    }

    /**
     * @param string $type
     * @return string
     */
    private function getClass($type)
    {
        if (isset($this->filtersMap[$type])) {
            return $this->filtersMap[$type];
        }

        return null;
    }
}
