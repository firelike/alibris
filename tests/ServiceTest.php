<?php


require_once 'AcctByte/Alibris/Service.php';



/**
 * AcctByte_Alibris_Service test case.
 */
class AcctByte_Alibris_ServiceTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var AcctByte_Alibris_Service
     */
    private $service;


    /**
     * Prepares the environment before running a test.
     */
    protected function setUp ()
    {
        parent::setUp();
        
        $apiKey = '';
        $logger = new Zend_Log();
        $manager = new AcctByte_WebService_Manager($logger);
        
        $this->service = new AcctByte_Alibris_Service($manager);
        
    }


    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown ()
    {
        $this->service = null;
        
        parent::tearDown();
    }


    /**
     * Constructs the test case.
     */
    public function __construct ()
    {
        // TODO Auto-generated constructor
    }


    /**
     * Tests AcctByte_Alibris_Service->__construct()
     */
    public function test__construct ()
    {
        $this->assertInstanceOf('AcctByte_Alibris_Service', $this->service);
    }

    
    /**
     * Tests AcctByte_Alibris_Service->search()
     */
    public function testSearch ()
    {
        // TODO Auto-generated AcctByte_Alibris_ServiceTest->testSearch()
        $this->markTestIncomplete("search test not implemented");
        
        $this->service->search(/* parameters */);
    }


    /**
     * Tests AcctByte_Alibris_Service->itemSearch()
     */
    public function testItemSearch ()
    {
        // TODO Auto-generated AcctByte_Alibris_ServiceTest->testItemSearch()
        $this->markTestIncomplete("itemSearch test not implemented");
        
        $this->service->itemSearch(/* parameters */);
    }


    /**
     * Tests AcctByte_Alibris_Service->recommend()
     */
    public function testRecommend ()
    {
        // TODO Auto-generated AcctByte_Alibris_ServiceTest->testRecommend()
        $this->markTestIncomplete("recommend test not implemented");
        
        $this->service->recommend(/* parameters */);
    }


    /**
     * Tests AcctByte_Alibris_Service->review()
     */
    public function testReview ()
    {
        // TODO Auto-generated AcctByte_Alibris_ServiceTest->testReview()
        $this->markTestIncomplete("review test not implemented");
        
        $this->service->review(/* parameters */);
    }
}

