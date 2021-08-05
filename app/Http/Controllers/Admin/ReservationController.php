<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reservations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'persons' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'email' => 'required|email',
        ]);

        $reservation = Reservation::create([
            'client_name' => $request['client_name'],
            'persons' => $request['persons'],
            'date' => $request['date'],
            'time' => $request['time'],
            'reference' => bin2hex(random_bytes(5)),
            'email' => $request['email'],
        ]);
        return redirect()->route('admin.reservations.edit',$reservation)->with('info','Reservación creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        
        return view('admin.reservations.show', compact('reservation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        return view('admin.reservations.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'client_name' => 'required',
            'persons' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'email' => 'required|email',
        ]);

        $reservation->update($request->all());
        return redirect()->route('admin.reservations.edit',$reservation)->with('info','La reservación se actualizó con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('admin.reservations.index')->with('info','Reservación eliminada');
    }
}
