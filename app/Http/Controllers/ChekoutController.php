<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class ChekoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {

        $nb_rating = 120;
        $stars_nb = 5;
        $price = number_format(42600, 2);
        $discount_p = number_format(37999, 2);
        $instagram_link = '#';

        $rating = array([
            "rating" => "5",
            "title" => "رائع",
            "content" => "جهاز جميل جدا",
            "name" => "أسماء",
            "p_name" => "جهاز سيلكي سكن",
            "date" => "30/12/2020",
            "active" => '1',
        ], [
            "rating" => "3",
            "title" => "رائع",
            "content" => "جهاز جميل جدا",
            "name" => "أمينة",
            "p_name" => "جهاز سيلكي سكن",
            "date" => "30/12/2020",
            "active" => '0',
        ],
            [
                "rating" => "4",
                "title" => "رائع",
                "content" => "جهاز جميل جدا",
                "name" => "اماني",
                "p_name" => "جهاز سيلكي سكن",
                "date" => '30/12/2020',
                "active" => '0',
            ],
            [
                "rating" => "4",
                "title" => "رائع",
                "content" => "جهاز جميل جدا",
                "name" => "اماني",
                "p_name" => "جهاز سيلكي سكن",
                "date" => '30/12/2020',
                "active" => '0',
            ],
            [
                "rating" => "4",
                "title" => "رائع",
                "content" => "جهاز جميل جدا",
                "name" => "اماني",
                "p_name" => "جهاز سيلكي سكن",
                "date" => '30/12/2020',
                "active" => '0',
            ],
            [
                "rating" => "4",
                "title" => "رائع",
                "content" => "جهاز جميل جدا",
                "name" => "اماني",
                "p_name" => "جهاز سيلكي سكن",
                "date" => '30/12/2020',
                "active" => '0',
            ]
        );

        return view('home', compact('rating', 'nb_rating', 'stars_nb', 'price', 'discount_p', 'instagram_link'));
    }


    public function product()
    {

        $nb_rating = 120;
        $stars_nb = 5;
        $price = number_format(42600, 2);
        $discount_p = number_format(37999, 2);

        $instagram_link = '#';

        $rating = array([
            "rating" => "5",
            "title" => "رائع",
            "content" => "جهاز جميل جدا",
            "name" => "أسماء",
            "p_name" => "جهاز سيلكي سكن",
            "date" => "30/12/2020",
            "active" => '1',
        ], [
            "rating" => "3",
            "title" => "رائع",
            "content" => "جهاز جميل جدا",
            "name" => "أمينة",
            "p_name" => "جهاز سيلكي سكن",
            "date" => "30/12/2020",
            "active" => '0',
        ],
            [
                "rating" => "4",
                "title" => "رائع",
                "content" => "جهاز جميل جدا",
                "name" => "اماني",
                "p_name" => "جهاز سيلكي سكن",
                "date" => '30/12/2020',
                "active" => '0',
            ],
            [
                "rating" => "4",
                "title" => "رائع",
                "content" => "جهاز جميل جدا",
                "name" => "اماني",
                "p_name" => "جهاز سيلكي سكن",
                "date" => '30/12/2020',
                "active" => '0',
            ],
            [
                "rating" => "4",
                "title" => "رائع",
                "content" => "جهاز جميل جدا",
                "name" => "اماني",
                "p_name" => "جهاز سيلكي سكن",
                "date" => '30/12/2020',
                "active" => '0',
            ],
            [
                "rating" => "4",
                "title" => "رائع",
                "content" => "جهاز جميل جدا",
                "name" => "اماني",
                "p_name" => "جهاز سيلكي سكن",
                "date" => '30/12/2020',
                "active" => '0',
            ]
        );


        return view('product', compact('rating', 'nb_rating', 'stars_nb', 'price', 'discount_p', 'instagram_link'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function confirm(Request $request)
    {
        $product_qte = $request->qte;
        $product_color = $request->p_color;

        $price = number_format(42600, 2);
        $discount_p = number_format(37999, 2);

        return view('checkout', compact('product_color', 'product_qte', 'price', 'discount_p'));

    }


    public function order(Request $request)
    {
     // dd($request);
        //all data in request
        $phone_nb = "0770 49 68 66";
        return view('final', compact('phone_nb'));
    }

    public function contact(Request $request)
    {
        $data = array('name' => $request->name,
            'email' => $request->email,
            'msg' => $request->message,
        );

        Mail::send('emails.contact', $data, function ($message) {
            $message->from('contact@newsilkyskin.me', 'Contact');
            $message->to('berrehaloualaeddine@gmail.com', 'Admin')
                ->subject('Contact message');
        });

        Session::flash('orange', 'شكرا لك على مراسلتنا');

        return redirect()->route('checkout.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
