<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
 
    public function index()
    {
        // $date_now = Carbon::now();
        // $date_parse = Carbon::parse(now());

        // $e_all = Admin::all();
        // $q_get =  DB::table('admins')->select('name', 'created_at')->get();
        // $q_first = DB::table('admins')->select('name')->first();

        // $c_test = collect([
        //     'name' => 'テスと'
        // ]);

        // dd($e_all, $q_get, $q_first, $c_test);
        $users = User::select('name', 'email', 'created_at')->get();
        return view('admin.users.index',
        compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
