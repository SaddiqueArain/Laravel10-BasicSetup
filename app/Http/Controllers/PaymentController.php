<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function payWithStripe(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
            'amount' => $request->amount * 100,
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'description' => 'Payment',
        ]);

        return redirect()->back()->with('success', 'Payment successful');
    }

    public function showPaymentForm()
    {
        return view('payment');
    }
}
