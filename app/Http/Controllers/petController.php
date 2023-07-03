<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\pet;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class petController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userdata = Auth::User();
        $petData = pet::where('user_id', $userdata->id )->orderBy('id', 'desc')->get();
        return view('components.pets', compact('userdata','petData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('components.addpet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recorded = pet::create($request->all());
        return back()->with('success', 'Pet Has been added to the dashboard!');
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
        $petId = pet::find($id);

        return view('components.editPet')->with('petId', $petId);
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
        $petId = pet::find($id);
        $input = $request->all();
        $petId->update($input);
        return redirect('dashboard/pets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = pet::find($id);

        $record->delete();
        return redirect('dashboard/pets');
    }
}
