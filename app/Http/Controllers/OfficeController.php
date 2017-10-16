<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Logic\User\UserRepository;
use Illuminate\Support\Facades\DB;
use App\Models\Organization;
use App\Models\Candidates2013;
use App\Models\Candidates2017;
use App\Models\Office;

class OfficeController extends Controller
{

    public function all()
    {
        $offices = Office::all();

        $boroughs = DB::table('office_sought')->distinct()->get(['borough']);

        return view('frontend.offices', compact('offices', 'boroughs'));
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function find($id)

    {

        $office = DB::table('office_sought')->where('office_sought_id', '=', $id)->first();

        $candidaters = DB::table('2017_candidates')->where('office_sought2017', '=', $id)->leftjoin('organizations', '2017_candidates.organizations2017', 'like', DB::raw("concat('%', organizations.organization_id, '%')"))->select('2017_candidates.*', DB::raw('group_concat(organizations.organization SEPARATOR ", ") as organization_name'))->groupBy('2017_candidates.id')->get();

        $candidates = DB::table('2013_candidates')->where('office_sought2013', '=', $id)->leftjoin('organizations', '2013_candidates.organizations2013', 'like', DB::raw("concat('%', organizations.organization_id, '%')"))->select('2013_candidates.*', DB::raw('group_concat(organizations.organization SEPARATOR ", ") as organization_name'))->groupBy('2013_candidates.id')->get();

        return view('frontend.office', compact('office', 'candidaters', 'candidates'));
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
