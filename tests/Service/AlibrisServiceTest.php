<?php
namespace Firelike\AlibrisTest\Service;
use Firelike\Alibris\Service\AlibrisService;


/**
 * AlibrisService test case.
 */
class AlibrisServiceTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var AlibrisService
     */
    private $service;


    /**
     * Prepares the environment before running a test.
     */
    protected function setUp ()
    {
        parent::setUp();
        $this->service = new AlibrisService();
        
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
     * Tests AlibrisService->search()
     */
    public function testSearch ()
    {
        $this->markTestIncomplete("search test not implemented");
        
        $this->service->search(/* parameters */);
    }


    /**
     * Tests AlibrisService->itemSearch()
     */
    public function testItemSearch ()
    {
        $this->markTestIncomplete("itemSearch test not implemented");
        
        $this->service->itemSearch(/* parameters */);
    }


    /**
     * Tests AlibrisService->recommend()
     */
    public function testRecommend ()
    {
        $this->markTestIncomplete("recommend test not implemented");
        
        $this->service->recommend(/* parameters */);
    }


    /**
     * Tests AlibrisService->review()
     */
    public function testReview ()
    {
        $this->markTestIncomplete("review test not implemented");
        
        $this->service->review(/* parameters */);
    }
}

