<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\JenisBuku;
use App\Models\RakBuku;
// use App\Export\Buku; 
use Maatwebsite\Excel\Facades\Excel;

class BukuController extends Controller
{
    public function buku228()
    {
       $no=1;
       $data = Buku::with('buku','jenisbuku')->get();
       return view('buku228',compact('data','no'));
    }
    public function Exports228() 
    {
        return Excel::download(new Buku, 'Data_1461900228.xlsx');
    }
}
