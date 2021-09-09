<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // count invoice
        $pending = Invoice::where('status', 'pending')->count();
        $success = Invoice::where('status', 'success')->count();
        $expired = Invoice::where('status', 'expired')->count();
        $failed  = Invoice::where('status', 'failed')->count();

        // year and mount
        $year = date('Y');
        $mount = date('m');

        // statistic reveune
        $revenueMonth = Invoice::where('status', 'success')->whereMonth('created_at', '=', $mount)->whereYear('created_at', $year)->sum('grand_total');
        $revenueYear = Invoice::where('status', 'success')->whereYear('created_at', $year)->sum('grand_total');
        $reveuneAll = Invoice::where('status', 'success')->sum('grand_total');

        return view('admin.dashboard.index', compact('pending', 'success', 'expired', 'failed', 'revenueMonth', 'revenueYear', 'reveuneAll'));
    }
}
