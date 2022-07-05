<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VendingMachineTransaction;

class VendingMachineTransactionController extends Controller
{
    public function create(Request $request)
    {
        // dd($request->all());
        VendingMachineTransaction::create([
            'original' => $request->all()
        ]);
    }
}
