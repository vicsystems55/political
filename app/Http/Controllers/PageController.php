<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){



        return view('welcome');
    }

    public function updates(){



        return view('updates');
    }

    public function update($id){



        return view('update_details'.$id);
    }
}
