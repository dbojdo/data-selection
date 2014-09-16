<?php
/**
 * FilterSerializerDefaultTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 16:41
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter\Serializer;

use Webit\DataSelection\Filter\Serializer\FilterDeserializationDriverInterface;
use Webit\DataSelection\Filter\Serializer\FilterSerializationDriverInterface;
use Webit\DataSelection\Filter\Serializer\FilterSerializerDefault;

/**
 * Class FilterSerializerDefaultTest
 * @package Webit\DataSelection\Tests\Filter\Serializer
 */
class FilterSerializerDefaultTest extends \PHPUnit_Framework_TestCase
{
    public function testRegisterSerializationDriver()
    {
        $type = 'type-1';
        $driver = $this->getSerializationDriver();

        $serializer = new FilterSerializerDefault();

        $serializer->registerSerializationDriver($type, $driver);

        return array($serializer, $driver, $type);
    }

    public function testRegisterDeserializationDriver()
    {
        $type = 'type-1';
        $driver = $this->getDeserializationDriver();
        $serializer = new FilterSerializerDefault();
        $serializer->registerDeserializationDriver($type, $driver);

        return array($serializer, $driver, $type);
    }

    /**
     * @depends testRegisterSerializationDriver
     */
    public function testSerializeFilter(array $data)
    {
        /**
         * @var FilterSerializerDefault $serializer
         * @var FilterSerializationDriverInterface|\PHPUnit_Framework_MockObject_MockObject $driver
         * @var string $type
         */
        list($serializer, $driver, $type) = $data;

        $filter = $this->getFilter();
        $string = json_encode(array());
        $driver->expects($this->once())
                ->method('serializeFilter')
                ->with($this->equalTo($filter))
                ->willReturn($string);

        $string = $serializer->serializerFilter($filter, $type);
        $this->assertInternalType('string', $string);
    }

    /**
     * @depends testRegisterDeserializationDriver
     */
    public function testDeserializeFilter(array $data)
    {
        /**
         * @var FilterSerializerDefault $serializer
         * @var FilterDeserializationDriverInterface|\PHPUnit_Framework_MockObject_MockObject $driver
         * @var string $type
         */
        list($serializer, $driver, $type) = $data;


        $string = json_encode(array());
        $driver->expects($this->once())
            ->method('deserializeFilter')
            ->with($this->equalTo($string))
            ->willReturn($this->getFilter());

        $filter = $serializer->deserializeFilter($string, $type);
        $this->assertInstanceOf('Webit\\DataSelection\\Filter\\Model\\FilterInterface', $filter);
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Serializer\Exception\FilterDeserializationDriverNotFoundException
     */
    public function testNotFoundDeserializationDriver()
    {
        $serializer = new FilterSerializerDefault();
        $serializer->deserializeFilter(json_encode(array()), 'type-1');
    }

    /**
     * @expectedException \Webit\DataSelection\Filter\Serializer\Exception\FilterSerializationDriverNotFoundException
     */
    public function testNotFoundSerializationDriver()
    {
        $serializer = new FilterSerializerDefault();
        $serializer->serializerFilter($this->getFilter(), 'type-1');
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getSerializationDriver()
    {
        $mock = $this->getMock('Webit\\DataSelection\\Filter\\Serializer\\FilterSerializationDriverInterface');

        return $mock;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getDeserializationDriver()
    {
        $mock = $this->getMock('Webit\\DataSelection\\Filter\\Serializer\\FilterDeserializationDriverInterface');

        return $mock;
    }

    /**
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function getFilter()
    {
        $mock = $this->getMock('Webit\\DataSelection\\Filter\\Model\\FilterInterface');

        return $mock;
    }
}
