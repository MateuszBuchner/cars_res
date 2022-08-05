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
        return view('admin.cars.show', compact('usercars'));
    }

    public function store(StoreAddCarRequest $request){

        $new_usercar = Usercar::create($request->validated());
        if($request->has('images')){
            foreach($request->file('images')as $image){
                $imageName ='-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('product_images'),$imageName);
                Image::create([
                    'usercar_id'=>$new_usercar->id,
                    'image'=>$imageName
                ]);
            }
        }
        return back();
    }
}
