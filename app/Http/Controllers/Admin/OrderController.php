<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $bills = Bill::all();
        return view('admin.orders', [
            'title' => 'Orders',
            'bills' => $bills
        ]);
    }
}
