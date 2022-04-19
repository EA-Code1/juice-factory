<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juice;

class JuiceController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // } 

    public function index() {

       //$juices = Juice::all(); 
       //$juices = Juice::orderBy('name', 'desc')->get(); 
       //$juices = Juice::where('type', 'tropical')->get();
       $juices = Juice::latest()->get();

        return view('juices.index', [
            'juices' => $juices,
        ]);
    }

    public function show($id){

        $juice = Juice::findOrFail($id); 

        return view('juices.show', ['juice' => $juice]);
    }

    public function create() {
        return view('juices.create');
    }

    public function store() {

        $juice = new Juice(); 

        $juice->name = request('name');
        $juice->type = request('type');
        $juice->texture = request('texture');
        $juice->toppings = request('toppings');

        $juice->save();
        
        return redirect('/')->with('mssg', 'Thanks for your order');
    }

     public function destory($id) {
        $juice = Juice::findOrFail($id);
        $juice->delete();

        return redirect('/juices'); 
     }
  }
