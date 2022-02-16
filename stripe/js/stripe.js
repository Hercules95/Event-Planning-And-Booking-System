// Create a Stripe client.
         var stripe = Stripe('pk_test_51JSrexAP1nhjCw3EBEbYutaMbgdZnKxlodWWm4N1nX8RcB7k9oxzOIitwzOZPGbNlbGYR6bGnkCiQwm3M5Uss61S00fcEvF17W');
         // Create an instance of Elements.
         var elements = stripe.elements();
         // Custom styling can be passed to options when creating an Element.
         // (Note that this demo uses a wider set of styles than the guide below.)
         var style = {
         base: {
         color: '#32325d',
         lineHeight: '18px',
         fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
         fontSmoothing: 'antialiased',
         fontSize: '16px',
         '::placeholder': {
         color: '#aab7c4'
         }
         },
         invalid: {
         color: '#fa755a',
         iconColor: '#fa755a'
         }
         };
         // Create an instance of the card Element.
         var card = elements.create('card', {style: style});
         // Add an instance of the card Element into the `card-element` <div>.
         card.mount('#card-element');
         // Handle real-time validation errors from the card Element.
         card.addEventListener('change', function(event) {
         var displayError = document.getElementById('card-errors');
         if (event.error) {
         displayError.textContent = event.error.message;
         } else {
         displayError.textContent = '';
         }
         });
         // Create a source or display an error when the form is submitted.
         var form = document.getElementById('payment-form');
         form.addEventListener('submit', function(event) {
         event.preventDefault();
         function isValidEmailAddress(emailAddress) {
         var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
          return pattern.test(emailAddress);
         };
          	
          if($('#firstname2').val() == "" || $('#lastname2').val() == "" || $('#email2').val() == "" || $('#phone2').val() == "" || $('#company2').val() == "" || $('#address2').val() == "" || $('#city2').val() == "")
          {
          	swal({
          		title: "All The Information Is Required.!",
          		text: "Please Fill All The Details Correctly!",
          		icon: "error",
          		button: "ok!",
          	});
          
          }
          else if(!isValidEmailAddress($('#email2').val()))
          {
            swal({
              title: "Your Email Is Not Correct!",
              text: "Please Write Your Email Correctly!",
              icon: "error",
              button: "ok!",
            });
          }
          else if($('#phone2').val().length < 10 ) 
          {
               swal({
              title: "Phone Number Is Invalid!",
              text: "",
              icon: "error",
              button: "ok!",
            });
          }
          else if($('#firstname2').val().trim() == "" || $('#lastname2').val().trim() == "" || $('#email2').val().trim() == "" || $('#phone2').val().trim() == ""  || $('#address2').val().trim() == "" || $('#city2').val().trim() == "")
          {
            swal({
              title: "All The Information Is Required.!",
              text: "Please Fill All The Details Correctly!",
              icon: "error",
              button: "ok!",
            });

          }
          else
          {
          
          stripe.createSource(card).then(function(result) {
         if (result.error) {
         // Inform the user if there was an error
         var errorElement = document.getElementById('card-errors');
         errorElement.textContent = result.error.message;
         } else {
          $('.spinner').show();
         // Send the source to your server
         stripeSourceHandler(result.source);
         }
         });

          }
        
         });
         function stripeSourceHandler(source) {
         // Insert the source ID into the form so it gets submitted to the server
         var form = document.getElementById('payment-form');
         var hiddenInput = document.createElement('input');
         hiddenInput.setAttribute('type', 'hidden');
         hiddenInput.setAttribute('name', 'stripeSource');
         hiddenInput.setAttribute('value', source.id);
         form.appendChild(hiddenInput);
         
         // Submit the form
         form.submit();
         }