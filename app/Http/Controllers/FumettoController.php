<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class FumettoController extends Controller
{
    public function index()
{
    $comics = fu::all();
    return view('comics.index', compact('comics'));
}
}
