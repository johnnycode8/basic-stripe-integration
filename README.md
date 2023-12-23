# Basic Stripe Integration Points - PHP Quick Start
**Companion tutorial:** https://youtu.be/v3umP14nCYU

Stripe is a online payment processor like Paypal. I use Stripe to process credit card payments for restaurant (https://veggielee.com) pick-up orders. This demo project shows the bare minimum amount of PHP code needed to integrate with Stripe's APIs. It focuses on the integration points and not worry about how the shopping cart works or any of the user interfaces.

**Prerequisites:**
* Create an account https://stripe.com
* After cloning the code, create a config.php file with the following:
```
<?php
define('STRIPE_SECRET_KEY','<YOUR STRIPE SECRET KEY>');
```

**References:**
* Stripe SDK https://stripe.com/docs/development/quickstart?lang=php#test-install 
* Stripe API https://stripe.com/docs/api
