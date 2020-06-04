<?php


use GuzzleHttp\Client;

class Selesai_model extends CI_model
{


    private $_client;

    //untuk data biar dijadikan fungsi menjadi satu biar tdak mengulang

    //utuk api
    public function __construct()
    {

        $this->_client = new Client([
            'base_uri' => 'https://api.thebigbox.id/voice-notif/1.0.0/',

            'headers' => [
                'x-api-key' => 'D8J5LrTG7uh4G9N7nYhZ2b1kf9D0fEKC',
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],

        ]);
    }

    public function getAll()
    {
        // ini kedatabase
        // return $this->db->get('mahasiswa')->result_array();

        //url api dan key api

        $response = $this->_client->request('GET', 'broadcast', [

            'query' => [
                'x-api-key' => 'D8J5LrTG7uh4G9N7nYhZ2b1kf9D0fEKC'

            ]

        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        //data diambil dari postman dibawah status
        return $result['broadcastList'];
    }

    public function postvoice()
    {



        $data = [
            "text" => "haloo riiiddaa sayang",
            "phone" => $this->input->post('phone', true),
            "repeat" => '2',

            "x-api-key" => 'D8J5LrTG7uh4G9N7nYhZ2b1kf9D0fEKC'

        ];


        // $this->db->insert('mahasiswa', $data);



        $response = $this->_client->request('POST', 'broadcast', [

            'json' => $data,

        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        //data diambil dari postman dibawah status 0 diambil untuk detail 1 data
        return $result;
    }
}
