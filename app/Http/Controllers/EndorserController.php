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


class EndorserController extends Controller
{

    public function all()
    {
        $organizations = Organization::all();

        return view('frontend.endorsers', compact('organizations'));
    }
 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function find($id)

    {
        $organization = DB::table('organizations')->where('organization_id', '=', $id)->first();
        $endorsers= DB::table('2013_candidates')->where('organizations2013', 'like', '%'.$id.'%')->leftjoin('office_sought', '2013_candidates.office_sought2013', '=', 'office_sought.office_sought_id')->get();

        $endorserts= DB::table('2017_candidates')->where('organizations2017', 'like', '%'.$id.'%')->leftjoin('office_sought', '2017_candidates.office_sought2017', '=', 'office_sought.office_sought_id')->get();
        return view('frontend.endorser', compact('endorsers', 'endorserts','organization'));
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
