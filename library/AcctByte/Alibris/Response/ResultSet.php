<?php


class AcctByte_Alibris_Response_ResultSet
{

    protected $items = array();

    protected $status;

    protected $message;


    public function __construct ($inResult)
    {
        $this->setStatus((string) $inResult->status);
        $this->setMessage((string) $inResult->message);
    
    }


    public function toArray ()
    {
        
        $out = array( 
            'status' => $this->getStatus() , 
            'message' => $this->getMessage() 
        );
        
        $items = $this->getItems();
        
        $out[ 'items' ] = array();
        foreach ( $items as $item ) {
            $out[ 'items' ][] = $item->toArray();
        }
        
        return $out;
    }


    /**
     * @return the $items
     */
    public function getItems ()
    {
        return $this->items;
    }


    /**
     * @return the $status
     */
    public function getStatus ()
    {
        return $this->status;
    }


    /**
     * @param $status the $status to set
     */
    public function setStatus ($status)
    {
        $this->status = $status;
    }


    /**
     * @return the $message
     */
    public function getMessage ()
    {
        return $this->message;
    }


    /**
     * @param $message the $message to set
     */
    public function setMessage ($message)
    {
        $this->message = $message;
    }


}