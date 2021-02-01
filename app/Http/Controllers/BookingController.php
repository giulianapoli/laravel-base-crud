<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $bookings = Booking::all();

            // DA CONTROLLARE
            return view('home',['bookings'=>$bookings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guest = Booking::find($id);

        return view('guestdetails', compact('guest'));
    }

    public function store(Request $request)
    {
        $newBooking = new Booking;

        $newBooking->guest_full_name = $request->input('fullname');
        $newBooking->guest_credit_card = $request->input('creditcard');
        $newBooking->room = $request->input('room');
        $newBooking->from_date = $request->input('fromdate');
        $newBooking->to_date = $request->input('todate');
        $newBooking->more_details = $request->input('moredetails');

        $newBooking->save();

        $bookings = Booking::all();
        return view('home', compact('bookings'));
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
        //
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
    }

}
