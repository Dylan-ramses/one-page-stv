<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Client;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        // client
        $client = new Client();
        $client->name = $request->name;
        $client->lastname = $request->lastname;
        $client->email = $request->email;
        $client->company = $request->company; 
        $client->answer = $request->answer;
        $client->save(); // guardo en la BD
        // respuesta 
        return back()->with('status', 'Mensaje enviado con exito');
    }

}
