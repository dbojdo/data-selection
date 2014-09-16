<?php
/**
 * FilterCompositeInterface.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 10:59
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Interface FilterCompositeInterface
 * @package Webit\DataSelection\Filter\Model
 */
interface FilterCompositeInterface extends FilterInterface
{
    /**
     * @param FilterInterface $filter
     */
    public function addFilter(FilterInterface $filter);

    /**
     * @return array
     */
    public function getFilters();

    /**
     * @param array $filters
     */
    public function setFilters(array $filters);
}
 