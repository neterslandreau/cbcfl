<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

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
        $articles = Article::all();

        return view('home')->with(compact('articles'));
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
        $data = [
            'staff' => [
                0 => [
                    'name' => 'Amber Fatout',
                    'role' => 'Lead Three Year Old Teacher',
                    'email' => 'afatiut@cbcfl.org',
                    'bio' => '
                        Amber Fatout (pronounced Fattoo) is a native of Hollywood, Florida.
                        Her passion for working with young children began when she was a volunteer for her Aunt’s private in home center.
                        From there, Amber received her CDA Nationals and is currently obtaining her A.S. in Early Childhood Education at Broward College.
                        Ms. Amber enjoys rest and relaxation during her spare time. She also volunteers in the Children’s Ministry at her church.
                            ',
                    'image' => 'amber-350x350.jpg',
                ],
                1 => [
                    'name' => 'Cher Roselott',
                    'role' => 'Director',
                    'email' => 'Cher-cr@cbcfl.org',
                    'bio' => '
                        Cher Rosselot practically grew up at the Academy at Griffin Harbor.
                        Ms.Cher has been a member of the staff since 1999.
                        She began her career with the Academy working in our infant room.
                        Since that time she has worked in virtually every capacity at the center.
                        Both of her children also attended the preschool.
                        Cher has a keen understanding of both the mission and values of Community Bible Church and the Academy.
                        In her spare time she enjoys spending time with her children and two grandchildren.

                    ',
                    'image' => 'cher-350x350.png',
                ],
                2 => [
                    'name' => 'Jamie Polanko',
                    'role' => 'Assistant Two Year Old Teacher',
                    'email' => 'jpolanko@cbcfl.org',
                    'bio' => 'Jamie Polanco was born in Toms River, New Jersey and recently relocated to Ft.Lauderdale. Ms.Jamie’s passion for teaching began when she was in Middle School babysitting for a family of four. She then began her teaching career in a Daycare where she cared for infants. Ms.Jamie is currently completing her ECE Credentials with DCF. In her spare time she enjoys softball, outside activities and going to church. Ms.Jamie is the proud mother to a six year old little boy.',
                    'image' => 'jamie-350x350.jpg',
                ],
                3 => [
                    'name' => 'Samala Coke',
                    'role' => 'VPK Lead Teacher',
                    'email' => 'scoke@cbcfl.org',
                    'bio' => 'Samala Coke was born in New York and raised in South Florida. Ms.Samala’s passion for teaching began when she was in high school. During that time she worked with children preparing them for adulthood. Ms.Samala has her A.S. in Early Childhood Education and is the Lead Teacher in our VPK program. In her spare time she enjoys dancing, continuing her education and trying new experiences.',
                    'image' => 'samala-350x350.png',
                ],
                4 => [
                    'name' => 'Shelly Hunter',
                    'role' => 'Lead Two Year Old Teacher',
                    'email' => 'shunter@cbcfl.org',
                    'bio' => 'Shelly Hunter was born in St.Thomas, Jamaica. She is our Two Year Old Teacher at the Academy, and shares her experience with toddlers in the classroom as they embark on a journey of developing and learning. Ms.Shelly lends her patience and love for children to provide a safe and healthy learning environment. She is currently obtaining her A.S. in Early Childhood Education at Broward College. Ms.Shelly began her passion to teach when she was in grade school where she enjoyed helping her teachers. In her spare time she enjoys reading, cooking and singing.',
                    'image' => 'shelly-350x350.jpg',
                ],
                5 => [
                    'name' => 'Tammy Smith',
                    'role' => 'Lead One Year Old Teacher',
                    'email' => 'tsmith@cbcfl.org',
                    'bio' => 'Tammy Smith was born in Jamaica and moved to Florida when she was 18. She is the Lead Teacher for our One Year Old Class and has her Early Childhood Education Credentials from NSU. Her passion for childcare began during her teenage years when she began taking care of her baby sisters. In her spare time Ms.Tammy enjoys cooking and exercising.',
                    'image' => 'tammy-350x350.jpg',
                ],
                6 => [
                    'name' => 'Stephanie Santaigo',
                    'role' => 'VPK Co-Teacher',
                    'email' => 'ssantiago@cbcfl.org',
                    'bio' => '
                        Stephanie Santiago is a native of Hialeah, Florida and now calls Pembroke Pines home.
                        Ms.Stephanie’s passion for teaching began at a young age and proceeded into a career technology class in high school.
                        Stephanie has nine years of experience in Early Childhood Education as well as her Staff Credential and Director’s Credential.
                        Stephanie is obtaining her A.S. Degree in Early Childhood Education.
                        In her spare time she enjoys being outdoors and spending time with her friends and family.
                    ',
                    'image' => 'stephanie-350x350.jpg',
                ],
            ]
        ];

//        echo '<pre>';
//        print_r($data);
//        echo '</pre>';

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
