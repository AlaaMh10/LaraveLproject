<?php
return[
    'sk'=>env('STRIPE_KEY'),
    'pk'=>env('STRIPE_SECRET'),
    'wk'=>env('webhook_secret')
];
