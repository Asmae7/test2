<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class invokeC extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
    return "je suis le contrôleur a une seul action";
    }
}
