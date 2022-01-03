<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUser;


class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = ContactUser::where('read', 0)->get();
        return view('home')->with('contacts', $contacts);
    }

    public function updateContacto($id){
        $contacts = ContactUser::find($id);
        $contacts->read = true;
        $contacts->save();
        return redirect('/adminsediregistros');
    }
}
