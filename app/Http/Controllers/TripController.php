<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd('all trips are here');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trips.create');
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
            'trips_title' => ['required', 'max:255'],
            'trips_code' => ['required', 'max:255'],            
            'trips_duration' => ['required', 'max:255'],
            'trips_description_name' => ['nullable', 'max:555'],
            'trips_description' => ['required', 'max:3555'],
            'trips_description_departure_return' => ['required', 'max:255'],
            'trips_description_departure_time' => ['required', 'max:255'],
            'trips_description_included' => ['required', 'max:1555'],
            'trips_description_not_included' => ['required', 'max:1555'],
            'trips_description_details_file' => ['nullable',
            File::types(['pdf'])
            ->min(1024)
            ->max(12 * 1024),
        ],
            'trips_itinarary' => ['required', 'max:3555'],
            'trips_location_link' => ['required', 'max:1255'],

            
        ]);
      //  dd($attributes);
     
      $attributes['trips_description_details_file'] = request()->file('trips_description_details_file')->store('trips_description_details_file');
        (Trip::create($attributes));
        
         session()->flash('success', 'Tour has been created');
         session()->flash('type', 'Tour Creation');
         

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
