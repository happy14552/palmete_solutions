<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Google_Service_Sheets;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $client = new \Google_Client();

        $client->setApplicationName('Google Sheets and PHP');

        $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);

        $client->setAccessType('offline');

        $client->setAuthConfig('palmatesolutions/storage' . '/credentials.json');

        $service = new Google_Service_Sheets($client);
        $spreadsheetId = "1cb5JA3Az9NQ5zsv7Qi93wxLKGar2UDk_4AcwVf1jDvw";
        $get_range="datasheet";
        $response = $service->spreadsheets_values->get($spreadsheetId, $get_range);

        $values = $response->getValues();
        dd($values);



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
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
