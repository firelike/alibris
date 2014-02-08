<?php


class AcctByte_Alibris_Response_ResultSet_Review extends AcctByte_Alibris_Response_ResultSet
{

    protected $workId;

    protected $overallRating;


    public function __construct ($inResult)
    {
        parent::__construct($inResult);
        $this->setWorkId($inResult->work_id);
        $this->setOverallRating($inResult->overall_rating);
        $this->setItems($inResult->review);
    
    }


    public function toArray ()
    {
        
        $out = array( 
            'work_id' => $this->getWorkId() , 
            'overall_rating' => $this->getOverallRating() , 
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
     * @param $items the $items to set
     */
    public function setItems ($items)
    {
        foreach ( $items as $item ) {
            $this->items[] = new AcctByte_Alibris_Response_Review($item);
        }
    
    }


    /**
     * @return the $workId
     */
    public function getWorkId ()
    {
        return $this->workId;
    }


    /**
     * @return the $overallRating
     */
    public function getOverallRating ()
    {
        return $this->overallRating;
    }


    /**
     * @param $workId the $workId to set
     */
    public function setWorkId ($workId)
    {
        $this->workId = $workId;
    }


    /**
     * @param $overallRating the $overallRating to set
     */
    public function setOverallRating ($overallRating)
    {
        $this->overallRating = $overallRating;
    }


}