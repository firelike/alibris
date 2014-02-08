<?php



class AcctByte_Alibris_Request_Recommend
{

    protected $work;

    protected $apikey;


    public function __construct ($inRequestArguments)
    {
        $this->setWork($inRequestArguments[ 'work' ]);
        $this->setApikey($inRequestArguments[ 'apikey' ]);
    }


    /**
     * @return the $command
     */
    public function getMethodName ()
    {
        return 'recommend';
    }


    public function getQueryString ()
    {
        
        $args[ 'work' ] = $this->getWork();
        $args[ 'apikey' ] = $this->getApikey();
        
        $query_str = http_build_query($args);
        return $query_str;
    
    }
    
	/**
     * @return the $work
     */
    public function getWork ()
    {
        return $this->work;
    }

	/**
     * @return the $apikey
     */
    public function getApikey ()
    {
        return $this->apikey;
    }

	/**
     * @param $work the $work to set
     */
    public function setWork ($work)
    {
        $this->work = $work;
    }

	/**
     * @param $apikey the $apikey to set
     */
    public function setApikey ($apikey)
    {
        $this->apikey = $apikey;
    }





}
