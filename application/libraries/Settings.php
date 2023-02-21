<?php

use GuzzleHttp\Client;

class Settings
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
        // Environment
        $this->_client = new Client([
            'base_uri' => 'http://jtn.dnssec.icu/',
            'auth' => ['webmasterjtn', 'RedaksiIndonesia-2022']
        ]);
        // Real
        // $this->_client = new Client([
        //     'base_uri' => 'https://rest.jatimtimes.my.id/v1/',
        //     'auth' => ['webmasterjtn', 'RedaksiIndonesia-2022']
        // ]);
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
