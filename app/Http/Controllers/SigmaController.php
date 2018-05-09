<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class SigmaController extends Controller
{
    //
    public function index()
    {

        $client    = new Client();

    	if (isset($_GET['page'])) {

            $paging     = $_GET['page'];
            $dataapi    = $client->get(env('API_URL').'api/sigma?page='.$paging);
    		
    	}
    	else{

    		$dataapi    = $client->get(env('API_URL').'api/sigma');

    	}

        $data['sigma']    = json_decode($dataapi->getBody()->getContents());

        return view('sigma.index',$data);

    }
}
