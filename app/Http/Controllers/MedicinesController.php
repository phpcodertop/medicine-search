<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MedicinesController extends Controller
{
    public function index()
    {
        return view('medicines');
    }
}
