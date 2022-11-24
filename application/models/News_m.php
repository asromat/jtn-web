<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;


class News_m extends CI_Model
{

    public function __construct()
    {
        // Environment
        // $this->_client = new Client([
        //     'base_uri' => 'http://fix-jtnapi.test/',
        //     'auth' => ['webmasterjtn', 'RedaksiIndonesia-2022']
        // ]);
        // Real
        $this->_client = new Client([
            'base_uri' => 'https://api.jtnweb.my.id',
            'auth' => ['webmasterjtn', 'RedaksiIndonesia-2022']
        ]);
    }
    
    public function getAll($limit = null,$start = null)
    {
        $res = $this->_client->request('GET', 'news/all', [
            'query' => [
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
}
