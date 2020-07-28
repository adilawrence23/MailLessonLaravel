<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Support\Facades\Notification;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');// resources/views/payments/create.blade.php
    }

    public function store()
    {
        // request()->user()->notify(new PaymentReceived());
        Notification::send(request()->user(),new PaymentReceived(900));
    }
}
