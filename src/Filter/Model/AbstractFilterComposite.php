<?php
/**
 * AbstractFilterComposite.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@web-it.eu>
 * Created on Sep 08, 2014, 14:29
 * Copyright (C) Web-IT
 */

namespace Webit\DataSelection\Filter\Model;

/**
 * Class AbstractFilterComposite
 * @package Webit\DataSelection\Filter\Model
 */
abstract class AbstractFilterComposite implements FilterCompositeInterface
{
    /**
     * @var array
     */
    protected $filters = array();

    /**
     * @param array $filters
     */
    public function __construct(array $filters = array())
    {
        $this->setFilters($filters);
    }

    /**
     * @param FilterInterface $filter
     */
    public function addFilter(FilterInterface $filter)
    {
        if (in_array($filter, $this->filters, true) == false) {
            $this->filters[] = $filter;
        }
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * @param array $filters
     */
    public function setFilters(array $filters)
    {
        foreach ($filters as $filter) {
            $this->addFilter($filter);
        }
    }
}
