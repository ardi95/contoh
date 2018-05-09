<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sigma;
use App\Customer;

use GuzzleHttp\Client;
use Illuminate\Pagination\LengthAwarePaginator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client    = new Client();
        $data      = $client->get(env('API_URL').'api/sigma');

        $paging    = json_decode($data->getBody()->getContents());
        var_dump($paging);die();
        $keyword   = null;

        // pagination
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 5;
        $currentResults = $paging->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $data['sigma'] = new LengthAwarePaginator($currentResults, $paging->count(), $perPage);
        // return $data['sigma'];


        return view('customer.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
