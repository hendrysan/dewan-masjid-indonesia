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
        $vilages = Vilage::all();
        return view('cms.masjid.create',compact('vilages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
        'nama' => 'required|string|max:255',
        'imb' => 'required|in:yes,no',
        'website_url' => 'required|url',
        'map_url' => 'required|url',]);
        
        
        $vilage = Vilage::find($request->vilage_id);


        $masjid = new Masjid();
        $masjid->nama = Str::title($request->nama);
        $masjid->alamat = $request->alamat;
        $masjid->tahun_berdiri = $request->tahun_berdiri;
        $masjid->status_tanah_bangunan = $request->status_tanah_bangunan;
        $masjid->luas_bangunan = $request->luas_bangunan;
        $masjid->luas_tanah = $request->luas_tanah;
        $masjid->imb = $request->imb=== 'yes' ? 1 : 0;
        $masjid->daya_tampung = $request->daya_tampung;
        $masjid->fasilitas = $request->fasilitas;
        $masjid->kegiatan = $request->kegiatan;
        $masjid->nama_imam = $request->nama_imam;
        $masjid->nama_khatib = $request->nama_khatib;
        $masjid->website_url = $request->website_url;
        $masjid->map_url = $request->map_url;
        $masjid->subdistrict_id = $vilage->subdistrict_id;
        $masjid->vilage_id = $request->vilage_id;
        $masjid->save();

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

        return view('cms.masjid.edit', compact('masjid' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $masjid = Masjid::find($id);
        $request->validate([
            'nama' => 'required|string|max:255',]);

        if (!$masjid) {
            alert()->error('error', 'Masjid tidak di temukan');
            return redirect()->route('cms.masjid.edit', ['id' => $id]);
        }
        $masjid->nama = Str::title($request->nama);
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
        $masjid = Masjid::find($id);

        if (!$masjid) {
            alert()->error('error', 'Masjid tidak di temukan');
            return redirect()->route('cms.masjids');
        }

        $masjid->delete();

        alert()->success('success', 'Masjid berhasil di hapus');
        return response()->json(['success' => 'Masjid berhasil di hapus']);
    }

    public function json_request(Request $request)
    {
        $masjid = Masjid::all();
        return response()->json($masjid);
    }
}
