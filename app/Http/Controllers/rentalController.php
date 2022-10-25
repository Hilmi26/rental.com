<?php

namespace App\Http\Controllers;

use App\Models\detail_rental;
use App\Models\rental;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class rentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = rental::all();

        return view('page.rental.tabelRental', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = detail_rental::all();
        return view('page.rental.tambahRental', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'nama_rental' => 'required|string',
            'email' => 'required|string|email|unique:rental',
            'username' => 'required|string',
            'password' => 'required|string',
            'password_confir' => 'required|same:password',
        ]);

        rental::create($validator);
        return redirect('rental')->with('success', 'Data Berhasil Ditambah');
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
        $data = rental::findOrFail($id);

        return view('page.rental.editRental', compact('data'));
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
        $data = rental::findOrFail($id);

        $validator = $request->validate([
            'nama_rental' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',

        ]);

        $data->update($validator);
        return redirect('/rental')->with('success', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // dd($id);
        // $data = DB::table('rentals')->delete($id);
        // return redirect('/rental')->with('success', 'Data berhasil Dihapus');
        $data = rental::findOrFail($id);
        $data->delete();

        return redirect('/rental')->with('success', 'Data berhasil Dihapus');
    }
}
