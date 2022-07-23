<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Angkot;

class AngkotController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $angkot = Angkot::paginate(16);

        return view('pages.angkot', [
            'angkot' => $angkot
        ]);
    }
}
