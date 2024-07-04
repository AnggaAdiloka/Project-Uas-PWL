<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userDetails = UserDetail::all();
        $carCount = Car::count();
        $transactionCount = Transaction::count();

        return view('dashboard.index', compact('userDetails', 'carCount', 'transactionCount'));
    }
}
