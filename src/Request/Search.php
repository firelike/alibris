<?php
namespace Firelike\Alibris\Request;


class Search extends AbstractRequest
{


    protected $wauth;

    protected $wtit;

    protected $wtopic;

    protected $wquery;

    protected $mtype;

    protected $chunk;

    protected $skip;

    protected $qsort;


    public function __construct($inRequestArguments)
    {
        parent::__construct($inRequestArguments);

        $this->setQsort($inRequestArguments['qsort']);

        if (isset($inRequestArguments['wauth'])) {
            $this->setWauth($inRequestArguments['wauth']);
        }

        if (isset($inRequestArguments['wtit'])) {
            $this->setWtit($inRequestArguments['wtit']);
        }

        if (isset($inRequestArguments['wtopic'])) {
            $this->setWtopic($inRequestArguments['wtopic']);
        }

        if (isset($inRequestArguments['wquery'])) {
            $this->setWquery($inRequestArguments['wquery']);
        }

        if (isset($inRequestArguments['mtype'])) {
            $this->setMtype($inRequestArguments['mtype']);
        }

        if (isset($inRequestArguments['chunk'])) {
            $this->setChunk($inRequestArguments['chunk']);
        }

        if (isset($inRequestArguments['skip'])) {
            $this->setSkip($inRequestArguments['skip']);
        }
    }


    public function getMethodName()
    {
        return 'search';
    }


    public function toArray()
    {
        $args['wauth'] = $this->getWauth();
        $args['wtit'] = $this->getWtit();
        $args['wtopic'] = $this->getWtopic();
        $args['wquery'] = $this->getWquery();
        $args['mtype'] = $this->getMtype();
        $args['chunk'] = $this->getChunk();
        $args['skip'] = $this->getSkip();
        $args['qsort'] = $this->getQsort();

        return array_merge(parent::toArray(), array_filter($args));
    }


    /**
     *
     * @return the $wauth
     */
    public function getWauth()
    {
        return $this->wauth;
    }


    /**
     *
     * @return the $wtit
     */
    public function getWtit()
    {
        return $this->wtit;
    }


    /**
     *
     * @return the $wtopic
     */
    public function getWtopic()
    {
        return $this->wtopic;
    }


    /**
     *
     * @return the $wquery
     */
    public function getWquery()
    {
        return $this->wquery;
    }


    /**
     *
     * @return the $mtype
     */
    public function getMtype()
    {
        return $this->mtype;
    }


    /**
     *
     * @return the $chunk
     */
    public function getChunk()
    {
        return $this->chunk;
    }


    /**
     *
     * @return the $skip
     */
    public function getSkip()
    {
        return $this->skip;
    }


    /**
     *
     * @return the $qsort
     */
    public function getQsort()
    {
        return $this->qsort;
    }


    /**
     *
     * @param $wauth the
     *            $wauth to set
     */
    public function setWauth($wauth)
    {
        $this->wauth = $wauth;
    }


    /**
     *
     * @param $wtit the
     *            $wtit to set
     */
    public function setWtit($wtit)
    {
        $this->wtit = $wtit;
    }


    /**
     *
     * @param $wtopic the
     *            $wtopic to set
     */
    public function setWtopic($wtopic)
    {
        $this->wtopic = $wtopic;
    }


    /**
     *
     * @param $wquery the
     *            $wquery to set
     */
    public function setWquery($wquery)
    {
        $this->wquery = $wquery;
    }


    /**
     *
     * @param $mtype the
     *            $mtype to set
     */
    public function setMtype($mtype)
    {
        // B - books, M - music, V - movies
        $mediaTypes = array(
            'B',
            'M',
            'V'
        );

        if (!in_array($mtype, $mediaTypes)) {
            throw new \Exception('Invalid Media Type Supplied', 500);
        }
        $this->mtype = $mtype;
    }


    /**
     *
     * @param $chunk the
     *            $chunk to set
     */
    public function setChunk($chunk)
    {
        $this->chunk = $chunk;
    }


    /**
     *
     * @param $skip the
     *            $skip to set
     */
    public function setSkip($skip)
    {
        $this->skip = $skip;
    }


    /**
     *
     * @param $qsort the
     *            $qsort to set
     *            If not specified, results will default to qsort=r
     *            r = rating/price (books searches only)
     *            t = title, tr = title reverse
     *            a =author, ar = author reverse
     *            p = price, pr = price reverse
     *            d = date (year), dr = date reverse
     */
    public function setQsort($qsort)
    {
        $sortOptions = array(
            'r',
            't',
            'a',
            'p',
            'd'
        );

        if (!in_array($qsort, $sortOptions)) {
            throw new \Exception('Invalid Sort Option Supplied', 500);
        }
        $this->qsort = $qsort;
    }
}
