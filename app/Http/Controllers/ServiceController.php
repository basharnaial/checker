<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    
    
    public function index(){

        $services = Service::all();
        // dd($services);

        return view('status',compact('services'));
    }




}
