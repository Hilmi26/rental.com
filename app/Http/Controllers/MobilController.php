<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\Mobil;
use App\Models\Rental;
use App\Exports\MobilExport;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mobil = Mobil::all();
        // dd($mobil);
        return view('page/mobil/mobil', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $rental = Rental::select('id', 'nama_rental')->get();
        return view('page/mobil/create_mobil', ['rental' => $rental]);
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
        $newName = '';

        if ($request->file('foto_mobil')) {
            $extension = $request->file('foto_mobil')->getClientOriginalExtension(); //menambah original format gambar
            $newName = $request->merek . '-' . $request->tipe . '-' .now()->timestamp . '.' . $extension; //rename gambar
            $image = $request->file('foto_mobil')->storeAs('carImage', $newName);

            // dd($image);
        }
        // $request['foto_mobil'] = $image;

        // $mobil_add = Mobil::create($request->all());
        // dd($mobil_add);

        $mobil_add = Mobil::create([
            'rental_id' => $request->rental_id,
            'foto_mobil' => $image,
            'merek' => $request->merek,
            'plat' => $request->plat,
            'warna' => $request->warna,
            'tipe' => $request->tipe,
            'transmisi' => $request->transmisi,
            'tahun' => $request->tahun,
            'unit' => $request->unit,
            'history_penyewaan' => $request->history_penyewaan,
            'harga_sewa' => $request->harga_sewa,
            'status_unit' => $request->status_unit,
        ]);
        $mobil_add->save();
        // dd($mobil_add);
        return redirect('/mobil')->with('Data berhasil diubah');
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
        $mobil = Mobil::with('rental')->find($id); //relasi mobil dan rental
        $rental = rental::where('id', '!=', $mobil->rental_id)->get(['id', 'nama_rental']); //mengambil id dan nama rental selain id rental yang dimiliki mobil
        return view('/page/edit', ['mobil' => $mobil, 'rental' => $rental]); //mengoper data mobil dan rental ke halaman view edit
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
        $mobil = Mobil::find($id);
        $mobil->update($request->all());
        return redirect('/mobil')->with('Data berhasil diubah');
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

    public function export(){
        // return Excel::download(new MobilExport, 'daftarmobil.xlsx');
        return (new MobilExport)->download('invoices.pdf', \Maatwebsite\Excel\Excel::MPDF);
    }
}
