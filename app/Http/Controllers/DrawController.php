<?php

namespace App\Http\Controllers;

use App\submissions;
use Illuminate\Http\Request;

class DrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approvedSubmissions = submissions::where('status', 1)->paginate();

        return view('backend.draw.index', compact('approvedSubmissions'));
    }

    public function chooseWinner()
    {
            $data = submissions::where('status', 1)->latest()->get()->toArray();

            $winner = array_slice($data,array_rand($data), 1);

            dd($winner);

            return response()->json($winner);

            //$a = array("red","green","blue","yellow","brown");
            //$winner = array_slice($a,array_rand($a), 1);
//            print_r($winner);
//            print_r("sichali");
//            print_r($a);


    }
}
