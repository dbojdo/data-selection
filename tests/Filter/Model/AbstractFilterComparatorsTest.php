<?php
/**
 * AbstractFilterComparatorsTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 11:02
 * Copyright (C) Web-IT
 */
namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterNumberComparators;

/**
 * Class AbstractFilterComparatorsTest
 */
abstract class AbstractFilterComparatorsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @var array
     */
    protected $expected = array();

    public function testGetComparators()
    {
        if (empty($this->class)) {
            throw new \RuntimeException('Class for tests has not been defined.');
        }

        $callable = $this->class .'::getComparators';
        $comparators = call_user_func($callable);

        $this->assertInternalType('array', $comparators);
        foreach ((array) $this->expected as $value) {
            $this->assertContains($value, $comparators);
        }
    }
}
