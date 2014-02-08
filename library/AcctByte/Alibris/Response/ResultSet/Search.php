<?php


class AcctByte_Alibris_Response_ResultSet_Search extends AcctByte_Alibris_Response_ResultSet
{


    public function __construct ($inResult)
    {
        parent::__construct($inResult);
        $this->setItems($inResult->work);
    
    }


    /**
     * @param $items the $items to set
     */
    public function setItems ($items)
    {
        foreach ( $items as $item ) {
            $this->items[] = new AcctByte_Alibris_Response_Work($item);
        }
    
    }


}