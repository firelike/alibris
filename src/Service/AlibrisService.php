<?php
namespace Firelike\Alibris\Service;

use Firelike\Alibris\Request\ItemSearch;
use Firelike\Alibris\Request\Recommend;
use Firelike\Alibris\Request\Review;
use Firelike\Alibris\Request\Search;
use Firelike\Alibris\Response\Error;
use Firelike\Alibris\Response\ResultSet\ItemSearch as ItemSearchResultSet;
use Firelike\Alibris\Response\ResultSet\Search as SearchResultSet;
use Firelike\Alibris\Response\ResultSet\Review as ReviewResultSet;

use GuzzleHttp\Client;


class AlibrisService
{

    protected $baseApiUrl = 'http://api.alibris.com/v1/public/';


    public function search($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);

        $defaultArguments = array();
        $defaultArguments['apikey'] = $this->getManager()->getDeveloperKey();
        $defaultArguments['qsort'] = 'r';

        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);

        $request = new Search($requestArguments);

        $this->logger->debug("Request Query String: " . $request->getQueryString());

        $url = $this->baseApiUrl . 'search';

        $httpResponse = $this->getManager()->apiCall($url, $request);
        $this->logger->debug("Response Body" . $httpResponse->getBody());
        $parsedResponse = $this->getManager()->parse($httpResponse->getBody());
        // $response =
        // $this->getManager()->simpleXMLElementToArray($parsedResponse);

        if (isset($parsedResponse->Errors)) {
            $errObject = new Error($parsedResponse->Errors->ErrorID, $parsedResponse->Errors->ErrorText);
            return $errObject->toArray();
        } else {
            $responseResult = new SearchResultSet($parsedResponse);
            return $responseResult->toArray();
        }
    }


    public function itemSearch($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);

        $defaultArguments = array();
        $defaultArguments['apikey'] = $this->getManager()->getDeveloperKey();
        $defaultArguments['qsort'] = 'r';

        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);

        $request = new ItemSearch($requestArguments);

        $this->logger->debug("Request Query String: " . $request->getQueryString());

        $url = $this->baseApiUrl . 'search';

        $httpResponse = $this->getManager()->apiCall($url, $request);
        $this->logger->debug("Response Body" . $httpResponse->getBody());
        $parsedResponse = $this->getManager()->parse($httpResponse->getBody());
        // $response =
        // $this->getManager()->simpleXMLElementToArray($parsedResponse);


        if (isset($parsedResponse->Errors)) {
            $errObject = new Error($parsedResponse->Errors->ErrorID, $parsedResponse->Errors->ErrorText);
            return $errObject->toArray();
        } else {
            $responseResult = new ItemSearchResultSet($parsedResponse);
            return $responseResult->toArray();
        }
    }


    public function recommend($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);

        $defaultArguments = array();
        $defaultArguments['apikey'] = $this->getManager()->getDeveloperKey();

        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);

        $request = new Recommend($requestArguments);

        $this->logger->debug("Request Query String: " . $request->getQueryString());

        $url = $this->baseApiUrl . $request->getMethodName();

        $httpResponse = $this->getManager()->apiCall($url, $request);
        $this->logger->debug("Response Body" . $httpResponse->getBody());
        $parsedResponse = $this->getManager()->parse($httpResponse->getBody());
        // $response =
        // $this->getManager()->simpleXMLElementToArray($parsedResponse);

        if (isset($parsedResponse->Errors)) {
            $errObject = new Error($parsedResponse->Errors->ErrorID, $parsedResponse->Errors->ErrorText);
            return $errObject->toArray();
        } else {
            $responseResult = new SearchResultSet($parsedResponse);
            return $responseResult->toArray();
        }
    }


    public function review($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);

        $defaultArguments = array();
        $defaultArguments['apikey'] = $this->getManager()->getDeveloperKey();

        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);

        $request = new Review($requestArguments);

        $this->logger->debug("Request Query String: " . $request->getQueryString());

        $url = $this->baseApiUrl . $request->getMethodName();

        $httpResponse = $this->getManager()->apiCall($url, $request);
        $this->logger->debug("Response Body" . $httpResponse->getBody());
        $parsedResponse = $this->getManager()->parse($httpResponse->getBody());
        // $response =
        // $this->getManager()->simpleXMLElementToArray($parsedResponse);

        if (isset($parsedResponse->Errors)) {

            $errObject = new Error($parsedResponse->Errors->ErrorID, $parsedResponse->Errors->ErrorText);
            return $errObject->toArray();
        } else {
            $responseResult = new ReviewResultSet($parsedResponse);
            return $responseResult->toArray();
        }
    }
}