<?php
namespace Dotdigitalgroup\Sms\Controller\Adminhtml\Report\MassDelete;

/**
 * Interceptor class for @see \Dotdigitalgroup\Sms\Controller\Adminhtml\Report\MassDelete
 */
class Interceptor extends \Dotdigitalgroup\Sms\Controller\Adminhtml\Report\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Dotdigitalgroup\Sms\Model\ResourceModel\SmsOrder $collectionResource, \Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Dotdigitalgroup\Sms\Model\ResourceModel\SmsOrder\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($collectionResource, $context, $filter, $collectionFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
