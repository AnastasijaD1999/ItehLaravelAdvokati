<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdvokatskaKancelarijaResource;
use App\Models\AdvokatskaKancelarija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdvokatskaKancelarijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kancelarije = AdvokatskaKancelarija::all();
        return AdvokatskaKancelarijaResource::collection($kancelarije);
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
     * @param  \App\Models\AdvokatskaKancelarija  $advokatskaKancelarija
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kancelarija = AdvokatskaKancelarija::find($id);
        return new AdvokatskaKancelarijaResource($kancelarija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvokatskaKancelarija  $advokatskaKancelarija
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvokatskaKancelarija $advokatskaKancelarija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvokatskaKancelarija  $advokatskaKancelarija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'adresa' => 'required|string',
            'email' => 'required|email',
            'website' => 'required|string'
        ]);


        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $kancelarija = AdvokatskaKancelarija::find($id);

        if ($kancelarija) {
            $kancelarija->naziv = $request->naziv;
            $kancelarija->adresa = $request->adresa;
            $kancelarija->email = $request->email;
            $kancelarija->website = $request->website;

            $kancelarija->save();

            return response()->json(['Kancelarija je izmenjena!', new AdvokatskaKancelarijaResource($kancelarija)]);
        } else {
            return response()->json('Kancelarija sa traženim id-em ne postoji u bazi podataka!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvokatskaKancelarija  $advokatskaKancelarija
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kancelarija = AdvokatskaKancelarija::find($id);
        if ($kancelarija) {
            $kancelarija->delete();
            return response()->json(['Kancelarija je obrisana!', new AdvokatskaKancelarijaResource($kancelarija)]);
        } else {
            return response()->json('Kancelarija sa traženim id-em ne postoji u bazi podataka!');
        }
    }
}
