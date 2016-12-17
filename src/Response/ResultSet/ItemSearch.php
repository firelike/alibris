<?php
namespace Firelike\Alibris\Response\ResultSet;

use Firelike\Alibris\Response\Book;
use Firelike\Alibris\Response\ResultSet;

class ItemSearch extends ResultSet
{


    public function __construct($inResult)
    {
        parent::__construct($inResult);
        $this->setItems($inResult->book);
    }


    /**
     * @param $items the $items to set
     */
    public function setItems($items)
    {

        foreach ($items as $item) {
            $this->items[] = new Book($item);
        }

    }


}