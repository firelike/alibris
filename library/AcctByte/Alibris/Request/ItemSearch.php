<?php



class AcctByte_Alibris_Request_ItemSearch extends AcctByte_Alibris_Request_Abstract
{
    
    
    // BASIC
    /**
     * Use artist name for music Use actor or director name for movies
     *
     * @var string
     */
    protected $qauth;

    /**
     *
     * @var string
     */
    protected $qtit;

    /**
     * Use genre for music and movies
     *
     * @var string
     */
    protected $qtopic;

    /**
     * Represents an author/Title combination.
     * Returned from an item or works search.
     *
     * @var string
     */
    protected $qwork;

    /**
     *
     * @var string
     */
    protected $query;

    /**
     * Publisher
     *
     * @var string
     */
    protected $qpub;

    /**
     * Use UPC for music or movies
     *
     * @var string
     */
    protected $qisbn;

    /**
     * Comma separated list if isbns or UPCs.
     *
     * Results are returned for all isbns in the list.
     * Use this to search for multiple ISBNs in the same call.
     *
     * @var string
     */
    protected $qisbnlist;

    /**
     * Condition Lower bound [1-6]
     *
     * @var integer
     */
    protected $qcond;

    /**
     * Condition Upper bound [1-6]
     *
     * @var integer
     */
    protected $qcondhi;

    /**
     * Rating Lower bound [1-5]
     *
     * @var integer
     */
    protected $qrating;

    /**
     * Library of Congress Classification
     *
     * @var string
     */
    protected $qlccl;
    

    // LIMITING
    /**
     * Alibris Inventory ID
     *
     * @var string
     */
    protected $Invid;

    /**
     * Alibris Seller ID
     *
     * @var string
     */
    protected $quserid;

    protected $binding;

    /**
     * 1 or blank
     */
    protected $signed;

    /**
     * 1 or blank
     */
    protected $first;

    /**
     * 1 or blank
     */
    protected $dj;

    /**
     *
     * @var string
     */
    protected $language;

    /**
     * lower bound, currency in USD, do not include dollar sign
     *
     * @var float
     */
    protected $qprice;

    /**
     * upper bound, currency in USD, do not include dollar sign
     *
     * @var float
     */
    protected $qpricehi;

    /**
     * lower bound
     *
     * @var integer
     */
    protected $qyear;

    /**
     * upper bound
     *
     * @var integer
     */
    protected $qyearhi;

    protected $qyearonly;

    /**
     * "1 day" or "7 days" or "14 days"
     *
     * @var string
     */
    protected $qdays;
    
    // ADDITIONAL
    protected $mtype;

    protected $chunk;

    protected $skip;

    protected $qsort;


    public function __construct ($inRequestArguments)
    {
        if ( isset($inRequestArguments[ 'qauth' ]) ) {
            $this->setQauth($inRequestArguments[ 'qauth' ]);
        }
        
        if ( isset($inRequestArguments[ 'qtit' ]) ) {
            $this->setQtit($inRequestArguments[ 'qtit' ]);
        }
        
        if ( isset($inRequestArguments[ 'qtopic' ]) ) {
            $this->setQtopic($inRequestArguments[ 'qtopic' ]);
        }
        
        if ( isset($inRequestArguments[ 'qwork' ]) ) {
            $this->setQwork($inRequestArguments[ 'qwork' ]);
        }
        
        if ( isset($inRequestArguments[ 'query' ]) ) {
            $this->setQuery($inRequestArguments[ 'query' ]);
        }
        
        if ( isset($inRequestArguments[ 'qpub' ]) ) {
            $this->setQpub($inRequestArguments[ 'qpub' ]);
        }
        
        if ( isset($inRequestArguments[ 'qisbn' ]) ) {
            $this->setQisbn($inRequestArguments[ 'qisbn' ]);
        }
        
        if ( isset($inRequestArguments[ 'qisbnlist' ]) ) {
            $this->setQisbnlist($inRequestArguments[ 'qisbnlist' ]);
        }
        
        if ( isset($inRequestArguments[ 'qcond' ]) ) {
            $this->setQcond($inRequestArguments[ 'qcond' ]);
        }
        
        if ( isset($inRequestArguments[ 'qcondhi' ]) ) {
            $this->setQcondhi($inRequestArguments[ 'qcondhi' ]);
        }
        

        if ( isset($inRequestArguments[ 'qrating' ]) ) {
            $this->setQrating($inRequestArguments[ 'qrating' ]);
        }
        
        if ( isset($inRequestArguments[ 'qlccl' ]) ) {
            $this->setQlccl($inRequestArguments[ 'qlccl' ]);
        }
        
        if ( isset($inRequestArguments[ 'Invid' ]) ) {
            $this->setInvid($inRequestArguments[ 'Invid' ]);
        }
        
        if ( isset($inRequestArguments[ 'quserid' ]) ) {
            $this->setQuserid($inRequestArguments[ 'quserid' ]);
        }
        
        if ( isset($inRequestArguments[ 'binding' ]) ) {
            $this->setBinding($inRequestArguments[ 'binding' ]);
        }
        
        if ( isset($inRequestArguments[ 'signet' ]) ) {
            $this->setSigned($inRequestArguments[ 'signet' ]);
        }
        
        if ( isset($inRequestArguments[ 'first' ]) ) {
            $this->setFirst($inRequestArguments[ 'first' ]);
        }
        
        if ( isset($inRequestArguments[ 'dj' ]) ) {
            $this->setDj($inRequestArguments[ 'dj' ]);
        }
        
        if ( isset($inRequestArguments[ 'language' ]) ) {
            $this->setLanguage($inRequestArguments[ 'language' ]);
        }
        
        if ( isset($inRequestArguments[ 'qprice' ]) ) {
            $this->setQprice($inRequestArguments[ 'qprice' ]);
        }
        
        if ( isset($inRequestArguments[ 'qpricehi' ]) ) {
            $this->setQpricehi($inRequestArguments[ 'qpricehi' ]);
        }
        
        if ( isset($inRequestArguments[ 'qyear' ]) ) {
            $this->setQyear($inRequestArguments[ 'qyear' ]);
        }
        
        if ( isset($inRequestArguments[ 'qyearhi' ]) ) {
            $this->setQyearhi($inRequestArguments[ 'qyearhi' ]);
        }
        
        if ( isset($inRequestArguments[ 'qyearonly' ]) ) {
            $this->setQyearonly($inRequestArguments[ 'qyearonly' ]);
        }
        
        if ( isset($inRequestArguments[ 'qdays' ]) ) {
            $this->setQcondhi($inRequestArguments[ 'qdays' ]);
        }
        

        $this->setApikey($inRequestArguments[ 'apikey' ]);
        $this->setQsort($inRequestArguments[ 'qsort' ]);
        
        if ( isset($inRequestArguments[ 'mtype' ]) ) {
            $this->setMtype($inRequestArguments[ 'mtype' ]);
        }
        
        if ( isset($inRequestArguments[ 'chunk' ]) ) {
            $this->setChunk($inRequestArguments[ 'chunk' ]);
        }
        
        if ( isset($inRequestArguments[ 'skip' ]) ) {
            $this->setSkip($inRequestArguments[ 'skip' ]);
        }
    }


    /**
     *
     * @return the $command
     */
    public function getMethodName ()
    {
        return 'item-search';
    }


    public function toArray ()
    {
        $args[ 'qauth' ] = $this->getQauth();
        $args[ 'qtit' ] = $this->getQtit();
        $args[ 'qtopic' ] = $this->getQtopic();
        $args[ 'qwork' ] = $this->getQwork();
        $args[ 'query' ] = $this->getQuery();
        $args[ 'qpub' ] = $this->getQpub();
        $args[ 'qisbn' ] = $this->getQisbn();
        $args[ 'qisbnlist' ] = $this->getQisbnlist();
        $args[ 'qcond' ] = $this->getQcond();
        $args[ 'qcondhi' ] = $this->getQcondhi();
        $args[ 'qrating' ] = $this->getQrating();
        $args[ 'qlccl' ] = $this->getQlccl();
        $args[ 'Invid' ] = $this->getInvid();
        $args[ 'quserid' ] = $this->getQuserid();
        $args[ 'binding' ] = $this->getBinding();
        $args[ 'signed' ] = $this->getSigned();
        $args[ 'first' ] = $this->getFirst();
        $args[ 'dj' ] = $this->getDj();
        $args[ 'language' ] = $this->getLanguage();
        $args[ 'qprice' ] = $this->getQprice();
        $args[ 'qpricehi' ] = $this->getQpricehi();
        $args[ 'qyear' ] = $this->getQyear();
        $args[ 'qyearhi' ] = $this->getQyearhi();
        $args[ 'qyearonly' ] = $this->getQyearonly();
        $args[ 'qdays' ] = $this->getQdays();
        $args[ 'mtype' ] = $this->getMtype();
        $args[ 'chunk' ] = $this->getChunk();
        $args[ 'skip' ] = $this->getSkip();
        $args[ 'qsort' ] = $this->getQsort();
        $args[ 'apikey' ] = $this->getApikey();
        
        return array_merge(parent::toArray(), array_filter($args));
    }


    /**
     *
     * @return the $mtype
     */
    public function getMtype ()
    {
        return $this->mtype;
    }


    /**
     *
     * @return the $chunk
     */
    public function getChunk ()
    {
        return $this->chunk;
    }


    /**
     *
     * @return the $skip
     */
    public function getSkip ()
    {
        return $this->skip;
    }


    /**
     *
     * @return the $qsort
     */
    public function getQsort ()
    {
        return $this->qsort;
    }


    /**
     *
     * @return the $apikey
     */
    public function getApikey ()
    {
        return $this->apikey;
    }


    /**
     *
     * @param $mtype the
     *            $mtype to set
     */
    public function setMtype ($mtype)
    {
        // B - books, M - music, V - movies
        $mediaTypes = array( 
            'B' , 
            'M' , 
            'V' 
        );
        
        if ( ! in_array($mtype, $mediaTypes) ) {
            throw new AcctByte_Alibris_Exception('Invalid Media Type Supplied', 500);
        }
        $this->mtype = $mtype;
    }


    /**
     *
     * @param $chunk the
     *            $chunk to set
     */
    public function setChunk ($chunk)
    {
        $this->chunk = $chunk;
    }


    /**
     *
     * @param $skip the
     *            $skip to set
     */
    public function setSkip ($skip)
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
    public function setQsort ($qsort)
    {
        $sortOptions = array( 
            'r' , 
            't' , 
            'a' , 
            'p' , 
            'd' 
        );
        
        if ( ! in_array($qsort, $sortOptions) ) {
            throw new AcctByte_Alibris_Exception('Invalid Sort Option Supplied', 500);
        }
        $this->qsort = $qsort;
    }


    /**
     *
     * @param $apikey the
     *            $apikey to set
     */
    public function setApikey ($apikey)
    {
        $this->apikey = $apikey;
    }


    /**
     *
     * @return the $qauth
     */
    public function getQauth ()
    {
        return $this->qauth;
    }


    /**
     *
     * @return the $qtit
     */
    public function getQtit ()
    {
        return $this->qtit;
    }


    /**
     *
     * @return the $qtopic
     */
    public function getQtopic ()
    {
        return $this->qtopic;
    }


    /**
     *
     * @return the $qwork
     */
    public function getQwork ()
    {
        return $this->qwork;
    }


    /**
     *
     * @return the $query
     */
    public function getQuery ()
    {
        return $this->query;
    }


    /**
     *
     * @return the $qpub
     */
    public function getQpub ()
    {
        return $this->qpub;
    }


    /**
     *
     * @return the $qisbn
     */
    public function getQisbn ()
    {
        return $this->qisbn;
    }


    /**
     *
     * @return the $qisbnlist
     */
    public function getQisbnlist ()
    {
        return $this->qisbnlist;
    }


    /**
     *
     * @return the $qcond
     */
    public function getQcond ()
    {
        return $this->qcond;
    }


    /**
     *
     * @return the $qcondhi
     */
    public function getQcondhi ()
    {
        return $this->qcondhi;
    }


    /**
     *
     * @return the $qrating
     */
    public function getQrating ()
    {
        return $this->qrating;
    }


    /**
     *
     * @return the $qlccl
     */
    public function getQlccl ()
    {
        return $this->qlccl;
    }


    /**
     *
     * @return the $Invid
     */
    public function getInvid ()
    {
        return $this->Invid;
    }


    /**
     *
     * @return the $quserid
     */
    public function getQuserid ()
    {
        return $this->quserid;
    }


    /**
     *
     * @return the $binding
     */
    public function getBinding ()
    {
        return $this->binding;
    }


    /**
     *
     * @return the $signed
     */
    public function getSigned ()
    {
        return $this->signed;
    }


    /**
     *
     * @return the $first
     */
    public function getFirst ()
    {
        return $this->first;
    }


    /**
     *
     * @return the $dj
     */
    public function getDj ()
    {
        return $this->dj;
    }


    /**
     *
     * @return the $language
     */
    public function getLanguage ()
    {
        return $this->language;
    }


    /**
     *
     * @return the $qprice
     */
    public function getQprice ()
    {
        return $this->qprice;
    }


    /**
     *
     * @return the $qpricehi
     */
    public function getQpricehi ()
    {
        return $this->qpricehi;
    }


    /**
     *
     * @return the $qyear
     */
    public function getQyear ()
    {
        return $this->qyear;
    }


    /**
     *
     * @return the $qyearhi
     */
    public function getQyearhi ()
    {
        return $this->qyearhi;
    }


    /**
     *
     * @return the $qyearonly
     */
    public function getQyearonly ()
    {
        return $this->qyearonly;
    }


    /**
     *
     * @return the $qdays
     */
    public function getQdays ()
    {
        return $this->qdays;
    }


    /**
     *
     * @param $qauth the
     *            $qauth to set
     */
    public function setQauth ($qauth)
    {
        $this->qauth = $qauth;
    }


    /**
     *
     * @param $qtit the
     *            $qtit to set
     */
    public function setQtit ($qtit)
    {
        $this->qtit = $qtit;
    }


    /**
     *
     * @param $qtopic the
     *            $qtopic to set
     */
    public function setQtopic ($qtopic)
    {
        $this->qtopic = $qtopic;
    }


    /**
     *
     * @param $qwork the
     *            $qwork to set
     */
    public function setQwork ($qwork)
    {
        $this->qwork = $qwork;
    }


    /**
     *
     * @param $query the
     *            $query to set
     */
    public function setQuery ($query)
    {
        $this->query = $query;
    }


    /**
     *
     * @param $qpub the
     *            $qpub to set
     */
    public function setQpub ($qpub)
    {
        $this->qpub = $qpub;
    }


    /**
     *
     * @param $qisbn the
     *            $qisbn to set
     */
    public function setQisbn ($qisbn)
    {
        $this->qisbn = $qisbn;
    }


    /**
     *
     * @param $qisbnlist the
     *            $qisbnlist to set
     */
    public function setQisbnlist ($qisbnlist)
    {
        $this->qisbnlist = $qisbnlist;
    }


    /**
     *
     * @param $qcond the
     *            $qcond to set
     */
    public function setQcond ($qcond)
    {
        $this->qcond = $qcond;
    }


    /**
     *
     * @param $qcondhi the
     *            $qcondhi to set
     */
    public function setQcondhi ($qcondhi)
    {
        $this->qcondhi = $qcondhi;
    }


    /**
     *
     * @param $qrating the
     *            $qrating to set
     */
    public function setQrating ($qrating)
    {
        $this->qrating = $qrating;
    }


    /**
     *
     * @param $qlccl the
     *            $qlccl to set
     */
    public function setQlccl ($qlccl)
    {
        $this->qlccl = $qlccl;
    }


    /**
     *
     * @param $Invid the
     *            $Invid to set
     */
    public function setInvid ($Invid)
    {
        $this->Invid = $Invid;
    }


    /**
     *
     * @param $quserid the
     *            $quserid to set
     */
    public function setQuserid ($quserid)
    {
        $this->quserid = $quserid;
    }


    /**
     *
     * @param $binding the
     *            $binding to set
     */
    public function setBinding ($binding)
    {
        $this->binding = $binding;
    }


    /**
     *
     * @param $signed the
     *            $signed to set
     */
    public function setSigned ($signed)
    {
        $this->signed = $signed;
    }


    /**
     *
     * @param $first the
     *            $first to set
     */
    public function setFirst ($first)
    {
        $this->first = $first;
    }


    /**
     *
     * @param $dj the
     *            $dj to set
     */
    public function setDj ($dj)
    {
        $this->dj = $dj;
    }


    /**
     *
     * @param $language the
     *            $language to set
     */
    public function setLanguage ($language)
    {
        $this->language = $language;
    }


    /**
     *
     * @param $qprice the
     *            $qprice to set
     */
    public function setQprice ($qprice)
    {
        $this->qprice = $qprice;
    }


    /**
     *
     * @param $qpricehi the
     *            $qpricehi to set
     */
    public function setQpricehi ($qpricehi)
    {
        $this->qpricehi = $qpricehi;
    }


    /**
     *
     * @param $qyear the
     *            $qyear to set
     */
    public function setQyear ($qyear)
    {
        $this->qyear = $qyear;
    }


    /**
     *
     * @param $qyearhi the
     *            $qyearhi to set
     */
    public function setQyearhi ($qyearhi)
    {
        $this->qyearhi = $qyearhi;
    }


    /**
     *
     * @param $qyearonly the
     *            $qyearonly to set
     */
    public function setQyearonly ($qyearonly)
    {
        $this->qyearonly = $qyearonly;
    }


    /**
     *
     * @param $qdays the
     *            $qdays to set
     */
    public function setQdays ($qdays)
    {
        $this->qdays = $qdays;
    }
}
