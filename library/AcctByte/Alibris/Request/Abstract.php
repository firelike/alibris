<?php



abstract class AcctByte_Alibris_Request_Abstract
{

    protected $apikey;


    public function __construct ($inRequestArguments)
    {
        $this->setApikey($inRequestArguments[ 'apikey' ]);
    }


    public function toArray ()
    {
        $r = array( 
            'apikey' => $this->getApikey() 
        );
        return array_filter($r);
    }


    public function getQueryString ()
    {
        return http_build_query($this->toArray());
    }


    /**
     *
     * @return the $apikey
     */
    public function getApikey ()
    {
        return $this->apikey;
    }


    /**
     *
     * @param $apikey the
     *            $apikey to set
     */
    public function setApikey ($apikey)
    {
        $this->apikey = $apikey;
    }
}
