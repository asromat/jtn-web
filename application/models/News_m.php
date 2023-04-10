<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;


class News_m extends CI_Model
{

    public function __construct()
    {
        // Data Konfigurasi API
        $data = include(FCPATH . 'tenants/config/apikey.php');

        // Real
        if ($this->uri->segment("1") == "baca" and $this->uri->segment("2") < 100000) {
            $this->_client = new Client([
            'base_uri' => 'https://mlgapi.jtnweb.my.id',
            'auth' => [$data['username'], $data['password']]
            ]);
        } else {
            $this->_client = new Client([
            // 'base_uri' => 'http://api.jtnweb.my.id',
            // 'base_uri' => 'http://fix-jtnapi.me',
            // 'base_uri' => 'http://jtn.dnssec.icu',
            'base_uri' => 'http://api.fitrah.sch.id/jtn/',
            'auth' => [$data['username'], $data['password']]
            ]);
        }
    }
    
    public function getAll($location= null,$limit = null,$start = null)
    {
        $res = $this->_client->request('GET', 'news/location', [
            'query' => [
                'location' => $location,
                'start' => $start,
                'limit' => $limit,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    public function getFokus($limit = null,$start = null)
    {
        $res = $this->_client->request('GET', 'news/fokus', [
            'query' => [
                'start' => $start,
                'limit' => $limit,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    public function getDaerah($location = null, $limit = null,$start = null)
    {
        $res = $this->_client->request('GET', 'news/location', [
            'query' => [
                'location' => $location,
                'start' => $start,
                'limit' => $limit,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    public function getHeadline($start = null, $limit = null)
    {
        $res = $this->_client->request('GET', 'news/headline', [
            'query' => [
                'start' => $start,
                'limit' => $limit,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    public function getCategory($category,$limit = null,$start = null)
    {
        $res = $this->_client->request('GET', 'news/category/'.$category, [
            'query' => [
                'start' => $start,
                'limit' => $limit,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    public function getSameCategory($cat_id,$limit = null,$start = null)
    {
        $res = $this->_client->request('GET', 'news/sameCategory/', [
            'query' => [
                'cat_id' => $cat_id,
                'start' => $start,
                'limit' => $limit,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    public function getCategoryData($query,$value)
    {
        $res = $this->_client->request('GET', 'news/optCategoryData/', [
            'query' => [
                'query' => $query,
                'value' => $value,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    public function getDetail($id)
    {
        $res = $this->_client->request('GET', 'news/detail/', [
            'query' => [
                'id' => $id,
            ]
        ]);
        
        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    public function getSimilar($keyword,$cat_id)
    {
        $res = $this->_client->request('GET', 'news/similar/', [
            'query' => [
                'keyword' => $keyword,
                'category' => $cat_id
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    public function getTag($keyword,$limit = null,$start = null)
    {
        $res = $this->_client->request('GET', 'news/tag/', [
            'query' => [
                'keyword' => $keyword,
                'limit' => $limit,
                'start' => $start
                ]
            ]);
            
            $response = json_decode($res->getBody()->getContents(), true);
            return $response;
        }
    }
    