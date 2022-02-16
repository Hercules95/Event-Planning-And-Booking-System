<!DOCTYPE html>
<html lang='en' ng-app="myApp" ng-controller="myController">
   <head>
      <title>Checkout</title>
      <meta charset="UTF-8" />
      <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
      <!-- view -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- favicon icon -->
      <link rel="shortcut icon" href="<?php echo base_url()?>stripe/payment.png" />
      <!-- Order css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>stripe/order/css/pay/checkout.css" />
      <!-- bootstrap -->
      <link href="<?php echo base_url()?>stripe/bootstrap.css" rel="stylesheet">
      <!-- font -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <!-- icofont -->
      <link href="<?php echo base_url()?>stripe/icofont/css/icofont.css" rel="stylesheet" type="text/css" />
      <!-- font-awesome -->
      <link href="<?php echo base_url()?>stripe/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <!-- crousel css -->
      <link href="<?php echo base_url()?>stripe/js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
      <!--bootstrap select-->
      <link href="<?php echo base_url()?>stripe/js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
      <!-- stylesheet -->
      <link href="<?php echo base_url()?>stripe/css/style.css" rel="stylesheet" type="text/css"/>
     
   </head>
   <body>
      <div class="container">
      <div class="row image">
         <!-- Website Logo Starts -->
         <a href="<?php echo site_url('home')?>"><img class="img-responsive" src="<?php echo base_url()?>stripe/payment.png" alt="logo" title="logo" /></a>
         <!-- Ends -->
      </div>
      <div class="row">
         <div class="col-sm-6">
            <div class="col-sm-12 border" id="grid">
               <div class="number">
                  <span>1</span>
               </div>
               <div>
                  <h1 class="head">Personal Details</h1>
               </div>
               <div class="go-right" id="step2">
                  <form class="go-right">
                     <div>
                        <input type="text" id="firstname2" name="first_name" ng-model="firstname" placeholder="First Name" required/>
                     </div>
                     <div>
                        <input type="text" id="lastname2" name="last_name" ng-model="lastname" placeholder="Last Name" required/>
                     </div>
                     <div>
                        <input type="text" id="email2" ng-model="email"  placeholder="Email Address" required/>
                     </div>
                     <div>
                      <input type="text" id="phone2" name="telephone" ng-model="phone" placeholder="Mobile" data-trigger="change" data-validation-minlength="1" data-type="number" data-required="true" data-error-message="Enter Your Telephone Number" class="ng-touched ng-not-empty ng-dirty ng-valid-parse ng-valid ng-valid-required">
                   </div>
                        <div>
                           <input type="text" id="address2" name="address" ng-model="address" placeholder="Address" required/>
                        </div>
                        <div>
                           <input id="city2" type="text" name="city" ng-model="city"  placeholder="City" required/>
                        </div>
                        <div>
                           <div class="state_options">
                              <div class="select">
                                 <select  ng-model="state">
                                    <option value="">State</option>
                                    <optgroup label="Australian Provinces">
                                       <option value="-AU-NSW">New South Wales</option>
                                       <option value="-AU-QLD">Queensland</option>
                                       <option value="-AU-SA">South Australia</option>
                                       <option value="-AU-TAS">Tasmania</option>
                                       <option value="-AU-VIC">Victoria</option>
                                       <option value="-AU-WA">Western Australia</option>
                                       <option value="-AU-ACT">Australian Capital Territory</option>
                                       <option value="-AU-NT">Northern Territory</option>
                                    </optgroup>
                                    <optgroup label="Canadian Provinces">
                                       <option value="AB">Alberta</option>
                                       <option value="BC">British Columbia</option>
                                       <option value="MB">Manitoba</option>
                                       <option value="NB">New Brunswick</option>
                                       <option value="NF">Newfoundland</option>
                                       <option value="NT">Northwest Territories</option>
                                       <option value="NS">Nova Scotia</option>
                                       <option value="NVT">Nunavut</option>
                                       <option value="ON">Ontario</option>
                                       <option value="PE">Prince Edward Island</option>
                                       <option value="QC">Quebec</option>
                                       <option value="SK">Saskatchewan</option>
                                       <option value="YK">Yukon</option>
                                    </optgroup>
                                    <optgroup label="US States">
                                       <option value="AL">Alabama</option>
                                       <option value="AK">Alaska</option>
                                       <option value="AZ">Arizona</option>
                                       <option value="AR">Arkansas</option>
                                       <option value="BVI">British Virgin Islands</option>
                                       <option value="CA">California</option>
                                       <option value="CO">Colorado</option>
                                       <option value="CT">Connecticut</option>
                                       <option value="DE">Delaware</option>
                                       <option value="FL">Florida</option>
                                       <option value="GA">Georgia</option>
                                       <option value="GU">Guam</option>
                                       <option value="HI">Hawaii</option>
                                       <option value="ID">Idaho</option>
                                       <option value="IL">Illinois</option>
                                       <option value="IN">Indiana</option>
                                       <option value="IA">Iowa</option>
                                       <option value="KS">Kansas</option>
                                       <option value="KY">Kentucky</option>
                                       <option value="LA">Louisiana</option>
                                       <option value="ME">Maine</option>
                                       <option value="MP">Mariana Islands</option>
                                       <option value="MPI">Mariana Islands (Pacific)</option>
                                       <option value="MD">Maryland</option>
                                       <option value="MA">Massachusetts</option>
                                       <option value="MI">Michigan</option>
                                       <option value="MN">Minnesota</option>
                                       <option value="MS">Mississippi</option>
                                       <option value="MO">Missouri</option>
                                       <option value="MT">Montana</option>
                                       <option value="NE">Nebraska</option>
                                       <option value="NV">Nevada</option>
                                       <option value="NH">New Hampshire</option>
                                       <option value="NJ">New Jersey</option>
                                       <option value="NM">New Mexico</option>
                                       <option value="NY">New York</option>
                                       <option value="NC">North Carolina</option>
                                       <option value="ND">North Dakota</option>
                                       <option value="OH">Ohio</option>
                                       <option value="OK">Oklahoma</option>
                                       <option value="OR">Oregon</option>
                                       <option value="PA">Pennsylvania</option>
                                       <option value="PR">Puerto Rico</option>
                                       <option value="RI">Rhode Island</option>
                                       <option value="SC">South Carolina</option>
                                       <option value="SD">South Dakota</option>
                                       <option value="TN">Tennessee</option>
                                       <option value="TX">Texas</option>
                                       <option value="UT">Utah</option>
                                       <option value="VT">Vermont</option>
                                       <option value="USVI">VI U.S. Virgin Islands</option>
                                       <option value="VA">Virginia</option>
                                       <option value="WA">Washington</option>
                                       <option value="DC">Washington, D.C.</option>
                                       <option value="WV">West Virginia</option>
                                       <option value="WI">Wisconsin</option>
                                       <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="US">
                                       <option value="LD">London</option>
                                       <option value="WM">West Midlands</option>
                                       <option value="GM">Greater Manchester</option>
                                       <option value="WY" >West Yorkshire</option>
                                       <option value="KT">Kent</option>
                                       <option value="MS">Merseyside</option>
                                       <option value="Ess">Essex</option>
                                       <option value="SY">South Yorkshire</option>
                                       <option value="HP">Hampshire </option>
                                       <option value="SU">Surrey </option>
                                       <option value="TW">Tyne and Wear</option>
                                       <option value="HF">Hertfordshire</option>
                                       <option value="LAN">Lancashire</option>
                                       <option value="NOT">Nottinghamshire</option>
                                       <option value="CH">Cheshire</option>
                                       <option value="SS">Staffordshire</option>
                                       <option value="DS">Derbyshire</option>
                                       <option value="NF">Norfolk</option>
                                       <option value="WS">West Sussex</option>
                                       <option value="NS">Northamptonshire</option>
                                       <option value="OX">Oxfordshire</option>
                                       <option value="De">Devon</option>
                                       <option value="SF">Suffolk</option>
                                       <option value="ls">Lincolnshire</option>
                                       <option value="GS">Gloucestershire</option>
                                       <option value="LS">Leicestershire</option>
                                       <option value="CG">Cambridgeshire</option>
                                       <option value="ES">East Sussex </option>
                                       <option value="Dur">Durham  </option>
                                       <option value="Bri">Bristol </option>
                                       <option value="WS">Warwickshire  </option>
                                       <option value="BH">Buckinghamshire </option>
                                       <option value="WY">North Yorkshire </option>
                                       <option value="BS">Bedfordshire  </option>
                                       <option value="Cum">Cumbria </option>
                                       <option value="SS">Somerset  </option>
                                       <option value="CW">Cornwall</option>
                                       <option value="WS">Wiltshire</option>
                                       <option value="SS">Shropshire</option>
                                       <option value="LC">Leicester</option>
                                       <option value="WS">Worcestershire</option>
                                       <option value="KH">Kingston upon Hull</option>
                                       <option value="Ply">Plymouth</option>
                                       <option value="ST">Stoke-on-Trent</option>
                                       <option value="Der">Derby</option>
                                       <option value="Dor">Dorset</option>
                                       <option value="Not">Nottingham</option>
                                       <option value="SA">Southampton</option>
                                       <option value="BAH">Brighton and Hove</option>
                                       <option value="HS">Herefordshire</option>
                                       <option value="WL">Northumberland</option>
                                       <option value="PM">Portsmouth</option>
                                       <option value="EY">East Riding of Yorkshire</option>
                                       <option value="Lu">Luton</option>
                                       <option value="SW">Swindon</option>
                                       <option value="SS">Southend-on-Sea</option>
                                       <option value="Y">York</option>
                                       <option value="SG">South Gloucestershire</option>
                                       <option value="MK">Milton Keynes</option>
                                       <option value="Bour">Bournemouth</option>
                                       <option value="NS">North Somerset</option>
                                       <option value="WT">Warrington</option>
                                       <option value="PB">Peterborough</option>
                                       <option value="Read">Reading </option>
                                    </optgroup>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div>
                           <div class="country_options">
                              <div class="select">
                                 <select id="country2" name="country" ng-model="selectedcountry" ng-options="country.country_name for country in countries track by country.country_code">
                                    <option value="Non">Select Country</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="col-sm-6">
            <div class="col-sm-12 bord">
               <div class="number">
                  <span>2</span>
               </div>
               <h1 class="head">Payment Information</h1>
               <hr>
               <div class="go-right" id="payment">
                  <div class="left">
                     <form action="<?php echo site_url('checkout/process')?>" method="post" id="payment-form">
                        <div class="form-row">
                           <label for="card-element">
                              Credit or debit card
                           </label>
                           <div id="card-element">
                           </div>
                           <div id="card-errors" role="alert"></div>
                        </div>
                        <input type="hidden" id="itemname"  name="itemname" class="itemname" value=""/>
                        <input type="hidden" id="itemprice" name="itemprice" class="itemprice" value=""/>
                        <input type="hidden" id="currency"  name="currency" class="currency" value="AUD"/>
                        <input type="hidden" id="firstname" name="firstname" value="{{ firstname }}"/>
                        <input type="hidden" id="lastname"  name="lastname" value="{{ lastname }}"/>
                        <input type="hidden" id="EventId"   name="EventId"   value="<?php echo $EventId?>">
                        <input type="hidden" id="EventName" name="EventName" value="<?php echo $EventName?>">
                        <input type="hidden" id="email"     name="email" value="{{ email }}"/>
                        <input type="hidden" id="phone"     name="phone" value="{{ phone }}"/>
                        <input type="hidden" id="company"   name="company" value="Event Planning"/>
                        <input type="hidden" id="address"   name="address" value="{{ address }}"/>
                        <input type="hidden" id="city"      name="city" value="{{ city }}"/>
                        <input type="hidden" id="state"     name="state" value="{{ state }}"/>
                        <input type="hidden" id="country"   name="country" value="{{ selectedcountry }}"/>
                        <button  class="pay">Submit Payment</button>
                     </form>
                     <div>
                        <img style="margin-left: 152px;height: 67px;font-size: 19px; display:none;" class="spinner" src="<?php echo base_url()?>stripe/images/loading.gif" alt=""> 
                     </div>
                  </div>
               </div>
            </div>
            <br><br>
            <div class="col-sm-12 bordorder">
               <div class="number">
                  <span>3</span>
               </div>
               <h1 class="head">Order Details</h1>
               <table class="ordered" id="final_products">
                  <tr>
                     <th>
                        Tittle:
                     </th>
                     <td>
                        <span class="titles"><?php echo $EventName?></span>
                     </td>
                  </tr>
                  <tr>
                     <th>
                        Name:
                     </th>
                     <td>
                        <span class="name">{{firstname}}&nbsp{{lastname}}</span>
                     </td>
                  </tr>
                  <tr>
                     <th>
                        Email:
                     </th>
                     <td>
                        <span class="location">{{email}}</span>
                     </td>
                  </tr>
                  <tr>
                     <th>
                       City
                     </th>
                     <td>
                        <span>{{city}}</span>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        Seats:
                        <b><span style="font-size: 16px;" class="itemName"></span></b>
                     </td>
                     <td>
                        Amount:
                        <b><span style="font-size: 24px;" class="itemPrice">$</span></b>
                     </td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
      <!-- Jquery -->
      <script src="<?php echo base_url()?>stripe/js/jquery-2.1.3.min.js"></script>
      <!-- ALert Messages -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- Stirpe v3 -->
      <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
      <script src="<?php echo base_url()?>stripe/js/stripe.js"></script>
      <!-- Stripe v3 ends -->
      <script src="<?php echo base_url()?>stripe/angular.min.js"></script>
      <!-- country code -->
      <script src="<?php echo base_url()?>stripe/js/country.js"></script>
      <!-- split links -->
      <script src="<?php echo base_url()?>stripe/link.js"></script>
      <script type="text/javascript">
      function isNumber(evt) {
          evt = (evt) ? evt : window.event;
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode > 31 && (charCode < 48 || charCode > 57)) {
              return false;
          }
          return true;
      }
      </script>
   </body>
</html>