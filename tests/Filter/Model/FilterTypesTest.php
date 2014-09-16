<?php
/**
 * FilterTypesTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 11:26
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterTypes;

/**
 * Class FilterTypesTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterTypesTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTypes()
    {
        $expectedTypes = array(
            FilterTypes::TYPE_AND,
            FilterTypes::TYPE_OR,
            FilterTypes::TYPE_DATETIME,
            FilterTypes::TYPE_NULL,
            FilterTypes::TYPE_IN,
            FilterTypes::TYPE_NUMBER,
            FilterTypes::TYPE_STRING,
            FilterTypes::TYPE_BOOLEAN
        );

        $types = FilterTypes::getTypes();

        $this->assertInternalType('array', $types);
        foreach ($expectedTypes as $type) {
            $this->assertContains($type, $types);
        }
    }
}
 