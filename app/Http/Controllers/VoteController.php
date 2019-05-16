<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $votes = Vote::paginate(2);

        return view('admin.index',compact('votes'));
     
    }

            public function search(Request $request) {

        $search = $request->get('search');
        $votes = \App\Vote::where('name','%'.$search.'%')->paginate(1);
        return view('admin.index',compact('votes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $vote = new Vote();
        $vote->password = request('password');
        $vote->name = request('name');
        $vote->status = request('status');
        $vote->account = request('account');

        $vote->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vote = Vote::find($id);
        return view('admin.edit',compact('vote'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $vote = Vote::findOrFail($id);
        $vote->password = request('password');
        $vote->name = request('name');
        $vote->status = request('status');
        $vote->account = request('account');
        $vote->save();
        return redirect('/vote');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Vote::findOrFail($id)->delete();
        return redirect('/vote');
    }
}
