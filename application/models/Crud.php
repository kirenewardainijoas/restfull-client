<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class Crud extends CI_Model
{


    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api/SI_PEGADAIAN/'
        ]);
    }

    // List all your items
    public function read()
    {

        $response = $this->_client->request('GET');
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getById($id)
    {
        $response = $this->_client->request('GET', '?id=' . $id);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    // Add a new item
    public function add($data)
    {
        $response = $this->_client->request('POST', 'nasabah', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    //Update one item
    public function update()
    {
    }

    //Delete one item
    public function delete()
    {
    }
}

/* End of file Controllername.php */
