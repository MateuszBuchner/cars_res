<?php

namespace App\Http\Controllers\User;

use App\Models\Image;
use App\Models\Usercar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index(){
        $usercars = Usercar::all();
        return view('admin.cars.show', compact('usercars'));
    }

    public function store(Request $req){
        $data = $req->validate([
            'body_type'=> 'required',
            'make'=> 'required',
            'model'=> 'required',
            'first_registration'=> 'required',
            'mileage'=> 'required',
            'price'=> 'required',
            'description'=> 'required'
        ]);
        $new_usercar = Usercar::create($data);
        if($req->has('images')){
            foreach($req->file('images')as $image){
                $imageName = $data['description'].'-image-'.time().rand(1,1000).'.'.$image->extension();
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
