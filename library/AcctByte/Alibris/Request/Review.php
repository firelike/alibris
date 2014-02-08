<?php



class AcctByte_Alibris_Request_Review extends AcctByte_Alibris_Request_Abstract
{

    
    protected $work;

    public function __construct ($inRequestArguments)
    {
        parent::__construct($inRequestArguments);
        $this->setWork($inRequestArguments[ 'work' ]);
    }


    /**
     *
     * @return the $command
     */
    public function getMethodName ()
    {
        return 'review';
    }


    public function toArray ()
    {
        $args[ 'work' ] = $this->getWork();
        return array_merge(parent::toArray(), array_filter($args));
    }


    /**
     *
     * @return the $work
     */
    public function getWork ()
    {
        return $this->work;
    }


    /**
     *
     * @param $work the
     *            $work to set
     */
    public function setWork ($work)
    {
        $this->work = $work;
    }
}
