<?php

use GuzzleHttp\Client;

class Fungsi
{

    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
        // Environment
        // $this->_client = new Client([
        //     'base_uri' => 'http://fix-jtnapi.test/',
        //     'auth' => ['webmasterjtn', 'RedaksiIndonesia-2022']
        // ]);
        // Real
        $this->_client = new Client([
            // 'base_uri' => 'http://api.fitrah.sch.id/jtn/',
            // 'base_uri' => 'http://testingapi.jtn.my.id',
            'base_uri' => 'http://api.jtn.my.id/v1/',
            // 'base_uri' => 'http://fix-jtnapi.me/',
            'auth' => ['webmasterjtn', 'RedaksiIndonesia-2022']
        ]);
    }

    function imageThumbnail($img, $ukuran = null)
    {
        if (isset($ukuran)) { 
            $query = str_replace(['https://','.md', '.th', '.jpg', '.png'], ['https://i1.wp.com/','', '', '.' . $ukuran . '.jpg?quality=50', '.' . $ukuran . '.png?quality=50'], $img);
        } else {
            $query = str_replace(['https://','.jpg', '.png'], ['https://i1.wp.com/', '.' . $ukuran . 'jpg?quality=50', '.' . $ukuran . 'png?quality=50'], $img);
        }
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

    function cekUrlAmp()
    {
        $url = $this->ci->uri->segment('3');
        if (is_numeric($url)){
            // echo "V1";
            $data['id'] = $this->ci->uri->segment("3");
            $data['judul'] = $this->ci->uri->segment("6");
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
        
        $res = $this->_client->request('GET', 'news/optCategoryData/', [
            'query' => [
                'query' => $query,
                'value' => $value,
            ]
        ]);

        $response = json_decode($res->getBody()->getContents(), true);
        return $response;
    }

    function getProfile($tipe,$id = null)
    {
        
        if ($tipe == "editor") {
            $res = $this->_client->request('GET', 'profile/editor/', [
                'query' => [
                    'tipe' => 'db_editor',
                    'id' => $id,
                ]
            ]);
        } else {
            $res = $this->_client->request('GET', 'profile/optCategoryData/', [
                'query' => [
                    'tipe' => 'db_editor',
                    'value' => $id,
                ]
            ]);
        }

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

    function showTag($tag)
    {
        $data = str_replace([",",", "],[':',':'],$tag);
        $final = explode(":",$data);
        return $final;
    }
}
