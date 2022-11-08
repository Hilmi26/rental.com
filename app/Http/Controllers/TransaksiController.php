<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Rental;
use App\Models\transaksi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $mobil = Mobil::with('rental')->find($id); //relasi mobil dan rental
        $rental = rental::where('id', '=', $mobil->rental_id)->get(['id', 'nama_rental']); //mengambil id dan nama rental yang dimiliki mobil
        return view('page/transaksi/transaksi', ['mobil' => $mobil, 'rental' => $rental]); //mengoper data mobil dan rental ke halaman view edit
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
    public function store(Request $request)
    {
        //
        $tambah_transaksi = transaksi::create([
            'user_id' => $request->user_id,
            'mobil_id' => $request->mobil_id,
            'nama_rental' => $request->nama_rental,
            'jam_ambil' => $request->jam_ambil,
            'jam_kembali' => $request->jam_kembali,
            'tgl_ambil' => $request->tgl_ambil,
            'tgl_kembali' => $request->tgl_kembali,
            'total_harga' => $request->total_harga,
            'total_denda' => $request->total_denda,
            'status_pembayaran' => $request->status_pembayaran,
            'status_pemesanan' => $request->status_pemesanan,
            'status_pengembalian' => $request->status_pengembalian,
    ]);
    $tambah_transaksi->save();
    return redirect('/transaksi');
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
