<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\FrizerResource;
use App\Models\Frizer;

class FrizerController extends Controller
{
    public function index()
    {
        $frizeri = Frizer::all();
        return FrizerResource::collection($frizeri);
    }

    public function show( Frizer $frizer)
    {
        return new FrizerResource($frizer);
    }

    public function update(Request $request, Frizer $frizer)
    {
        $validator = Validator::make($request->all(), [
            'imePrezime' => 'required',
            'godine_iskustva' => 'required',
            'rang' => 'required',
            'kontakt' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $frizer->imePrezime = $request->imePrezime;
        $frizer->godine_iskustva = $request->godine_iskustva;
        $frizer->rang = $request->rang;
        $frizer->kontakt = $request->kontakt;

        $frizer->save();

        return response()->json(['Uspešno izmenjen frizer!', new FrizerResource($frizer)]);
    }

    public function destroy( $frizer)
    {
        $frizer->delete();
        return response()->json('Uspešno obrisan frizer!');
    }
}
