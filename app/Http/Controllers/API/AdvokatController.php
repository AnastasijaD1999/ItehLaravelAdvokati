<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdvokatResource;
use App\Models\Advokat;
use Illuminate\Http\Request;

class AdvokatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advokati = Advokat::all();
        return AdvokatResource::collection($advokati);
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
     * @param  \App\Models\Advokat  $advokat
     * @return \Illuminate\Http\Response
     */
    public function show(Advokat $advokat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advokat  $advokat
     * @return \Illuminate\Http\Response
     */
    public function edit(Advokat $advokat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advokat  $advokat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Advokat $advokat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advokat  $advokat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $advokat = Advokat::find($id);
        if ($advokat) {
            $advokat->delete();
            return response()->json(['Advokat je obrisan!', new AdvokatResource($advokat)]);
        } else {
            return response()->json('Advokat sa traženim id-em ne postoji u bazi podataka!');
        }
    }
}
