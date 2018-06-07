<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\View\Helper;

use PHPUnit\Framework\TestCase;
use Zend\View\Helper\AbstractHelper;
use Zend\View\Helper\EscapeTrait;
use Zend\View\Renderer\PhpRenderer as View;

class EscapeTraitTest extends TestCase
{
    public function testEscape()
    {
        $helper = new class extends AbstractHelper {
            use EscapeTrait;

            public function test()
            {
                $this->escapeHtml('test');
                $this->escapeHtmlAttr('test');
                $this->escapeUrl('test');
                $this->escapeCss('test');
                $this->escapeJs('test');

                return true;
            }
        };

        $helper->setView(new View);
        $this->assertTrue($helper->test());
    }
}
