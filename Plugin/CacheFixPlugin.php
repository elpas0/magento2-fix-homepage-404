<?php
namespace Nwdthemes\CacheFix\Plugin;

class CacheFixPlugin
{
    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $request;

    /**
     * @param \Magento\Framework\App\Request\Http $request
     */
    public function __construct(\Magento\Framework\App\Request\Http $request)
    {
        $this->request = $request;
    }

    /**
     * @param \Magento\Framework\App\PageCache\Kernel $subject
     * @param callable $proceed
     * @param \Magento\Framework\App\Response\Http $response
     * @return void
     */
    public function aroundProcess(
        \Magento\Framework\App\PageCache\Kernel $subject,
        callable $proceed,
        \Magento\Framework\App\Response\Http $response
    ) {
        if ($this->request->isHead() && $response->getHttpResponseCode() == 404) {
            return;
        }
        return $proceed($response);
    }
}