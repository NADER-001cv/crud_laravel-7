<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    /*
    
    $members=memberinfo;
$teams=teamInfo;
$points=pointslist;
return view('members', compact('members','teams','points'));

//Passing variable to view using with Method
return view('members')->with(['members'=>memberinfo,'teams'=>teamInfo,'points'=>'pointslist']);
    */
    
    
    
    public function about() {
        // $name = "nader";
        $my_arr = [1,2,3,4,5];
        return view('about')-> with(['name' => "nader",'arr' =>   $my_arr]);
    }
}
