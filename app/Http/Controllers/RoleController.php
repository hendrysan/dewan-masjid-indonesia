<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class RoleController extends Controller
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
            $model = Role::query();

            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $button = '<a href="' . route('cms.roles.edit', $data->id) . '"  class="edit btn btn-primary btn-sm"><span class="fas fa-pencil-alt"></span></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" data-id="' . $data->id . '" class="delete btn btn-danger btn-sm"><span class="fas fa-trash"></span></button>';



                    return $button;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('cms.role.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cms.role.create');
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

        $role = new Role();
        $role->name = Str::title($request->name);
        $role->save();
        alert()->success('success', 'Role berhasil di tambahkan');

        return redirect()->route('cms.roles');
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
        $role = Role::find($id);

        if (!$role) {
            alert()->error('error', 'Role tidak di temukan');
            return redirect()->route('cms.roles');
        }

        return view('cms.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $role = Role::find($id);

        if (!$role) {
            alert()->error('error', 'Role tidak di temukan');
            return redirect()->route('cms.role.edit', ['id' => $id]);
        }
        $role->name = Str::title($request->name);
        $role->save();
        alert()->success('success', 'Role berhasil di ubah');
        return redirect()->route('cms.roles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $role = Role::find($id);

        if (!$role) {
            alert()->error('error', 'Role not found');
            return redirect()->route('cms.roles');
        }

        $role->delete();

        alert()->success('success', 'Role berhasil di hapus');
        return response()->json(['success' => 'Role berhasil di hapus']);
    }

    public function json_request(Request $request)
    {
        $roles = Role::all();
        return response()->json($roles);
    }
}
