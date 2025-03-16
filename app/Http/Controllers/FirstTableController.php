<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FirstTable; // Import the model

class FirstTableController extends Controller
{
    public function index()
    {
        // Get all records from the first_table
        $data = FirstTable::all();

        // Return a view with the data
        return view('first_table.index', compact('data'));
    }
}
