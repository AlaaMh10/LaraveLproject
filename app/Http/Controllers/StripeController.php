<?php

namespace App\Http\Controllers;

use App\Models\Indicator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


use Stripe\Stripe;
use Stripe\Customer;
use App\Models\Purchase;
use Stripe\Webhook;
use Stripe\Checkout\Session as StripeSession;

use Illuminate\Http\Request;

class StripeController extends Controller
{
   

    public function __construct()
    {
        Stripe::setApiKey(config('stripe.pk'));

    }


    public function getCustomer($customerId)
    {
        return Customer::retrieve($customerId);
    }

    public function getPaymentIntent($paymentIntentId)
    {
        return PaymentIntent::retrieve($paymentIntentId);
    }

    public function getCharge($chargeId)
    {
        return Charge::retrieve($chargeId);
    }

    public function listCustomers($limit = 10)
    {
    
        try {
            $customers = Customer::all(['limit' => $limit]);
            return view('stripe.customers', ['customers' => $customers]);
        } catch (\Exception $e) {
            // Log or handle the exception
            return view('error', ['message' => $e->getMessage()]);
        }

            // Debugging
            
       
    }

    public function listPaymentIntents($limit = 10)
    {
        return PaymentIntent::all(['limit' => $limit]);
    }

    public function listCharges($limit = 10)
    {
        return Charge::all(['limit' => $limit]);
    }

    public function checkout($id)
{
    $indicator = Indicator::findOrFail($id);


   

    $checkoutSession = StripeSession::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => $indicator->title,
                    'description' => $indicator->description,
                ],
                'unit_amount' => $indicator->price * 100, // amount in cents
            ],
            'quantity' => 1,
        ]],

        

        'mode' => 'payment',
        'success_url' => route('checkout.success')."?session_id={CHECKOUT_SESSION_ID}",
        
        'cancel_url' => route('checkout.cancel'),

    ]);

    return redirect($checkoutSession->url);
}

// public function handle(Request $request,$id,$client_id)
//     {
//         $indicator = Indicator::findOrFail($id);
//         $payload = $request->getContent();
//         $sig_header = $request->header('Stripe-Signature');
//         $endpoint_secret = env('webhook_secret');

//         try {
//             $event = Webhook::constructEvent($payload, $sig_header, $endpoint_secret);

//             if ($event->type == 'charge.succeeded') {
//                 $charge = $event->data->object;

//                 Purchase::create([
//                     'id' => $charge->id,
//                     'amount' => $indicator->price, // Stripe sends amount in cents
//                     'purchase' => "succeed",
//                     'indicator' => $indicator->title,
//                     'client_id' =>  $client_id,// Assuming client_id is stored in metadata
//                     'payment_method' =>  'unknown' // Assuming payment method type is available
                
        
//                 ]);
//             }

//             return response('Webhook handled', 200);
//         } catch (\Exception $e) {
//             return response('Webhook error: ' . $e->getMessage(), 400);
//         }
//     }


    public function success(Request $request)
    {



    $id = Auth::user()->id;
    $data =User::find($id);
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $session_id=$request->get('session_id');
        $session = \Stripe\Checkout\Session::retrieve($session_id);

        // $customer=Customer::retreive($customer_id);

        $line_items = \Stripe\Checkout\Session::allLineItems($session_id, ['limit' => 1]);

        $amount_total = $session->amount_total / 100;

        $product_name = $line_items->data[0]->description;
        Purchase::create([

            'amount' => $amount_total, // Stripe sends amount in cents
            'purchase' => "succeed",
            'indicator' =>  $product_name,
            'client_id'=>$data->id,
            'payment_method' =>  'unknown' // Assuming payment method type is available
        
        ]);
        return view('stripe.success');
    }

    public function cancel()
    {
        $id = Auth::user()->id;
    $data =User::find($id);
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $session_id=$request->get('session_id');
        $session = \Stripe\Checkout\Session::retrieve($session_id);

        // $customer=Customer::retreive($customer_id);

        $line_items = \Stripe\Checkout\Session::allLineItems($session_id, ['limit' => 1]);

        $amount_total = $session->amount_total / 100;

        $product_name = $line_items->data[0]->description;
        Purchase::create([

            'amount' => $amount_total, // Stripe sends amount in cents
            'purchase' => "failed",
            'indicator' =>  $product_name,
            'client_id'=>$data->id,
            'payment_method' =>  'unknown' // Assuming payment method type is available
        
        ]);
        return view('stripe.cancel');
    }


   

    
}













