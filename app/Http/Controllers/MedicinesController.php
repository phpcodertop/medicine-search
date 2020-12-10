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

    public function datatable()
    {
        $medicines = Medicine::all();
        return DataTables::of($medicines)
            ->addColumn('imageWithUrl', function ($medicine)   {
                return '<a target="_blank" href="'.$medicine['image'].'" >
                Image Url
                </a>';
            })
            ->make(true);
    }
}
