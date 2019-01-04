<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Basic Detail</title>


    </head>
    <body>
       
        <h1>Buy Detail Service</h1>

       
        <form action="/purchases" method="POST">
            {{ csrf_field() }}
            <script
              src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="{{ config('services.stripe.key') }}"
              data-amount="6000"
              data-name="Basic Detail"
              data-description="Foam treatment guaranteed to get their knees bent"
              data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
              data-locale="auto"
              data-zip-code="true">
            </script>
          </form>

    </body>
</html>
