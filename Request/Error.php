<?php
class AcctByte_Alibris_Request_Error
{

    protected $ErrorID;

    protected $ErrorText;


    public function __construct ($inErrorID, $inErrorText)
    {
        $this->ErrorID = $inErrorID;
        $this->ErrorText = $inErrorText;
    }


    public function toArray ()
    {
        return array( 
            'Error' => array( 
                'ErrorID' => $this->ErrorID , 
                'ErrorText' => $this->ErrorText 
            ) 
        );
    }


}
