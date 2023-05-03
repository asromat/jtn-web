<?php

use GuzzleHttp\Client;

class Settings
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
        // Data Konfigurasi API
        $data = include(FCPATH . 'tenants/config/apikey.php');
        // Real
        $this->_client = new Client([
            // 'base_uri' => 'http://jtn.dnssec.icu',
            // 'base_uri' => 'http://fix-jtnapi.me',
            // 'base_uri' => 'http://api.jtnweb.my.id',
            // 'base_uri' => 'http://api.fitrah.sch.id/jtn/',
            // 'base_uri' => 'http://testingapi.jtn.my.id',
            'base_uri' => 'http://api.jtn.my.id/v1/',
            'auth' => [$data['username'], $data['password']]
        ]);
    }

    function dataDaerah($domain = null)
    {
        $res = $this->_client->request('GET', 'daerah/domain', [
            'query' => [
                'domain' => $domain,
            ]
        ]);
        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    
}
