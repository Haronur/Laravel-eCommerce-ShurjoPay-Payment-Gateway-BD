<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use smasif\ShurjopayLaravelPackage\ShurjopayService;

class ShurjopayController extends Controller
{
    public function index()
    {
        $shurjopay_service = new ShurjopayService(); //Initiate the object
        // dd($shurjopay_service);
        $tx_id = $shurjopay_service->generateTxId(); // Get transaction id. You can use custom id like: $shurjopay_service->generateTxId('123456');
        // dd($tx_id);

        // $success_route = route('Your route'); // optional.

        $payment = $shurjopay_service->sendPayment(2); // You can call simply $shurjopay_service->sendPayment(2) without success route
        dd($payment);
    }
}
