<?php

namespace App\Exports;

use App\Models\mobil;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MobilExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Mobil::all();
    }

    public function map($mobil): array
    {
        return [
           $mobil->rental_id,
           $mobil->foto_mobil,
           $mobil->merek,
           $mobil->plat,
           $mobil->warna,
           $mobil->tipe,
           $mobil->transmisi,
           $mobil->tahun,
           $mobil->unit,
           $mobil->history_penyewaan,
           $mobil->harga_sewa,
           $mobil->status_unit,
        ];
    }

    public function headings():array {
        return [
            'rental_id',
            'foto_mobil',
            'merek',
            'plat',
            'warna',
            'tipe',
            'transmisi',
            'tahun',
            'unit',
            'history_penyewaan',
            'harga_sewa',
            'status_unit',
    ];
    }
}
