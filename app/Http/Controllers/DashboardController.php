<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Checkout;


class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Camp')->where('user_id', Auth::user()->id)->get();
        return view('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
