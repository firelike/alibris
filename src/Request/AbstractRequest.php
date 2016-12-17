<?php
namespace Firelike\Alibris\Request;


abstract class AbstractRequest
{

    protected $apikey;


    public function __construct($inRequestArguments)
    {
        $this->setApikey($inRequestArguments['apikey']);
    }


    public function toArray()
    {
        $r = array(
            'apikey' => $this->getApikey()
        );
        return array_filter($r);
    }


    public function getQueryString()
    {
        return http_build_query($this->toArray());
    }


    public function getApikey()
    {
        return $this->apikey;
    }


    public function setApikey($apikey)
    {
        $this->apikey = $apikey;
    }
}
