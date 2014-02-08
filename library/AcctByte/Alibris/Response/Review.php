<?php



class AcctByte_Alibris_Response_Review
{

    protected $id;

    protected $date;

    protected $name;

    protected $location;

    protected $rating;

    protected $recommend;

    protected $body;


    public function __construct ($inItem)
    {
        
        $this->setId((string) $inItem->id);
        $this->setDate((string) $inItem->date);
        $this->setName((string) $inItem->name);
        $this->setLocation((string) $inItem->location);
        $this->setRating((string) $inItem->rating);
        $this->setRecommend((string) $inItem->recommend);
        $this->setBody((string) $inItem->body);
    
    }


    public function toArray ()
    {
        
        return array( 
            'id' => $this->getId() , 
            'date' => $this->getDate() , 
            'name' => $this->getName() , 
            'location' => $this->getLocation() , 
            'rating' => $this->getRating() , 
            'recommend' => $this->getRecommend() , 
            'body' => $this->getBody() , 
        );
    

    }
    
    
	/**
     * @return the $id
     */
    public function getId ()
    {
        return $this->id;
    }

	/**
     * @return the $date
     */
    public function getDate ()
    {
        return $this->date;
    }

	/**
     * @return the $name
     */
    public function getName ()
    {
        return $this->name;
    }

	/**
     * @return the $location
     */
    public function getLocation ()
    {
        return $this->location;
    }

	/**
     * @return the $rating
     */
    public function getRating ()
    {
        return $this->rating;
    }

	/**
     * @return the $recommend
     */
    public function getRecommend ()
    {
        return $this->recommend;
    }

	/**
     * @return the $body
     */
    public function getBody ()
    {
        return $this->body;
    }

	/**
     * @param $id the $id to set
     */
    public function setId ($id)
    {
        $this->id = $id;
    }

	/**
     * @param $date the $date to set
     */
    public function setDate ($date)
    {
        $this->date = $date;
    }

	/**
     * @param $name the $name to set
     */
    public function setName ($name)
    {
        $this->name = $name;
    }

	/**
     * @param $location the $location to set
     */
    public function setLocation ($location)
    {
        $this->location = $location;
    }

	/**
     * @param $rating the $rating to set
     */
    public function setRating ($rating)
    {
        $this->rating = $rating;
    }

	/**
     * @param $recommend the $recommend to set
     */
    public function setRecommend ($recommend)
    {
        $this->recommend = $recommend;
    }

	/**
     * @param $body the $body to set
     */
    public function setBody ($body)
    {
        $this->body = $body;
    }



}