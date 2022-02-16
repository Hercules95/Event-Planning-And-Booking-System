 jQuery(function ($) {
        'use strict';
        (function () {
        $(window).on("load", function() {
         var url = $(location).attr('href');
         var fn = url.split('/').reverse()[0];
         var ext = url.split('/').reverse()[0].split('.').reverse()[0];
         var ent = url.split('/').reverse()[0].split('=').reverse()[0];
         var sitem = unescape(ent);
         var sprice = url.split('/').reverse()[0].split('?').reverse()[0].split('&').reverse()[1].split('=').reverse()[0];  
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