<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $totalMedicines = Medicine::count();

        $lowStockMedicines = Medicine::where('StockQuantity', '<', 10)->count();

        $outOfStockMedicines = Medicine::where('StockQuantity', 0)->count();

        $medicinesExpiringSoon = Medicine::where('ExpiryDate', '<=', Carbon::now()->addDays(30))
                                          ->orderBy('ExpiryDate', 'asc')
                                          ->get();
        $medicines = Medicine::all();
        return view('dashboard', compact(
            'totalMedicines',
            'lowStockMedicines',
            'outOfStockMedicines',
            'medicinesExpiringSoon',
            'medicines'
        ));
    }
}
