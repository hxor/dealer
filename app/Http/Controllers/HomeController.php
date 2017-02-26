<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Motor;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motors = Motor::all();
        $recent = Motor::limit(8)->orderBy('id', 'desc')->get();
        return view('main.front.index', compact('motors', 'recent'));
    }

    public function getMotor(){
      $motors = Motor::orderBy('id', 'desc')->paginate(4);
      return view('main.front.motor', compact('motors'));
    }

    public function getMotorCat($slug){
      $category = Category::where('slug', $slug)->first();
      $motors = Motor::where('category_id', $category->id)->orderBy('id', 'desc')->paginate(4);
      return view('main.front.motor', compact('motors'));
    }

    public function getMotorDetail($slug){
      $motor = Motor::where('slug', $slug)->first();
      $related = Motor::where('category_id', $motor->category_id)->orderBy('id', 'desc')->get();
      return view('main.front.motor-detail', compact('motor', 'related'));
    }

    public function getContact(){
      return view('main.front.contact');
    }

    public function getAboutUs(){
      return view('main.front.about-us');
    }
}
