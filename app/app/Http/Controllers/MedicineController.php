<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {

        $medicines = Medicine::all();

        return view('partials.account-info', compact('medicines'));
    }
}
