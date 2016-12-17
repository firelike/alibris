<?php
namespace Firelike\Alibris\Response\ResultSet;

use Firelike\Alibris\Response\ResultSet;
use Firelike\Alibris\Response\Work;

class Search extends ResultSet
{


    public function __construct($inResult)
    {
        parent::__construct($inResult);
        $this->setItems($inResult->work);

    }


    /**
     * @param $items the $items to set
     */
    public function setItems($items)
    {
        foreach ($items as $item) {
            $this->items[] = new Work($item);
        }

    }


}