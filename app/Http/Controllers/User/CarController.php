<?php

namespace App\Http\Controllers\User;

use App\Models\Image;
use App\Models\Usercar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddCarRequest;

class CarController extends Controller
{
    public function index(){
        $usercars = Usercar::all();
        $images = $usercars->count();
        return view('admin.cars.show', compact('usercars','images'));
    }

    public function store(StoreAddCarRequest $request){

        $mainimage = $request->file('mainimage')->store('public/mainimage');

        $mainimage = Usercar::create([
            'body_type' => $request->body_type,
            'make' => $request->make,
            'model' => $request->model,
            'first_registration' => $request->first_registration,
            'mileage' => $request->mileage,
            'price' => $request->price,
            'description' => $request->description,
            'mainimage' => $mainimage,
            'user_id' => $user_id = auth()->user()->id,
            'fuel' => $request->fuel,
            'transmission' => $request->transmission,
            'state_of_wear' => $request->state_of_wear,

        ]);

        if($request->has('images')){
            foreach($request->file('images')as $image){
                $imageName ='-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('product_images'),$imageName);
                Image::create([
                    'usercar_id'=>$mainimage->id,
                    'image'=>$imageName
                ]);
            }
        }
        return back();
    }
    public function show(Usercar $usercar,$id){
        $usercars = Usercar::all();
        $usercars = Usercar::find($id);
        if(!$usercars) abort(404);
        $images = $usercars->images;
        return view('cars.desc',compact('usercars', 'images'));
    }
}
