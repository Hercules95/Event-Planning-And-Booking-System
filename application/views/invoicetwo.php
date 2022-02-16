<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Your Grade Miner</title>

    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }

    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }

    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }

    .invoice-box table tr td:nth-child(2){
        text-align: left;
    }



    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }

    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }

    .heading{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }

    .invoice-box table tr.details td{
        padding-bottom:1px solid #eee;
    }

    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }

    .invoice-box table tr.item.last td{
        border-bottom:none;
    }

    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    .inf td, th {
        border: 2px solid #dddddd;

    }
    .head{
            font-size: 18px;
    background-color: #eeeeee;
    padding: 11px;
    text-align: center;
    border-radius: 17px;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }

        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }


    }
</style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <tr>
                        <td class="title">
                            <img style="width: 32%;" src="<?php echo base_url()?>/dist/img/userimage.png"> 
                        </td>
                        <td style="text-align: left;width:300px;">
                            <b>Customer: </b><?php echo $Name?><br>
                            <b>Invoice: </b><?php echo $invoice?><br>
                            <b>Date:</b> <?php echo $created?><br>
                            <b>Email:</b> <?php echo $email?><br>
                            <b>Phone:</b> <?php echo $phone?><br>
                            <b>City:</b> <?php echo $city?>
                        </td>
                    </tr>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <tr width="50px">
                        <td>
                        </td>
                    </tr>
                </td>
            </tr>
        </table>
        <table class="inf">
            <tr class="heading">
                <th style="padding: 12px;">
                    Description
                </th>
                <th style="padding: 12px;">
                    Amount
                </th>
            </tr>
            <tbody>
                <tr>
                    <td><strong> <?php echo $services?></strong></td>
                    <td><strong>$<?php echo $amount?></strong></td>
                </tr>
            </tbody>
        </table>
        <h5 class="head">Thank You For Your Order!</h5>
        <table cellspacing="5px">
            <tr>
                <td>
                <strong>Phone:</strong>  <a href="tel:0-203-868-6644">0000000</a>
                <strong>Email:</strong>  <a href="mailto:event@gmail.com">event@gmail.com</a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
