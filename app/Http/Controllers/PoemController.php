<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poem;

class PoemController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('poem', ['poem' => Poem::findOrFail($id)]);
    }
}
