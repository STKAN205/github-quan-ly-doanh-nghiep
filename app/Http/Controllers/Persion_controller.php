<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persion_model;

class Persion_controller extends Controller
{
    // GET /api/persons
    public function index()
    {
        return response()->json(Persion_model::all());
    }

}