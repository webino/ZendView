<?php

namespace Zend\View\Helper;

/**
 * Trait EscapeTrait
 *
 * @property-read object $view
 */
trait EscapeTrait
{
    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     * @return string
     */
    protected function escapeHtml($value)
    {
        $this->view->escapeHtml($value);
    }

    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     * @return string
     */
    protected function escapeHtmlAttr($value)
    {
        return $this->view->escapeHtmlAttr($value);
    }

    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     * @return string
     */
    protected function escapeUrl($value)
    {
        return $this->view->escapeUrl($value);
    }

    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     * @return string
     */
    protected function escapeCss($value)
    {
        return $this->view->escapeCss($value);
    }

    /**
     * Escape a value for current escaping strategy
     *
     * @param  string $value
     * @return string
     */
    protected function escapeJs($value)
    {
        return $this->view->escapeJs($value);
    }
}
