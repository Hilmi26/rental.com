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
use Midtrans\Config;
use Midtrans\Snap;

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
        // $mobil = Mobil::all();
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
            $newName = $request->merek . '-' . $request->tipe . '-' . now()->timestamp . '.' . $extension; //rename gambar
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
        return view('page/mobil/edit_mobil', ['mobil' => $mobil, 'rental' => $rental]); //mengoper data mobil dan rental ke halaman view edit
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
        // $mobil->update($request->all());
        $mobil->rental_id = $request->rental_id;

        $mobil->merek = $request->merek;
        $mobil->plat = $request->plat;
        $mobil->warna = $request->warna;
        $mobil->tipe = $request->tipe;
        $mobil->transmisi = $request->transmisi;
        $mobil->tahun = $request->tahun;
        $mobil->unit = $request->unit;
        $mobil->history_penyewaan = $request->history_penyewaan;
        $mobil->harga_sewa = $request->harga_sewa;
        $mobil->status_unit = $request->status_unit;
        $mobil->save();
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
        mobil::find($id)->delete();
        return redirect('/mobil');
    }

    public function editImage($id)
    {
        //
        $mobil = Mobil::find($id); //mobil
        return view('page/mobil/edit_image', ['mobil' => $mobil]); //mengoper data mobil dan rental ke halaman view edit
    }

    public function updateImage(Request $request, $id)
    {
        //
        $extension = $request->file('foto_mobil')->getClientOriginalExtension(); //menambah original format gambar
        $newName = $request->merek . '-' . $request->tipe . '-' . now()->timestamp . '.' . $extension; //rename gambar
        $image = $request->file('foto_mobil')->storeAs('carImage', $newName);

        $mobil = Mobil::find($id);
        $mobil->foto_mobil = $image;
        $mobil->save();

        return redirect('/mobil')->with('Gambar berhasil diubah');
    }

    public function detailMobil($id)
    {

        $mobil = Mobil::find($id); //mobil
        return view('page/mobil/detail_mobil', ['mobil' => $mobil]); //mengoper data mobil dan rental ke halaman view edit
    }

    public function export()
    {
        // return Excel::download(new MobilExport, 'daftarmobil.xlsx');
        return (new MobilExport())->download('invoices.pdf', \Maatwebsite\Excel\Excel::MPDF);
    }

    public function midtrans()
    {

        // Set your Merchant Server Key
        Config::$serverKey = 'SB-Mid-server-bLmllmXC-WR-boVMvnunz2Cn';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;


        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            "enabled_payments" => [
    "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "permata_va",
    "bca_va", "bni_va", "bri_va", "other_va"],
        );

        $snapToken = Snap::getSnapToken($params);

        return json_encode($snapToken);
    }

    public function showmobilrental()
    {
        //
        $mobil = Mobil::where('rental_id', '=', 1)->get();
        return view('rentaltemplate', compact('mobil'));
    }
}
