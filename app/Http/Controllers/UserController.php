<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
            $model = User::query();

            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->addColumn('role', function ($data) {
                    return $data->role->name;
                })
                ->addColumn('action', function ($data) {
                    $button = '<a href="' . route('cms.users.edit', $data->id) . '"  class="edit btn btn-primary btn-sm"><span class="fas fa-pencil-alt"></span></a>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" data-id="' . $data->id . '" class="delete btn btn-danger btn-sm"><span class="fas fa-trash"></span></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        $total_user = 0;
        $total_administrator = 1;
        $total_verifikator = 2;
        $total_operator = 2;
        return view('cms.user.index', compact('total_user', 'total_administrator', 'total_verifikator', 'total_operator'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('cms.role.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = new Vilage();
        $user->role_id = $request->subdistrict_id;
        $user->name = Str::title($request->name);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        alert()->success('success', 'User berhasil di tambahkan');

        return redirect()->route('cms.users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            alert()->error('error', 'User tidak di temukan');
            // Alert::warning('Error', 'Desa tidak di temukan');
            return redirect()->route('cms.users');
        }
        $roles = Role::all();
        return view('cms.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Vilage::find($id);

        if (!$user) {
            alert()->error('error', 'User tidak di temukan');
            return redirect()->route('cms.user.edit', ['id' => $id]);
        }
        $user->role_id = $request->subdistrict_id;
        $user->name = Str::title($request->name);
        $user->email = $request->email;

        if ($user->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        alert()->success('success', 'User berhasil di ubah');
        return redirect()->route('cms.users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            alert()->error('error', 'User tidak di temukan');
            return redirect()->route('cms.users');
        }

        $user->delete();

        alert()->success('success', 'Desa berhasi di hapus');
        return response()->json(['success' => 'Desa deleted successfully']);
    }
}
