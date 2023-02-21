<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookStayController extends Controller
{
    public function checkout(Request $request) {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'accommodation_id' => 'required|integer'
        ]);
    }
}
