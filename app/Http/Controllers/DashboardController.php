<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $orders = Order::all();
        $products = Product::all();
        $suppliers = Supplier::all();

        return view('admin.dashboard', compact('customers', 'orders', 'products', 'suppliers'));
    }
}
