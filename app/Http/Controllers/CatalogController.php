<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $plants = Plant::paginate(5);

        return view('page.catalog', compact('plants'));
    }

    public function show($id)
    {
        $plant = Plant::findOrFail($id);

        return view('page.catalog-detail', compact('plant'));
    }
}