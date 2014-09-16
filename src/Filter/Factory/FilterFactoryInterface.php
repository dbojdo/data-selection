<?php
/**
 * FilterFactoryInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 14:56
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Factory;

use Webit\DataSelection\Filter\Model\FilterInterface;

/**
 * Interface FilterFactoryInterface
 * @package Webit\DataSelection\Filter\Factory
 */
interface FilterFactoryInterface
{
    /**
     * @param string $type
     * @param array $arguments
     * @return FilterInterface
     */
    public function createFilter($type, array $arguments = array());
}
