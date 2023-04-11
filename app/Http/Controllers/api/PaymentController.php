<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * method to retrieve a client token
     */
    public function getClientToken(Gateway $gateway)
    {
        // pass $clientToken to front-end
        $clientToken = $gateway->clientToken()->generate();

        return response()->json($clientToken);
    }

    /**
     * method to make the payment
     */
    public function makePayment()
    {
    }
}
