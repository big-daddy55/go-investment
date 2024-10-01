<?php
// Retrieve the authorization URL from the query parameter
?>

<!-- Display the payment form or iframe on your page -->
<iframe id="paystack-iframe" src="<?= $authorization_url ?>" width="100%" height="800"></iframe>


<!-- Add a hidden form to receive Paystack callback data
<form id="paystack-callback-form" method="post" action="https://webhook.site/e8cd187f-5154-40b1-9490-1bce899ed4fb">
    <input type="hidden" name="paystack-data" id="paystack-data">
</form> -->

<!-- JavaScript to handle Paystack callback data -->
<script>
    // Listen for the iframe load event
    document.getElementById('paystack-iframe').addEventListener('load', function() {
        // Once the iframe is loaded, set up the event listener for Paystack callback
        window.addEventListener('message', function(event) {
            if (event.origin === 'https://checkout.paystack.com') {
                // Parse the received JSON data
                var paystackData = JSON.parse(event.data);

                // Log the received data to the console for debugging
                console.log('Received Paystack callback data:', paystackData);

                // Send the data to your server using fetch
                fetch('/callback', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(paystackData),
                    })
                    .then(response => {
                        // Log the HTTP status for additional information
                        console.log('HTTP Status:', response.status);

                        // Check if the response is successful (status code 2xx)
                        if (response.ok) {
                            return response.json();
                        } else {
                            // If the response is not successful, throw an error
                            console.error('Error Status:', response.status);
                            throw new Error('Network response was not ok');
                        }
                    })
                    .then(data => {
                        // Handle the response from the server if needed
                        console.log('Server response:', data);
                    })
                    .catch(error => {
                        console.error('Error sending data to server:', error);
                        console.error('Error details:', error.message, error.stack);
                    });
            }
        });
    });
</script>