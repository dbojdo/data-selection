<?php
/**
 * FilterOr.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 14:29
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterOr
 * @package Webit\DataSelection\Filter\Model
 */
class FilterOr extends AbstractFilterComposite implements FilterOrInterface
{
    /**
     * @return string
     */
    public function getType()
    {
        return FilterTypes::TYPE_OR;
    }
}
