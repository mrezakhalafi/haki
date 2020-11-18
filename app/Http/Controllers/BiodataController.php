<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Provinsi;
use App\Kabupaten;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['countries'] = Country::all();

        return view('form-biodata', $data);
    }

    public function getProvinsiByCountryId(Request $request){
        $countryId = $request->countryId ;
        $pronvinsisSelect = Provinsi::where('countries_id', $countryId)->get();
        if($pronvinsisSelect->count() > 0){
            $provinsis = $pronvinsisSelect->toArray();
        }else{
            $provinsis = [];
        }
        return response()->json($provinsis);
    }

    public function getKabupatenByProvinsiId(Request $request){
        $provinsiId = $request->provinsiId ;
        $kabupatensSelect = Kabupaten::where('provinsis_id', $provinsiId)->get();
        if($kabupatensSelect->count() > 0){
            $kabupatens = $kabupatensSelect->toArray();
        }else{
            $kabupatens = [];
        }
        return response()->json($kabupatens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
