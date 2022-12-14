<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Usercar;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Usercar $usercar, Image $images)
    {
        $images = Image::all();
        $usercars = Usercar::all();
        return view('cars.index', compact('usercars','images'));
    }


    public function search(Request $request)
    {
        $get_make = $request->make;
        $get_body_type = $request->body_type;
        $get_first_registration = $request->first_registration;
        $get_price = $request->price;
        $get_fuel = $request->fuel;
        $get_transmission = $request->transmission;
        $get_state_of_wear = $request->state_of_wear;

        $usercars = Usercar::orWhere('make','LIKE','%'.$get_make.'%')
        ->where('body_type','LIKE','%'.$get_body_type.'%')
        ->where('first_registration','LIKE','%'.$get_first_registration.'%')
        ->where('fuel','LIKE','%'.$get_fuel.'%')
        ->where('state_of_wear','LIKE','%'.$get_state_of_wear.'%')

        ->get();
        return view('cars.search',compact('usercars'));
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
