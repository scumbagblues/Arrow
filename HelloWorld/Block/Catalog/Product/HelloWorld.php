<?php

namespace Arrow\HelloWorld\Block\Catalog\Product;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Arrow\HelloWorld\Helper\Data
     */
    protected $_helper;

    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Arrow\HelloWorld\Helper\Data $helper,
        \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        parent::__construct($context, $data);

        $this->_helper
            = $helper;
        $this->_objectManager = $objectManager;
    }

    public function getBlockLabel(){
        return $this->_helper->getBlockLabel();
    }

    public function getTextAlign(){
        return $this->_helper->getTextAlign();
    }

    protected function _toHtml()
    {
       if ($this->_helper->getEnable()){
            return parent::_toHtml();
       }
        else {
            return '';
        }
    }

    public function getCollection()
    {
        $model = $this->_objectManager->create('Arrow\HelloWorld\Model\HelloWorld');
        $collection = $model->getCollection();

        return $collection;
    }

 }   