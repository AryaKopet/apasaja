<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index(Request $request)
    {
        $kategori = $request->input('kategori');
        $materials = Material::when($kategori, function($query, $kategori) {
                return $query->where('kategori', $kategori);
            })
            ->get();
        return view('material.index', compact('materials'));
    }
}

