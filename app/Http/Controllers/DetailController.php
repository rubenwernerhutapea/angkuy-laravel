<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Angkot;

class DetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $id)
    {
        $angkot = Angkot::with(['user'])->where('slug', $id)->firstOrFail();
        return view('pages.detail', [
            'angkot' => $angkot
        ]);
    }
}
