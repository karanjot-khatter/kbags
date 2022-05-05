<?php
namespace Kbags\Pages\Block;
class Firstpage extends \Magento\Framework\View\Element\Template
{
    public function _prepareLayout()
    {

        $this->pageConfig->getTitle()->set(__('First page title'));  
        return parent::_prepareLayout();
    }
}