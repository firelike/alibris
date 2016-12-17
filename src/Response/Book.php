<?php
namespace Firelike\Alibris\Response;

class Book
{

    protected $title;

    protected $author;

    protected $bin;

    protected $binding;

    protected $comments;

    protected $condition;

    protected $cost;

    protected $datePub;

    protected $edition;

    protected $flBookCond;

    protected $flCover;

    protected $flDustJacket;

    protected $flEdition;

    protected $flJacketCondition;

    protected $flSigned;

    protected $illus;

    protected $imageurl;

    protected $isbn;

    protected $mediaType;

    protected $keywords;

    protected $notes;

    protected $placePub;

    protected $price;

    protected $publisher;

    protected $qtyAvail;

    protected $reliablility;

    protected $shiploc;

    protected $sellercity;

    protected $sellerstate;

    protected $sellercountry;

    protected $sellername;

    protected $sellerid;

    protected $shipping;

    protected $workId;


    public function __construct($inItem)
    {
        $this->setTitle($inItem->title);
        $this->setAuthor($inItem->author);
        $this->setBin($inItem->bin);
        $this->setBinding($inItem->binding);
        $this->setComments($inItem->comments);
        $this->setCondition($inItem->condition);
        $this->setCost($inItem->cost);
        $this->setDatePub($inItem->date_pub);
        $this->setEdition($inItem->edition);
        $this->setFlBookCond($inItem->fl_bookcond);
        $this->setFlCover($inItem->fl_cover);
        $this->setFlDustJacket($inItem->fl_dustjacket);
        $this->setFlEdition($inItem->fl_edition);
        $this->setFlJacketCondition($inItem->fl_jacketcond);
        $this->setFlSigned($inItem->fl_signed);
        $this->setIllus($inItem->illus);
        $this->setImageurl($inItem->imageurl);
        $this->setIsbn($inItem->isbn);
        $this->setMediaType($inItem->media_type);
        $this->setKeywords($inItem->keywords);
        $this->setNotes($inItem->notes);
        $this->setPlacePub($inItem->place_pub);
        $this->setPrice($inItem->price);
        $this->setPublisher($inItem->publisher);
        $this->setQtyAvail($inItem->qty_avail);
        $this->setReliablility($inItem->reliability);
        $this->setShiploc($inItem->shiploc);
        $this->setSellercity($inItem->sellercity);
        $this->setSellerstate($inItem->sellerstate);
        $this->setSellercountry($inItem->sellercountry);
        $this->setSellername($inItem->sellername);
        $this->setSellerid($inItem->sellerid);
        $this->setShipping($inItem->shipping);
        $this->setWorkId($inItem->work_id);

    }


    public function toArray()
    {

        return array(
            'title' => $this->getTitle(),
            'author' => $this->getAuthor(),
            'bin' => $this->getBin(),
            'binding' => $this->getBinding(),
            'comments' => $this->getComments(),
            'condition' => $this->getCondition(),
            'cost' => $this->getCost(),
            'date_pub' => $this->getDatePub(),
            'edition' => $this->getEdition(),
            'fl_bookcond' => $this->getFlBookCond(),
            'fl_cover' => $this->getFlCover(),
            'fl_dustjacket' => $this->getFlDustJacket(),
            'fl_edition' => $this->getFlEdition(),
            'fl_jacketcond' => $this->getFlJacketCondition(),
            'fl_signed' => $this->getFlSigned(),
            'illus' => $this->getIllus(),
            'imageurl' => $this->getImageurl(),
            'isbn' => $this->getIsbn(),
            'media_type' => $this->getMediaType(),
            'keywords' => $this->getKeywords(),
            'notes' => $this->getNotes(),
            'place_pub' => $this->getPlacePub(),
            'price' => $this->getPrice(),
            'publisher' => $this->getPublisher(),
            'qty_avail' => $this->getQtyAvail(),
            'reliability' => $this->getReliablility(),
            'shiploc' => $this->getShiploc(),
            'sellercity' => $this->getSellercity(),
            'sellerstate' => $this->getSellerstate(),
            'sellercountry' => $this->getSellercountry(),
            'sellername' => $this->getSellername(),
            'sellerid' => $this->getSellerid(),
            'shipping' => $this->getShipping(),
            'work_id' => $this->getWorkId()
        );


    }


    /**
     * @return the $title
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * @return the $author
     */
    public function getAuthor()
    {
        return $this->author;
    }


    /**
     * @return the $bin
     */
    public function getBin()
    {
        return $this->bin;
    }


    /**
     * @return the $binding
     */
    public function getBinding()
    {
        return $this->binding;
    }


    /**
     * @return the $comments
     */
    public function getComments()
    {
        return $this->comments;
    }


    /**
     * @return the $condition
     */
    public function getCondition()
    {
        return $this->condition;
    }


    /**
     * @return the $cost
     */
    public function getCost()
    {
        return $this->cost;
    }


    /**
     * @return the $datePub
     */
    public function getDatePub()
    {
        return $this->datePub;
    }


    /**
     * @return the $edition
     */
    public function getEdition()
    {
        return $this->edition;
    }


    /**
     * @return the $flBookCond
     */
    public function getFlBookCond()
    {
        return $this->flBookCond;
    }


    /**
     * @return the $flCover
     */
    public function getFlCover()
    {
        return $this->flCover;
    }


    /**
     * @return the $flDustJacket
     */
    public function getFlDustJacket()
    {
        return $this->flDustJacket;
    }


    /**
     * @return the $flEdition
     */
    public function getFlEdition()
    {
        return $this->flEdition;
    }


    /**
     * @return the $flJacketCondition
     */
    public function getFlJacketCondition()
    {
        return $this->flJacketCondition;
    }


    /**
     * @return the $flSigned
     */
    public function getFlSigned()
    {
        return $this->flSigned;
    }


    /**
     * @return the $illus
     */
    public function getIllus()
    {
        return $this->illus;
    }


    /**
     * @return the $imageurl
     */
    public function getImageurl()
    {
        return $this->imageurl;
    }


    /**
     * @return the $isbn
     */
    public function getIsbn()
    {
        return $this->isbn;
    }


    /**
     * @return the $mediaType
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }


    /**
     * @return the $keywords
     */
    public function getKeywords()
    {
        return $this->keywords;
    }


    /**
     * @return the $notes
     */
    public function getNotes()
    {
        return $this->notes;
    }


    /**
     * @return the $placePub
     */
    public function getPlacePub()
    {
        return $this->placePub;
    }


    /**
     * @return the $price
     */
    public function getPrice()
    {
        return $this->price;
    }


    /**
     * @return the $publisher
     */
    public function getPublisher()
    {
        return $this->publisher;
    }


    /**
     * @return the $qtyAvail
     */
    public function getQtyAvail()
    {
        return $this->qtyAvail;
    }


    /**
     * @return the $reliablility
     */
    public function getReliablility()
    {
        return $this->reliablility;
    }


    /**
     * @return the $shiploc
     */
    public function getShiploc()
    {
        return $this->shiploc;
    }


    /**
     * @return the $sellercity
     */
    public function getSellercity()
    {
        return $this->sellercity;
    }


    /**
     * @return the $sellerstate
     */
    public function getSellerstate()
    {
        return $this->sellerstate;
    }


    /**
     * @return the $sellercountry
     */
    public function getSellercountry()
    {
        return $this->sellercountry;
    }


    /**
     * @return the $sellername
     */
    public function getSellername()
    {
        return $this->sellername;
    }


    /**
     * @return the $sellerid
     */
    public function getSellerid()
    {
        return $this->sellerid;
    }


    /**
     * @return the $shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }


    /**
     * @return the $workId
     */
    public function getWorkId()
    {
        return $this->workId;
    }


    /**
     * @param $title the $title to set
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


    /**
     * @param $author the $author to set
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }


    /**
     * @param $bin the $bin to set
     */
    public function setBin($bin)
    {
        $this->bin = $bin;
    }


    /**
     * @param $binding the $binding to set
     */
    public function setBinding($binding)
    {
        $this->binding = $binding;
    }


    /**
     * @param $comments the $comments to set
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }


    /**
     * @param $condition the $condition to set
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
    }


    /**
     * @param $cost the $cost to set
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }


    /**
     * @param $datePub the $datePub to set
     */
    public function setDatePub($datePub)
    {
        $this->datePub = $datePub;
    }


    /**
     * @param $edition the $edition to set
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;
    }


    /**
     * @param $flBookCond the $flBookCond to set
     */
    public function setFlBookCond($flBookCond)
    {
        $this->flBookCond = $flBookCond;
    }


    /**
     * @param $flCover the $flCover to set
     */
    public function setFlCover($flCover)
    {
        $this->flCover = $flCover;
    }


    /**
     * @param $flDustJacket the $flDustJacket to set
     */
    public function setFlDustJacket($flDustJacket)
    {
        $this->flDustJacket = $flDustJacket;
    }


    /**
     * @param $flEdition the $flEdition to set
     */
    public function setFlEdition($flEdition)
    {
        $this->flEdition = $flEdition;
    }


    /**
     * @param $flJacketCondition the $flJacketCondition to set
     */
    public function setFlJacketCondition($flJacketCondition)
    {
        $this->flJacketCondition = $flJacketCondition;
    }


    /**
     * @param $flSigned the $flSigned to set
     */
    public function setFlSigned($flSigned)
    {
        $this->flSigned = $flSigned;
    }


    /**
     * @param $illus the $illus to set
     */
    public function setIllus($illus)
    {
        $this->illus = $illus;
    }


    /**
     * @param $imageurl the $imageurl to set
     */
    public function setImageurl($imageurl)
    {
        $this->imageurl = $imageurl;
    }


    /**
     * @param $isbn the $isbn to set
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }


    /**
     * @param $mediaType the $mediaType to set
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
    }


    /**
     * @param $keywords the $keywords to set
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }


    /**
     * @param $notes the $notes to set
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }


    /**
     * @param $placePub the $placePub to set
     */
    public function setPlacePub($placePub)
    {
        $this->placePub = $placePub;
    }


    /**
     * @param $price the $price to set
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     * @param $publisher the $publisher to set
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }


    /**
     * @param $qtyAvail the $qtyAvail to set
     */
    public function setQtyAvail($qtyAvail)
    {
        $this->qtyAvail = $qtyAvail;
    }


    /**
     * @param $reliablility the $reliablility to set
     */
    public function setReliablility($reliablility)
    {
        $this->reliablility = $reliablility;
    }


    /**
     * @param $shiploc the $shiploc to set
     */
    public function setShiploc($shiploc)
    {
        $this->shiploc = $shiploc;
    }


    /**
     * @param $sellercity the $sellercity to set
     */
    public function setSellercity($sellercity)
    {
        $this->sellercity = $sellercity;
    }


    /**
     * @param $sellerstate the $sellerstate to set
     */
    public function setSellerstate($sellerstate)
    {
        $this->sellerstate = $sellerstate;
    }


    /**
     * @param $sellercountry the $sellercountry to set
     */
    public function setSellercountry($sellercountry)
    {
        $this->sellercountry = $sellercountry;
    }


    /**
     * @param $sellername the $sellername to set
     */
    public function setSellername($sellername)
    {
        $this->sellername = $sellername;
    }


    /**
     * @param $sellerid the $sellerid to set
     */
    public function setSellerid($sellerid)
    {
        $this->sellerid = $sellerid;
    }


    /**
     * @param $shipping the $shipping to set
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }


    /**
     * @param $workId the $workId to set
     */
    public function setWorkId($workId)
    {
        $this->workId = $workId;
    }


}