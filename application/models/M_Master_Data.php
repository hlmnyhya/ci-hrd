<?php

use GuzzleHttp\Client;

defined('BASEPATH') or exit('No direct script access allowed');

class M_Master_Data extends CI_Model
{

    private $_client;
    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => SERVER_BASE . 'master/'
        ]);
    }

    public function getMasterData($id = null)
    {
        if ($id === null) {
            $response = $this->_client->request('GET', 'master_data', [
                'query' => [
                    'id' => $id
                ]
            ]);
        } else {
            $response = $this->_client->request('GET', 'master_data', [
                'query' => [
                    'id' => $id
                ]
            ]);
        }
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

        public function addUser($data)
    {
        $respon =  $this->_client->request('POST', 'user', [
            'form_params' => $data
        ]);

        $result = json_decode($respon->getBody()->getContents(), true);

        if ($result['status'] == true) {
            return $result['data'];
        } else {
            return false;
        }
    }


}