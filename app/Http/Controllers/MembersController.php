<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('membersList', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addMembers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mem = new Member();

        Member::create([
            'memName' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'dept' => $request->dept,
            'address' => $request->address,
            'memType' => $request->memType,
            'password' => $request->password
        ]);
        return redirect('membersList')->with('success','Member is successfully saved');

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
        $mem = Member::findOrFail($id);
        return view('editMembers',compact('mem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'memName' => 'required|max:255',
            'email' => 'required',
            'contact' => 'required',
            'dept' => 'required',
            'address' => 'required',
            'password' => 'required'
        ]);
        Member::whereId($id)->update($validatedData);
        return redirect('membersList')->with('success','Book updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mem = Member::findOrFail($id);
        $mem->delete();

        return redirect('membersList')->with('success','Member data is successfully delete');
    }
}
