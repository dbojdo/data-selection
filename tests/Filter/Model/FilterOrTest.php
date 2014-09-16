<?php
/**
 * FilterOrTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 14:55
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterTypes;

/**
 * Class FilterOrTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterOrTest extends AbstractFilterTest
{
    public function setUp()
    {
        $this->class = 'Webit\\DataSelection\\Filter\\Model\\FilterOr';
        $this->filterType = FilterTypes::TYPE_OR;
    }
}
