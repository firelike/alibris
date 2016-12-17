<?php
namespace Firelike\Alibris\Request;


class Recommend extends AbstractRequest
{


    protected $work;


    public function __construct($inRequestArguments)
    {
        parent::__construct($inRequestArguments);
        $this->setWork($inRequestArguments['work']);
    }


    public function getMethodName()
    {
        return 'recommend';
    }


    public function toArray()
    {
        $args['work'] = $this->getWork();

        return array_merge(parent::toArray(), array_filter($args));
    }


    public function getWork()
    {
        return $this->work;
    }


    public function setWork($work)
    {
        $this->work = $work;
    }
}
