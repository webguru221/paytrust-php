<?php 
namespace PayTrust\Resources;

class Transaction
{  
    /**
     * @param array $params Array of transaction start.
     * @return \payTrust\Http\Response
     */
    function start($params)
    {
        $endpoint = "https://api.paytrust88.com/v1/transaction/start";

        $options['json'] = $params;

        return $this->client->request('post', $endpoint, $options);
    }
    
    /**
     * @param array $params Array of transaction start.
     * @return \payTrust\Http\Response
     */
    function all($params = [])
    {
        $endpoint = "https://api.paytrust88.com/v1/transaction/status";

        $queryString = build_query_string($params);

        return $this->client->request('get', $endpoint, [], $queryString);
    }  
}