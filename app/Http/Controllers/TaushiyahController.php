<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taushiyah;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class TaushiyahController extends Controller
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
            $model = Taushiyah::query();

            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<a href="' . route('cms.taushiyahs.edit', $data->id) . '"  class="edit btn btn-primary btn-sm"><span class="fas fa-pencil-alt"></span></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" data-id="' . $data->id . '" class="delete btn btn-danger btn-sm"><span class="fas fa-trash"></span></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('cms.taushiyah.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cms.taushiyah.create');
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

        $subdistrict = new Taushiyah();
        $subdistrict->name = Str::title($request->name);
        $subdistrict->save();
        alert()->success('success', 'Taushiyah berhasil di tambahkan');

        return redirect()->route('cms.taushiyahs');
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
        $Taushiyah = Taushiyah::find($id);

        if (!$Taushiyah) {
            alert()->error('error', 'Taushiyah tidak di temukan');
            return redirect()->route('cms.taushiyahs');
        }

        return view('cms.taushiyah.edit', compact('Taushiyah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $Taushiyah = Taushiyah::find($id);

        if (!$Taushiyah) {
            alert()->error('error', 'Taushiyah tidak di temukan');
            return redirect()->route('cms.taushiyah.edit', ['id' => $id]);
        }
        $Taushiyah->name = Str::title($request->name);
        $Taushiyah->save();
        alert()->success('success', 'Taushiyah berhasil di ubah');
        return redirect()->route('cms.taushiyahs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $subdistrict = Taushiyah::find($id);

        if (!$subdistrict) {
            alert()->error('error', 'Taushiyah tidak di temukan');
            return redirect()->route('cms.taushiyahs');
        }

        $subdistrict->delete();

        alert()->success('success', 'Taushiyah berhasil di hapus');
        return response()->json(['success' => 'Taushiyah berhasil di hapus']);
    }

    public function json_request(Request $request)
    {
        $subdistricts = Taushiyah::all();
        return response()->json($subdistricts);
    }
}
