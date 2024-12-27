<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vilage;
use App\Models\Subdistrict;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class VilageController extends Controller
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
            $model = Vilage::query();

            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<a href="' . route('cms.vilages.edit', $data->id) . '"  class="edit btn btn-primary btn-sm"><span class="fas fa-pencil-alt"></span></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" data-id="' . $data->id . '" class="delete btn btn-danger btn-sm"><span class="fas fa-trash"></span></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('cms.vilage.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subdistricts = Subdistrict::all();
        return view('cms.vilage.create',compact('subdistricts'));
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

        // Subdistricts::create($request->all());
        $vilage = new Vilage();
        $vilage->subdistrict_id = $request->subdistrict_id;
        $vilage->name = Str::title($request->name);
        $vilage->save();
        alert()->success('success', 'Desa created successfully');

        return redirect()->route('cms.vilages'); //->with('success', 'Subdistrict created successfully.');
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
        $vilage = Vilage::find($id);

        if (!$vilage) {
            // alert()->error('error', 'Kecamatan tidak di temukan');
            Alert::warning('Error', 'Desa tidak di temukan');
            return redirect()->route('cms.vilages');
        }
        $subdistricts = Subdistrict::all();
        return view('cms.vilage.edit', compact('vilage','subdistricts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $vilage = Vilage::find($id);

        if (!$vilage) {
            alert()->error('error', 'Desa not found');
            return redirect()->route('cms.vilage.edit', ['id' => $id]);
        }
        $vilage->name = Str::title($request->name);
        $vilage->subdistrict_id = $request->subdistrict_id;
        $vilage->save();
        alert()->success('success', 'Role updated successfully');
        return redirect()->route('cms.vilages');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $vilage = Vilage::find($id);

        if (!$vilage) {
            alert()->error('error', 'Desa not found');
            return redirect()->route('cms.vilages');
        }

        $vilage->delete();

        alert()->success('success', 'Desa deleted successfully');
        return response()->json(['success' => 'Desa deleted successfully']);
    }

    public function json_request(Request $request)
    {
        $vilages = Vilage::all();
        return response()->json($vilages);
    }
}
