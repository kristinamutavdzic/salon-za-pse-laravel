<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TerminResource;
use App\Models\Termin;

class TerminController extends Controller
{
    public function index()
    {
        $termini = Termin::all();
        return TerminResource::collection($termini);
    }

    public function show( Termin $termin)
    {
        return new TerminResource($termin);
    }

    public function destroy(Termin $termin)
    {
        $termin->delete();
        return response()->json('Uspešno obrisan termin!');
    }
}
