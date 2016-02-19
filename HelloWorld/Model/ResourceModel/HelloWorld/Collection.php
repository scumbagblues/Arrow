<?php


namespace Arrow\HelloWorld\Model\ResourceModel\HelloWorld;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Arrow\HelloWorld\Model\HelloWorld', 'Arrow\HelloWorld\Model\ResourceModel\HelloWorld');
    }
}