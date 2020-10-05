<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poem;

class PoemController extends Controller
{
    public function show($id)
    {
        return view('poem', ['poem' => Poem::findOrFail($id)]);
    }
}
