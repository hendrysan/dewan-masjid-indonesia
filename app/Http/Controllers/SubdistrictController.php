<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subdistrict;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class SubdistrictController extends Controller
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
            // dd('test');
            $model = Subdistrict::query();

            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<a href="' . route('cms.subdistricts.edit', $data->id) . '"  class="edit btn btn-primary btn-sm"><span class="fas fa-pencil-alt"></span></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" data-id="' . $data->id . '" class="delete btn btn-danger btn-sm"><span class="fas fa-trash"></span></button>';



                    return $button;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('cms.subdistrict.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cms.subdistrict.create');
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

        $subdistrict = new Subdistrict();
        $subdistrict->name = Str::title($request->name);
        $subdistrict->save();
        alert()->success('success', 'Kecamatan berhasil di tambahkan');

        return redirect()->route('cms.subdistricts');
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
        $subdistrict = Subdistrict::find($id);

        if (!$subdistrict) {
            alert()->error('error', 'Kecamatan tidak di temukan');
            return redirect()->route('cms.subdistricts');
        }

        return view('cms.subdistrict.edit', compact('subdistrict'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $subdistrict = Subdistrict::find($id);

        if (!$subdistrict) {
            alert()->error('error', 'Kecamatan tidak di temukan');
            return redirect()->route('cms.subdistrict.edit', ['id' => $id]);
        }
        $subdistrict->name = Str::title($request->name);
        $subdistrict->save();
        alert()->success('success', 'Kecamatan berhasil di ubah');
        return redirect()->route('cms.subdistricts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $subdistrict = Subdistrict::find($id);

        if (!$subdistrict) {
            alert()->error('error', 'Kecamatan tidak di temukan');
            return redirect()->route('cms.subdistricts');
        }

        $subdistrict->delete();

        alert()->success('success', 'Kecamatan berhasil di hapus');
        return response()->json(['success' => 'Kecamatan berhasil di hapus']);
    }

    public function json_request(Request $request)
    {
        $subdistricts = Subdistrict::all();
        return response()->json($subdistricts);
    }
}
