<?php
/**
 * FilterAnd.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 14:29
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class FilterAnd
 * @package Webit\DataSelection\Filter\Model
 */
class FilterAnd extends AbstractFilterComposite implements FilterAndInterface
{
    /**
     * @return string
     */
    public function getType()
    {
        return FilterTypes::TYPE_AND;
    }
}
