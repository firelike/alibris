<?php



class AcctByte_Alibris_Service extends AcctByte_WebService_Abstract
{

    protected $baseApiUrl = 'http://api.alibris.com/v1/public/';


    public function __construct (AcctByte_WebService_Manager $manager)
    {
        $this->setManager($manager);
        $this->logger = $this->getManager()->getLogger();
    }


    public function search ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        $defaultArguments[ 'apikey' ] = $this->getManager()->getDeveloperKey();
        $defaultArguments[ 'qsort' ] = 'r';
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        try {
            $request = new AcctByte_Alibris_Request_Search($requestArguments);
            
            $this->logger->debug("Request Query String: " . $request->getQueryString());
            
            $url = $this->baseApiUrl . 'search';
            
            $httpResponse = $this->getManager()->apiCall($url, $request);
            $this->logger->debug("Response Body" . $httpResponse->getBody());
            $parsedResponse = $this->getManager()->parse($httpResponse->getBody());
            // $response =
        // $this->getManager()->simpleXMLElementToArray($parsedResponse);
        } catch (AcctByte_Alibris_Exception $e) {
            $error = new AcctByte_Alibris_Request_Error(500, $e->getMessage());
            return $error->toArray();
        }
        

        if ( isset($parsedResponse->Errors) ) {
            $errObject = new AcctByte_Alibris_Response_Error($parsedResponse->Errors->ErrorID, $parsedResponse->Errors->ErrorText);
            return $errObject->toArray();
        } else {
            $responseResult = new AcctByte_Alibris_Response_ResultSet_Search($parsedResponse);
            return $responseResult->toArray();
        }
    }


    public function itemSearch ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        $defaultArguments[ 'apikey' ] = $this->getManager()->getDeveloperKey();
        $defaultArguments[ 'qsort' ] = 'r';
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        try {
            $request = new AcctByte_Alibris_Request_ItemSearch($requestArguments);
            
            $this->logger->debug("Request Query String: " . $request->getQueryString());
            
            $url = $this->baseApiUrl . 'search';
            
            $httpResponse = $this->getManager()->apiCall($url, $request);
            $this->logger->debug("Response Body" . $httpResponse->getBody());
            $parsedResponse = $this->getManager()->parse($httpResponse->getBody());
            // $response =
        // $this->getManager()->simpleXMLElementToArray($parsedResponse);
        } catch (AcctByte_Alibris_Exception $e) {
            $error = new AcctByte_Alibris_Request_Error(500, $e->getMessage());
            return $error->toArray();
        }
        

        if ( isset($parsedResponse->Errors) ) {
            $errObject = new AcctByte_Alibris_Response_Error($parsedResponse->Errors->ErrorID, $parsedResponse->Errors->ErrorText);
            return $errObject->toArray();
        } else {
            $responseResult = new AcctByte_Alibris_Response_ResultSet_ItemSearch($parsedResponse);
            return $responseResult->toArray();
        }
    }


    public function recommend ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        $defaultArguments[ 'apikey' ] = $this->getManager()->getDeveloperKey();
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        try {
            $request = new AcctByte_Alibris_Request_Recommend($requestArguments);
            
            $this->logger->debug("Request Query String: " . $request->getQueryString());
            
            $url = $this->baseApiUrl . $request->getMethodName();
            
            $httpResponse = $this->getManager()->apiCall($url, $request);
            $this->logger->debug("Response Body" . $httpResponse->getBody());
            $parsedResponse = $this->getManager()->parse($httpResponse->getBody());
            // $response =
        // $this->getManager()->simpleXMLElementToArray($parsedResponse);
        } catch (AcctByte_Alibris_Exception $e) {
            $error = new AcctByte_Alibris_Request_Error(500, $e->getMessage());
            return $error->toArray();
        }
        
        if ( isset($parsedResponse->Errors) ) {
            $errObject = new AcctByte_Alibris_Response_Error($parsedResponse->Errors->ErrorID, $parsedResponse->Errors->ErrorText);
            return $errObject->toArray();
        } else {
            $responseResult = new AcctByte_Alibris_Response_ResultSet_Search($parsedResponse);
            return $responseResult->toArray();
        }
    }


    public function review ($inArguments)
    {
        $this->logger->debug("In " . __METHOD__);
        
        $defaultArguments = array();
        $defaultArguments[ 'apikey' ] = $this->getManager()->getDeveloperKey();
        
        $requestArguments = $this->_prepareArguments($inArguments, $defaultArguments);
        
        try {
            $request = new AcctByte_Alibris_Request_Review($requestArguments);
            
            $this->logger->debug("Request Query String: " . $request->getQueryString());
            
            $url = $this->baseApiUrl . $request->getMethodName();
            
            $httpResponse = $this->getManager()->apiCall($url, $request);
            $this->logger->debug("Response Body" . $httpResponse->getBody());
            $parsedResponse = $this->getManager()->parse($httpResponse->getBody());
            // $response =
        // $this->getManager()->simpleXMLElementToArray($parsedResponse);
        } catch (AcctByte_Alibris_Exception $e) {
            $error = new AcctByte_Alibris_Request_Error(500, $e->getMessage());
            return $error->toArray();
        }
        
        if ( isset($parsedResponse->Errors) ) {
            
            $errObject = new AcctByte_Alibris_Response_Error($parsedResponse->Errors->ErrorID, $parsedResponse->Errors->ErrorText);
            return $errObject->toArray();
        } else {
            $responseResult = new AcctByte_Alibris_Response_ResultSet_Review($parsedResponse);
            return $responseResult->toArray();
        }
    }
}