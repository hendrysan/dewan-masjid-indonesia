<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masjid;
use App\Models\Subdistrict;
use App\Models\Vilage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class MasjidController extends Controller
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
            $model = Masjid::query();

            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->addColumn('desa', function ($data) {
                    return $data->vilage->name;
                    // return "";
                })
                ->addColumn('kecamatan', function ($data) {
                    return $data->subdistrict->name;
                    // return "";
                })
                ->addColumn('action', function ($data) {
                    $button = '<a href="' . route('cms.masjids.edit', $data->id) . '"  class="edit btn btn-primary btn-sm"><span class="fas fa-pencil-alt"></span></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" data-id="' . $data->id . '" class="delete btn btn-danger btn-sm"><span class="fas fa-trash"></span></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('cms.masjid.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subdistricts = Subdistrict::all();
        return view('cms.masjid.create',compact('subdistricts'));
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

        $subdistrict = new Masjid();
        $subdistrict->name = Str::title($request->name);
        $subdistrict->save();
        alert()->success('success', 'Masjid berhasil di tambahkan');

        return redirect()->route('cms.masjids');
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
        $masjid = Masjid::find($id);

        if (!$masjid) {
            alert()->error('error', 'Masjid tidak di temukan');
            return redirect()->route('cms.masjids');
        }

        return view('cms.masjid.edit', compact('masjid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $masjid = Masjid::find($id);

        if (!$masjid) {
            alert()->error('error', 'Masjid tidak di temukan');
            return redirect()->route('cms.masjid.edit', ['id' => $id]);
        }
        $masjid->name = Str::title($request->name);
        $masjid->save();
        alert()->success('success', 'Masjid berhasil di ubah');
        return redirect()->route('cms.masjids');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $subdistrict = Masjid::find($id);

        if (!$subdistrict) {
            alert()->error('error', 'Masjid tidak di temukan');
            return redirect()->route('cms.masjids');
        }

        $subdistrict->delete();

        alert()->success('success', 'Masjid berhasil di hapus');
        return response()->json(['success' => 'Masjid berhasil di hapus']);
    }

    public function json_request(Request $request)
    {
        $subdistricts = Masjid::all();
        return response()->json($subdistricts);
    }
}
