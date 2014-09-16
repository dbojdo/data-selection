<?php
/**
 * FilterSerializerDefault.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 15:52
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Serializer;

use Webit\DataSelection\Filter\Model\FilterInterface;
use Webit\DataSelection\Filter\Serializer\Exception\FilterDeserializationDriverNotFoundException;
use Webit\DataSelection\Filter\Serializer\Exception\FilterSerializationDriverNotFoundException;

/**
 * Class FilterSerializerDefault
 * @package Webit\DataSelection\Filter\Serializer
 */
class FilterSerializerDefault implements FilterSerializerInterface
{
    /**
     * @var array
     */
    private $drivers = array();

    /**
     * @param string $string
     * @param string $driverType
     * @throws FilterDeserializationDriverNotFoundException
     * @return FilterInterface
     */
    public function deserializeFilter($string, $driverType)
    {
        $driver = $this->getDeserializationDriver($driverType);
        if (empty($driver)) {
            throw new FilterDeserializationDriverNotFoundException(
                sprintf('Can not find deserialization driver of type "%s"', $driverType)
            );
        }

        $filter = $driver->deserializeFilter($string);

        return $filter;
    }

    /**
     * @param \Webit\DataSelection\Filter\Model\FilterInterface $filter
     * @param string $driverType
     * @throws FilterSerializationDriverNotFoundException
     * @return string
     */
    public function serializerFilter(FilterInterface $filter, $driverType)
    {
        $driver = $this->getSerializationDriver($driverType);
        if (empty($driver)) {
            throw new FilterSerializationDriverNotFoundException(
                sprintf('Can not find serialization driver of type "%s"', $driverType)
            );
        }

        $string = $driver->serializeFilter($filter);

        return $string;
    }

    /**
     * @param $driverType
     * @param FilterSerializationDriverInterface $serializationDriver
     */
    public function registerSerializationDriver($driverType, FilterSerializationDriverInterface $serializationDriver)
    {
        $key = $this->createSerializationDriverKey($driverType);
        $this->drivers[$key] = $serializationDriver;
    }

    /**
     * @param $driverType
     * @param FilterDeserializationDriverInterface $deserializationDriver
     */
    public function registerDeserializationDriver(
        $driverType,
        FilterDeserializationDriverInterface $deserializationDriver
    ) {
        $key = $this->createDeserializationDriverKey($driverType);
        $this->drivers[$key] = $deserializationDriver;
    }

    /**
     * @param string $driverType
     * @return string
     */
    private function createSerializationDriverKey($driverType)
    {
        return 'serialization.' . $driverType;
    }

    /**
     * @param string $driverType
     * @return string
     */
    private function createDeserializationDriverKey($driverType)
    {
        return 'deserialization.' . $driverType;
    }

    /**
     * @param $driverType
     * @return FilterSerializationDriverInterface
     */
    private function getSerializationDriver($driverType)
    {
        $key = $this->createSerializationDriverKey($driverType);
        if (isset($this->drivers[$key])) {
            return $this->drivers[$key];
        }

        return null;
    }

    /**
     * @param $driverType
     * @return FilterDeserializationDriverInterface
     */
    private function getDeserializationDriver($driverType)
    {
        $key = $this->createDeserializationDriverKey($driverType);
        if (isset($this->drivers[$key])) {
            return $this->drivers[$key];
        }

        return null;
    }
}
 