<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Included;
use Illuminate\Http\Request;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('all tours are here');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $included_items = Included::all();
      // dd($included_items);
        return view('admin.tours.create', compact('included_items'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes =  request()->validate([
            'tour_title' => ['required', 'max:255'],
            'tour_code' => ['required', 'max:255'],            
            'tour_duration' => ['required', 'max:255'],
            'tour_description_name' => ['nullable', 'max:555'],
            'tour_description' => ['required', 'max:3555'],
            'tour_description_departure_return' => ['required', 'max:255'],
            'tour_description_departure_time' => ['required', 'max:255'],
            'tour_description_included' => ['required', 'max:1555'],
            'tour_description_not_included' => ['required', 'max:1555'],
            'tour_description_details_file' => ['nullable', 'file'],
            'tour_itinarary' => ['required', 'max:3555'],
            'tour_location_link' => ['required', 'max:1255'],

            
        ]);
      //  dd($attributes);
     
      $attributes['tour_description_details_file'] = request()->file('tour_description_details_file')->store('tour_description_details_file');
        (Tours::create($attributes));
        
         session()->flash('success', 'Tour has been created');
         session()->flash('type', 'Tour Creation');
         

        return redirect('/admin');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function show(Tours $tours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function edit(Tours $tours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tours $tours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tours  $tours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tours $tours)
    {
        //
    }
}
