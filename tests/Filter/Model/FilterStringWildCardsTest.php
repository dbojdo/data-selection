<?php
/**
 * FilterStringWildCardsTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 12:03
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Tests\Filter;

use Webit\DataSelection\Filter\Model\FilterStringWildCards;

/**
 * Class FilterStringWildCardsTest
 * @package Webit\DataSelection\Tests\Filter
 */
class FilterStringWildCardsTest extends \PHPUnit_Framework_TestCase
{
    public function testGetWildCards()
    {
        $expectedWildCards = array(
            FilterStringWildCards::WILDCARD_LEFT,
            FilterStringWildCards::WILDCARD_RIGHT,
            FilterStringWildCards::WILDCARD_BOTH,
            FilterStringWildCards::WILDCARD_NONE
        );

        $wildCards = FilterStringWildCards::getWildCards();

        $this->assertInternalType('array', $wildCards);
        foreach ($expectedWildCards as $wildCard) {
            $this->assertContains($wildCard, $wildCards);
        }
    }
}
 