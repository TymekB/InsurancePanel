<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $userId = auth()->user()->id;

        $data = $request->validate([
            'firstname' => 'required|alpha|min:3|max:20',
            'lastname' => 'required|alpha|min:3|max:20',
            'insurance_company' => 'required',
            'expiration_date' => 'required|date'
        ]);

        $client = new Client();

        $client->firstname = $data['firstname'];
        $client->lastname = $data['lastname'];
        $client->insurance_company = $data['insurance_company'];
        $client->expiration_date = $data['expiration_date'];
        $client->user_id = $userId;

        $client->save();

        return redirect('/home');
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);

        if(auth()->user()->id == $client->user_id)
        {
            $client->delete();
        }

        return redirect('/home');
    }
}
