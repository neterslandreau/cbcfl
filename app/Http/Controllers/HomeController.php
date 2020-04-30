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
        $this->middleware('auth')->except(['front', 'preschool', 'prayerteam', 'women']);
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
            'team_scripture' => 'So Christ himself gave the apostles, the prophets, the evangelists, the pastors and teachers, to equip his people for works of service, so that the body of Christ may be built up',
            'team_reference' => 'Ephesians 4:11-12',
        ];
        return view('front', $data);
    }

    public function preschool()
    {
        $data = [];

        return view('preschool', $data);
    }

    public function prayerteam()
    {
        $data = [];

        return view('prayerteam', $data);
    }


    public function women()
    {
        $data = [];

        return view('women', $data);
    }
}
