<?php

namespace App\Http\Controllers;

use App\Models\Klub;
use Illuminate\Http\Request;

class KlubController extends Controller
{
    public function index()
    {
        // $klubs = Klub::all();
        $klubs = Klub::orderByDesc('point')->orderByDesc('gm')->get();
        return view('home', compact('klubs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create_klub()
    {
        return view('form-klub');
    }

    public function create_score()
    {
        $klubs = Klub::pluck('name', 'id');
        return view('form-skor', ['klubs' => $klubs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_klub(Request $request)
    {
        // validation
        $validationData = $request->validate([
            'name' => 'required|unique:klub',
            'city' => 'required',
        ]);

        // new club
        $klub = new Klub();
        $klub->name = $validationData['name'];
        $klub->city = $validationData['city'];

        // save club
        $klub->save();

        return redirect()->route('home');
    }


    public function store_score(Request $request)
    {
        // data input score from form
        $skors1 = $request->skor1;
        $skors2 = $request->skor2;
        $klubs1 = $request->klub1;
        $klubs2 = $request->klub2;
        $klubs = array_merge([$klubs1], [$klubs2]);
        $skors = array_merge([$skors1], [$skors2]);

        // validate matches

        // iteration from row input score from form
        // foreach ($klubs1 as $index => $klub) {
        //     // get score club 1 & club 2 from each row
        //     $skorKlub1 = $skors[0][$index];
        //     $skorKlub2 = $skors[1][$index];

        //     // get club     
        //     $klub1 = $klubs[0][$index];
        //     $klub2 = $klubs[1][$index];
        //     // dd($index);

        //     $klub1 = Klub::where('name', $klub1)->first();
        //     $klub2 = Klub::where('name', $klub2)->first();

        //     // Menambahkan skor ke dalam kolom gm (gol masuk) pada tabel klub
        //     $klub1->gm += $skorKlub1;
        //     $klub2->gm += $skorKlub2;
        //     // Menambahkan skor ke dalam gk (gol kalah) pada tabel klub
        //     $klub1->gk += $skorKlub2;
        //     $klub2->gk += $skorKlub1;

        //     $klub1->ma += 1;
        //     $klub2->ma += 1;

        //     // Menentukan pemenang
        //     if ($skorKlub1 > $skorKlub2) {
        //         // Klub 1 menang
        //         $klub1->me += 1;
        //         $klub1->point += 3;
        //         $klub2->k += 1;
        //     } elseif ($skorKlub1 < $skorKlub2) {
        //         // Klub 2 menang
        //         $klub2->me += 1;
        //         $klub2->point += 3;
        //         $klub1->k += 1;
        //     } else {
        //         // Jika seri
        //         $klub1->s += 1;
        //         $klub2->s += 1;
        //         $klub1->point += 1;
        //         $klub2->point += 1;
        //     }

        //     // Menyimpan perubahan pada kedua klub
        //     $klub1->save();
        //     $klub2->save();
        // }
        // return redirect()->route('home');
    }
}
