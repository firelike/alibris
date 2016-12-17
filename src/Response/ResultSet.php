<?php
namespace Firelike\Alibris\Response;


class ResultSet
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


    public function getItems ()
    {
        return $this->items;
    }


    public function getStatus ()
    {
        return $this->status;
    }


    public function setStatus ($status)
    {
        $this->status = $status;
    }


    public function getMessage ()
    {
        return $this->message;
    }


    public function setMessage ($message)
    {
        $this->message = $message;
    }


}