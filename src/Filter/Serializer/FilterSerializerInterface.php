<?php
/**
 * FilterSerializerInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 15:47
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Serializer;

use Webit\DataSelection\Filter\Model\FilterInterface;

/**
 * Interface FilterSerializerInterface
 * @package Webit\DataSelection\Filter\Serializer
 */
interface FilterSerializerInterface
{
    /**
     * @param string $string
     * @param string $driverType
     * @return FilterInterface
     */
    public function deserializeFilter($string, $driverType);

    /**
     * @param FilterInterface $filterInterface
     * @param $driverType
     * @return mixed
     */
    public function serializerFilter(FilterInterface $filterInterface, $driverType);
}
