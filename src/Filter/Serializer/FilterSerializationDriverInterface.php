<?php
/**
 * FilterSerializationDriverInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 15:51
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Serializer;

use Webit\DataSelection\Filter\Model\FilterInterface;

/**
 * Interface FilterSerializationDriverInterface
 * @package Webit\DataSelection\Filter\Serializer
 */
interface FilterSerializationDriverInterface
{
    /**
     * @param FilterInterface $filterInterface
     * @return string
     */
    public function serializeFilter(FilterInterface $filterInterface);
}
