<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;


class Infografis_m extends CI_Model
{

    public function __construct()
    {
        // Environment
        // $this->_client = new Client([
        //     'base_uri' => 'http://fix-mlgapi.me/',
        //     'auth' => ['webmasterjtn', 'RedaksiIndonesia-2022']
        // ]);
        // Real
        $this->_client = new Client([
            'base_uri' => 'https://mlgapi.jtnweb.my.id',
            'auth' => ['webmasterjtn', 'RedaksiIndonesia-2022']
        ]);
    }

    public function getAll($location = null, $limit = null, $start = null)
    {
        $res = $this->_client->request('GET', 'infografis/all', [
            'query' => [
                'location' => $location,
                'start' => $start,
                'limit' => $limit,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }
}
