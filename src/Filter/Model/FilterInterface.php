<?php
/**
 * FilterInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:35
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterInterface
 * @package Webit\DataSelection\Filter\Model
 */
interface FilterInterface
{
    /**
     * @return string
     */
    public function getType();
}
 