<?php
namespace Firelike\Alibris\Service;

use Firelike\Alibris\Request\ItemSearch;
use Firelike\Alibris\Request\Search;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;


class AlibrisService
{

    /**
     * @var string
     */
    protected $serviceUrl;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @param array $options
     * @return array
     */
    public function search($options = [])
    {
        $defaultParams = [
            'apikey' => $this->getApiKey(),
            'qsort' => 'r'
        ];
        $parameters = array_merge($defaultParams, $options);

        $request = new Search($parameters);

        $httpResponse = $this->apiCall('/search', $request->toArray());

        $xmlRecordTag = 'search';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    /**
     * @param array $options
     * @return array
     */
    public function itemSearch($options = [])
    {
        $defaultParams = [
            'apikey' => $this->getApiKey(),
            'qsort' => 'r'
        ];
        $parameters = array_merge($defaultParams, $options);

        $request = new ItemSearch($parameters);

        $httpResponse = $this->apiCall('/item-search', $request->toArray());

        $xmlRecordTag = 'search';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    /**
     * @param array $options
     * @return array
     * @throws \Exception
     */
    public function recommend($options = [])
    {
        $defaultParams = [
            'apikey' => $this->getApiKey()
        ];
        $parameters = array_merge($defaultParams, $options);

        if (empty($parameters['work'])) {
            throw new \Exception('Required parameter work is missing');
        }

        $httpResponse = $this->apiCall('/recommend', $parameters);

        $xmlRecordTag = 'recommend';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    /**
     * @param array $options
     * @return array
     * @throws \Exception
     */
    public function review($options = [])
    {
        $defaultParams = [
            'apikey' => $this->getApiKey()
        ];
        $parameters = array_merge($defaultParams, $options);

        if (empty($parameters['work'])) {
            throw new \Exception('Required parameter work is missing');
        }

        $httpResponse = $this->apiCall('/review', $parameters);

        $xmlRecordTag = 'review';
        return $this->responseToRecords($httpResponse, $xmlRecordTag);
    }


    /**
     * @param string $path
     * @param string $query
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @throws \Exception
     */
    public function apiCall($path, $query)
    {
        try {
            $client = new Client([
                'base_uri' => $this->getServiceUrl()
            ]);
            return $client->request('GET', $path, array(
                    'query' => $query
                )
            );
        } catch (RequestException $zhce) {
            $message = 'Error in request to Web service: ' . $zhce->getMessage();
            throw new \Exception($message, $zhce->getCode());
        } catch (ClientException $zhce) {
            $message = 'Error in request to Web service: ' . $zhce->getMessage();
            throw new \Exception($message, $zhce->getCode());
        }
    }

    /**
     * @param Response $httpResponse
     * @param string $xmlRecordTag
     * @return array
     */
    protected function responseToRecords(Response $httpResponse, $xmlRecordTag)
    {
        // parse response body
        $xml = simplexml_load_string($httpResponse->getBody()->getContents());
        $records = array();
        if ($xml instanceof \SimpleXMLElement) {
            // convert xml to an array
            $arr = @json_decode(@json_encode($xml), true);
            if (isset($arr[$xmlRecordTag])) {
                $records = $arr[$xmlRecordTag];
            }
            // normalize the result array if we have a single result
            if (is_array($records) && !array_key_exists(0, $records)) {
                $records = array(
                    $records
                );
            }
        }
        return $records;
    }

    /**
     * @return string
     */
    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }

    /**
     * @param string $serviceUrl
     */
    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }


}