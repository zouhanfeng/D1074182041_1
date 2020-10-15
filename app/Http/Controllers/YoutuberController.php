<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoutuberController extends Controller
{
    function index()
    {
        return view('youtuber.index');
    }
    function creat()
    {
        return view('youtuber.creat');
    }
    function edit($id)
    {
        $youtuber_id=$id;
        if ($id<10)
        {
            $y_name="jason";   // $channel_name = "wacky";
            $y_years=20;   // $channel_guys = 5;
            $y_country="Taiwan"; // $channel_views = 100;
        } else {
            $y_name = "Null";   // $channel_name = "wacky";
            $y_years = "Null";   // $channel_guys = 5;
            $y_country = "Null";
        }
        $data=compact('youtuber_id','y_name','y_years','y_country');
        return view('youtuber.edit',$data);
    }
    function show($id)
    {
        //$channel_name="";$chanel_guys="";$channel_views="";
        if ($id<10)
        {
            $y_name = "Jason";
            $y_years = 20;
            $y_country = "Taiwan";
        } else{
            $y_name = "Null";
            $y_years = "Null";
            $y_country = "Null";
        }
        return view('youtuber.show')->with(["y_name"=>$y_name,
                                                  "y_years"=>$y_years,
                                                    "y_country"=>$y_country,
                                                     "youtuber_id"=>$id]);//->with("channel_id",$id)
    }
}
