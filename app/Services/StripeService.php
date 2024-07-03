<?php

namespace App\Services;



class StripeService
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
            // Debugging
            dd($customers->data); // Ensure you're getting data here
            return $customers->data;
        } catch (\Exception $e) {
            // Handle any exceptions or errors
            dd($e->getMessage()); // Debugging to check for errors
            return []; // Return empty array or handle error gracefully
        }
    }

    public function listPaymentIntents($limit = 10)
    {
        return PaymentIntent::all(['limit' => $limit]);
    }

    public function listCharges($limit = 10)
    {
        return Charge::all(['limit' => $limit]);
    }
}
