<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subdistrict;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class SubdistrictController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

        // Subdistricts::create($request->all());
        $subdistrict = new Subdistrict();
        $subdistrict->name = $request->name;
        $subdistrict->save();
        alert()->success('success', 'Role created successfully');

        return redirect()->route('cms.subdistricts'); //->with('success', 'Subdistrict created successfully.');
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
            // alert()->error('error', 'Kecamatan tidak di temukan');
            Alert::warning('Error', 'Kecamatan tidak di temukan');
            return redirect()->route('cms.subdistricts');
        }

        return view('cms.subdistrict.edit', compact('subdistrict'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         // dd($request->all());
         $subdistrict = Subdistrict::find($id);

         if (!$subdistrict) {
             alert()->error('error', 'Kecamatan not found');
             return redirect()->route('cms.subdistrict.edit', ['id' => $id]);
         }
         $subdistrict->name = $request->name;
         $subdistrict->save();
         alert()->success('success', 'Role updated successfully');
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
             alert()->error('error', 'Kecamatan not found');
             return redirect()->route('cms.subdistricts');
         }

         $subdistrict->delete();

         alert()->success('success', 'Role deleted successfully');
         return response()->json(['success' => 'Role deleted successfully']);
    }
}
