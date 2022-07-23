<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Angkot;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\AngkotRequest;

class AngkotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Angkot::with(['user']);

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <a class="btn btn-info btn-sm mr-2" style="padding: 0.375rem 0.75rem;font-size: 0.875rem;margin-right:3px" href="' . route('angkot.edit', $item->id) . '">
                                Edit
                            </a>
                            <form action="' . route('angkot.destroy', $item->id) . '" method="POST">
                                ' . method_field('delete') . csrf_field() . '
                                <button type="submit" class="btn btn-danger">
                                    Hapus
                                </button>
                            </form>
                        </div>';
                })
                ->editColumn('gambar', function ($item) {
                    return $item->gambar ? '<img src="' . Storage::url($item->gambar) . '" style="max-height: 100px;"/>' : '';
                })
                ->rawColumns(['action', 'gambar'])
                ->make();
        }

        return view('pages.admin.angkot.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        return view('pages.admin.angkot.create', [
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->nama);
        $data['gambar'] = $request->file('gambar')->store('assets/angkot', 'public');

        Angkot::create($data);

        return redirect()->route('angkot.index');
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
        $item = Angkot::findOrFail($id);
        $user = User::all();

        return view('pages.admin.angkot.edit',[
            'item' => $item,
            'user' => $user
        ]);
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
        $data = $request->all();

        $item = Angkot::findOrFail($id);

        $data['slug'] = Str::slug($request->nama);

        if ($request->file('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('assets/angkot', 'public');
        }

        $item->update($data);

        return redirect()->route('angkot.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Angkot::findorFail($id);
        $item->delete();

        return redirect()->route('angkot.index');
    }
}
