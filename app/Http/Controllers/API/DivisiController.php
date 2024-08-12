<?php

namespace App\Http\Controllers\API;

use App\Models\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DivisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(Request $request)
    {
        $query = Division::query();

        if ($request->has('nama_divisi')) {
            $query->where('nama_divisi', 'like', '%' . $request->input('nama_divisi') . '%');
        }

        $divisions = $query->get();

        return response()->json($divisions);
    }
}
