<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\Controller;
use App\Models\Food;
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
    public function makePayment(Request $request, Gateway $gateway)
    {
        // get amount (total_price)
        $amount = $this->getAmount($request->foods);

        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $request->token,
            'options' => [
                'submitForSettlement' => True
            ]
        ]);

        if ($result->success) {
            $request['is_paid'] = true;
            $request['total_price'] = $amount;
            OrderController::store($request);
            return response('pagamento buono', 201);
        }
    }

    /**
     * get total_price from a foods array (given from front-end)
     */
    private function getAmount(array $foods)
    {
        $amount = 0;

        foreach ($foods as $food) {
            $amount += Food::findOrFail($food['id'])->price * $food['quantity'];
        }

        return $amount;
    }
}
