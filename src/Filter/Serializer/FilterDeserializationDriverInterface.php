<?php
/**
 * FilterDeserializationDriverInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 15:50
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Serializer;

use Webit\DataSelection\Filter\Model\FilterInterface;

/**
 * Interface FilterDeserializationDriverInterface
 * @package Webit\DataSelection\Filter\Serializer
 */
interface FilterDeserializationDriverInterface
{
    /**
     * @param string $string
     * @return FilterInterface
     */
    public function deserializeFilter($string);
}
