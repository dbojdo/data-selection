<?php
/**
 * FilterIn.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 13:42
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterIn
 * @package Webit\DataSelection\Filter\Model
 */
class FilterIn implements FilterInInterface
{
    /**
     * @var string
     */
    protected $property;

    /**
     * @var array
     */
    protected $values = array();

    public function __construct($property = null, array $values = array())
    {
        $this->setProperty($property);
        $this->setValues($values);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return FilterTypes::TYPE_IN;
    }

    /**
     * @param string $property
     */
    public function setProperty($property)
    {
        $this->property = $property;
    }

    /**
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param mixed $value
     */
    public function addValue($value)
    {
        if (in_array($value, $this->values, true) == false) {
            $this->values[] = $value;
        }
    }

    /**
     * @param array $values
     */
    public function setValues(array $values)
    {
        $this->values = array();
        foreach ($values as $value) {
            $this->addValue($value);
        }
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }
}
