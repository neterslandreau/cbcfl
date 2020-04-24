<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('front');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function front()
    {
        $data = [
            'contact_scripture' => 'A new command I give you: Love one another. As I have loved you, so you must love one another. By this everyone will know that you are my disciples, if you love one another.',
            'contact_reference' => 'John 13:34-35',
            'church_address' => '4650 SW 30th Ave Fort Lauderdale, FL 33312',
            'church_email' => 'info@cbcfl.org',
            'church_phone' => '954-xxx-xxxx',
        ];
        return view('front', $data);
    }
}
