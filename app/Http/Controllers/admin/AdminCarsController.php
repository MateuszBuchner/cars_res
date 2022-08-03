<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cars = Car::query();
        $search_param = $request->query('q');

        if ($search_param) {
            $cars->where(function ($query) use ($search_param) {
                $query
                    ->orWhere('body_type', 'like', "%$search_param%")
                    ->orWhere('make', 'like', "%$search_param%")
                    ->orWhere('model', 'like', "%$search_param%")
                    ->orWhere('first_registration', 'like', "%$search_param%")
                    ->orWhere('mileage', 'like', "%$search_param%")
                    ->orWhere('price', 'like', "%$search_param%")
                    ->orWhere('description', 'like', "%$search_param%");
            });
        }
        $cars = $cars->paginate(3);
        return view('admin.cars.index', compact('cars', 'search_param'));
        $cars = Car::search(request('search'))->paginate();
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
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect(route('users.index'));
    }
}
