<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmissionRequest;
use App\submissions;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submissions = Submissions::latest()->paginate(10);

        return view('backend.submissions.index', compact('submissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubmissionRequest $request)
    {

        if($request->hasFile('slip')){

            $slip = $request->slip;

            $fileName = "slip-picture".time().$slip->getClientOriginalName();

            $slip->move(public_path('slips'), $fileName );
        }

        submissions::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'slip' => $fileName
        ]);

        return redirect('/')->with("message","Successfully Submitted");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\submissions  $submissions
     * @return \Illuminate\Http\Response
     */
    public function show(submissions $submissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\submissions  $submissions
     * @return \Illuminate\Http\Response
     */
    public function edit(submissions $submissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\submissions  $submissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, submissions $submissions)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\submissions  $submissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(submissions $submissions)
    {
        //
    }

    public function changeStatus(Request $request)
    {
        $status = Submissions::where('id',$request->id)->first();
        $status->status = $request->status;
        $status->save();

        return response()->json("success");
    }

}
