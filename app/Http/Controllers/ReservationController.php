<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Validation\Rule;



class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function showNames()
    {
        $rooms = Room::all();
        return view('mngReservations.addReservation',['rooms'=>$rooms]);
    }

    public function showReser()
    {
        $reservations = Reservation::all();
        return view('mngReservations.ReserList',['reservations'=>$reservations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->room_id = $request->input('name');
        $reservation->creneaude = $request->input('creneaude');
        $reservation->creneaua = $request->input('creneaua');
        $reservation->objective = $request->input('objective');
        $reservation->date = $request->input('date');
        $reservation->user_id = 1;
        $reservation->save();
        return redirect('/showReser')->with('message','Reservation successfully added!');
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
        $reservation = Reservation::find($id);
        $rooms = Room::all();
        return view('mngReservations.editReservation',['reservation'=>$reservation,'rooms'=>$rooms]);
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
        $reservation = Reservation::find($id);
        $request->validate(['id'=>Rule::unique('reservations')->ignore($reservation->id)]);
        $reservation->date = $request->input('date');
        $reservation->creneaude = $request->input('creneaude');
        $reservation->creneaua = $request->input('creneaua');
        $reservation->objective = $request->input('objective');
        
        $reservation->save();
        return redirect('/showReser')->with('message','Reservation successfully updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        
        $reservation->delete();
        return back()->with('message','Reservation successfully deleted!');
    }
}
