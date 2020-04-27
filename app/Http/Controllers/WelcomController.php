<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Beer;
use App\Bread;
use App\Contact;
use App\Dish;
use App\Feature;
use App\Formreservation;
use App\Menu;
use App\Ourbeer;
use App\Ourbread;
use App\Pricing;
use App\Reservation;

class WelcomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = About::all();
        $beers = Beer::all();
        $breads = Bread::all();
        $contacts = Contact::all();
        $dishes = Dish::all();
        $features = Feature::all();
        $formreservations = Formreservation::all();
        $menus = Menu::all();
        $ourbeers = Ourbeer::all();
        $ourbreads = Ourbread::all();
        $prices = Pricing::all();
        $reservations = Reservation::all();

        return view('welcome',compact('abouts','beers','breads','contacts','dishes',
        'features','formreservations','menus','ourbeers','ourbreads','prices','reservations'));

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
