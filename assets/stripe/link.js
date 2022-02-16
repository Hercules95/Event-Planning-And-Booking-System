 jQuery(function ($) {
         
             'use strict';
         
             /* ======= Blank Wrapper ======= */
             (function () {
         
                 $(window).on("load", function() {
         
                     var url = $(location).attr('href');
         
         //Setting the URL statically
         
         
         // Getting the file name i.e last segment of URL (i.e. example.html)
         var fn = url.split('/').reverse()[0];
         
         // Getting the extension (i.e. html)
         var ext = url.split('/').reverse()[0].split('.').reverse()[0];
         var ent = url.split('/').reverse()[0].split('=').reverse()[0];
         var sitem = unescape(ent);
         
         var sprice = url.split('/').reverse()[0].split('?').reverse()[0].split('&').reverse()[1].split('=').reverse()[0];
         
         //var pricee = parseFloat(price).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
         $('#calculated_total').append(sprice)
         $('.itemname').val(sitem);
         $('.itemprice').val(sprice);
         $('.itemName').text(sitem);
         $('.itemPrice').append(sprice);
         
         });
         
               
         
         }());
         
         });
         $(document).ready(function(){
         
             $('.paypal').hide();
             $('.credit').show();
             $('#shipping_1').click();
             $('.spinner').hide();
         
             $('#shipping_1').on('click',function(){
                 $('.paypal').fadeOut();
                 $('.credit').fadeIn();
         
             });
             $('#shipping_2').on('click',function(){
                 $('.paypal').fadeIn();
                 $('.credit').fadeOut();
             });
         });