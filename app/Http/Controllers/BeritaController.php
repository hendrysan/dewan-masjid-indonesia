<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('json_request');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $model = Berita::query();

            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<a href="' . route('cms.beritas.edit', $data->id) . '"  class="edit btn btn-primary btn-sm"><span class="fas fa-pencil-alt"></span></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" data-id="' . $data->id . '" class="delete btn btn-danger btn-sm"><span class="fas fa-trash"></span></button>';



                    return $button;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('cms.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cms.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $subdistrict = new Berita();
        $subdistrict->name = Str::title($request->name);
        $subdistrict->save();
        alert()->success('success', 'Berita berhasil di tambahkan');

        return redirect()->route('cms.beritas');
    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    //     return view('cms.kecamatan.show');
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Berita = Berita::find($id);

        if (!$Berita) {
            alert()->error('error', 'Berita tidak di temukan');
            return redirect()->route('cms.beritas');
        }

        return view('cms.berita.edit', compact('Berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Berita = Berita::find($id);

        if (!$Berita) {
            alert()->error('error', 'Berita tidak di temukan');
            return redirect()->route('cms.berita.edit', ['id' => $id]);
        }
        $Berita->name = Str::title($request->name);
        $Berita->save();
        alert()->success('success', 'Berita berhasil di ubah');
        return redirect()->route('cms.beritas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $subdistrict = Berita::find($id);

        if (!$subdistrict) {
            alert()->error('error', 'Berita tidak di temukan');
            return redirect()->route('cms.beritas');
        }

        $subdistrict->delete();

        alert()->success('success', 'Berita berhasil di hapus');
        return response()->json(['success' => 'Berita berhasil di hapus']);
    }

    public function json_request(Request $request)
    {
        $subdistricts = Berita::all();
        return response()->json($subdistricts);
    }
}
