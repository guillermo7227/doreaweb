<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingController extends Controller
{
    public function index()
    {
        return view('hosting.index');
    }

    public function paymentSuccess(Request $request)
    {
        return view('hosting.payment.success');
    }

    public function paymentWaiting(Request $request)
    {
        return view('hosting.payment.waiting');
    }
}