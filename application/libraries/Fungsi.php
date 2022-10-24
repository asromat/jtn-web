<?php

use GuzzleHttp\Client;

class Fungsi
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function imageThumbnail($img, $ukuran)
    {
        $query = str_replace(['.md', '.th', '.jpg', '.png'], ['', '', '.' . $ukuran . '.jpg', '.' . $ukuran . '.png'], $img);
        return $query;
    }
    
    function convertToSlug($str, $delimiter = '-')
    {
        $query = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
        return $query;
    }

    function cekUrl()
    {
        $url = $this->ci->uri->segment('2');
        if (is_numeric($url)){
            // echo "V1";
            $data['id'] = $this->ci->uri->segment("2");
            $data['judul'] = $this->ci->uri->segment("5");
            return $data;
        } else {
            // echo "V2";
        }
    }

    function timeToStr($tipe = null, $value = null)
    {
        $tanggal = date($tipe,strtotime($value));
        return $tanggal;
    }

    function getCategoryData($query,$value)
    {
        

        $this->_client = new Client([
            'base_uri' => 'http://jtn-api.test/',
            'auth' => ['webmasterjtn', 'RedaksiIndonesia-2022']
        ]);

        $res = $this->_client->request('GET', 'news/optCategoryData/', [
            'query' => [
                'query' => $query,
                'value' => $value,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    function timeAgo($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'tahun',
            'm' => 'bulan',
            'w' => 'minggu',
            'd' => 'hari',
            'h' => 'jam',
            'i' => 'menit',
            's' => 'detik',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' lalu' : 'just now';
    }
}
