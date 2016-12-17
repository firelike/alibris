<?php
namespace Firelike\Alibris\Response;


class Work
{

    protected $title;

    protected $author;

    protected $basic;

    protected $geoCode;

    protected $language;

    protected $lcSubject;

    protected $mediaType;

    protected $minprice;

    protected $qtyAvail;

    protected $synopsis;

    protected $ttl;

    protected $imageurl;

    protected $cover;

    protected $workId;


    public function __construct($inItem)
    {

        $this->setTitle($inItem->title);
        $this->setAuthor($inItem->author);
        $this->setBasic($inItem->basic);
        $this->setGeoCode($inItem->geo_code);
        $this->setLanguage($inItem->language);
        $this->setLcSubject($inItem->lc_subject);
        $this->setMediaType($inItem->media_type);
        $this->setMinprice($inItem->minprice);
        $this->setQtyAvail($inItem->qty_avail);
        $this->setSynopsis($inItem->synopsis);
        $this->setTtl($inItem->ttl);
        $this->setImageurl($inItem->imageurl);
        $this->setCover($inItem->cover);
        $this->setWorkId($inItem->work_id);

    }


    public function toArray()
    {

        return array(
            'title' => $this->getTitle(),
            'author' => $this->getAuthor(),
            'basic' => $this->getBasic(),
            'geo_code' => $this->getGeoCode(),
            'language' => $this->getLanguage(),
            'lc_subject' => $this->getLcSubject(),
            'media_type' => $this->getMediaType(),
            'minprice' => $this->getMinprice(),
            'qty_avail' => $this->getQtyAvail(),
            'synopsis' => $this->getSynopsis(),
            'ttl' => $this->getTtl(),
            'imageurl' => $this->getImageurl(),
            'cover' => $this->getCover(),
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
     * @return the $basic
     */
    public function getBasic()
    {
        return $this->basic;
    }


    /**
     * @return the $geoCode
     */
    public function getGeoCode()
    {
        return $this->geoCode;
    }


    /**
     * @return the $language
     */
    public function getLanguage()
    {
        return $this->language;
    }


    /**
     * @return the $lcSubject
     */
    public function getLcSubject()
    {
        return $this->lcSubject;
    }


    /**
     * @return the $mediaType
     */
    public function getMediaType()
    {
        return $this->mediaType;
    }


    /**
     * @return the $minprice
     */
    public function getMinprice()
    {
        return $this->minprice;
    }


    /**
     * @return the $qtyAvail
     */
    public function getQtyAvail()
    {
        return $this->qtyAvail;
    }


    /**
     * @return the $synopsis
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }


    /**
     * @return the $ttl
     */
    public function getTtl()
    {
        return $this->ttl;
    }


    /**
     * @return the $imageurl
     */
    public function getImageurl()
    {
        return $this->imageurl;
    }


    /**
     * @return the $cover
     */
    public function getCover()
    {
        return $this->cover;
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
     * @param $basic the $basic to set
     */
    public function setBasic($basic)
    {
        $this->basic = $basic;
    }


    /**
     * @param $geoCode the $geoCode to set
     */
    public function setGeoCode($geoCode)
    {
        $this->geoCode = $geoCode;
    }


    /**
     * @param $language the $language to set
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }


    /**
     * @param $lcSubject the $lcSubject to set
     */
    public function setLcSubject($lcSubject)
    {
        $this->lcSubject = $lcSubject;
    }


    /**
     * @param $mediaType the $mediaType to set
     */
    public function setMediaType($mediaType)
    {
        $this->mediaType = $mediaType;
    }


    /**
     * @param $minprice the $minprice to set
     */
    public function setMinprice($minprice)
    {
        $this->minprice = $minprice;
    }


    /**
     * @param $qtyAvail the $qtyAvail to set
     */
    public function setQtyAvail($qtyAvail)
    {
        $this->qtyAvail = $qtyAvail;
    }


    /**
     * @param $synopsis the $synopsis to set
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;
    }


    /**
     * @param $ttl the $ttl to set
     */
    public function setTtl($ttl)
    {
        $this->ttl = $ttl;
    }


    /**
     * @param $imageurl the $imageurl to set
     */
    public function setImageurl($imageurl)
    {
        $this->imageurl = $imageurl;
    }


    /**
     * @param $cover the $cover to set
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
    }


    /**
     * @param $workId the $workId to set
     */
    public function setWorkId($workId)
    {
        $this->workId = $workId;
    }


}