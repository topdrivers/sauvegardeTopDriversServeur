<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="8">
                    <table>
                        <tr>
                            <td class="title" colspan="4">
                                <!-- <img src="{{asset('asset/img/logo.jpeg')}}" style="width:100%; max-width:68px;"> -->
                                <img src="http://165.227.114.124/asset/img/logo.jpeg" style="width:100%; max-width:68px;">                                
                            </td>
                            
                            <td colspan="4" style="text-align: right;">
                                       
                            <h4> TOP DRIVERS </h4> <br>

                            SIRET 834 889 198 00018<br>

                            N° RCS 834889198 RCS. STRASBOURG <br>

                           N° SIREN+RM+67 834 889 198 00018
                            <br>
 

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="8">
                    <table>
                        <tr>
                            <td colspan="4">
                             <b> INVOICE For </b> <br>
                                {{$user->user->first_name}}  {{$user->user->last_name}}<br>
                                {{$user->s_address}}
                            </td>
                            
                            <td colspan="4" style="text-align: right;">
                             <b> INVOICE NO . {{ $user->booking_id }}  </b> <br>
                            10 rue de Neuvic<br>
                            67100 Strabourg<br>
                            France<br>
                            SASU au capital social de 1€<br>
                            VAT N° : FR51834889198<br>
                            website : <a href='https://www.top-drivers.fr'> https://www.top-drivers.fr </a> <br>
                            Phone Number : 03 88 44 00 44<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="details" style="background: #cfe4f6;">
                <td colspan="2">
                   INVOICE
                </td>
                <td colspan="2">
                   Date<br>
                   {{ $user->created_at }}
                    
                </td>
                
                <td colspan="2">
                   Reference<br>
                   {{ $user->booking_id }}
                 
                </td>
                
                <td colspan="2">
                     Date of the Service<br>
                   {{ $user->started_at }}                     
                </td>
            
            </tr>
            
 
            
            <tr class="heading">
                <td>
                    Description
                </td>
                <td>
                    Quantity
                </td>
                  <td>
                    Unity
                </td>
               <td>
                    Unity Price 
                </td>
 
                <td>
                    VAT
                </td>
                <td>
                    Total
                </td>
                
                <td>
                    Promotion
                </td>
            </tr>
            
            <tr class="item" >               
                    <td>{{$user->s_address}} -> {{$user->d_address}} </td>
                    <td>1</td>
                    <td>KM</td>
                    <td>{{ $base_fare }} €</td>               
                    <td >{{ $user->payment->tax}}  €</td>
                    <td  style="text-align: right;">{{ $user->payment->total_amount_given}} €</td>
                    <td style="text-align: right;"> {{ $user->payment->discount}} €</td>
                
            </tr>
            
            <tr class="item">
                 <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>           
 
            
            <tr class="total" style="text-align: right;">
                <td  colspan="4"> Total </td>
                <td  colspan="4"> {{ $user->payment->total_amount_given}} € </td>
            </tr>
            
            <tr class="total" style="text-align: center;background: #cfe4f6;">
                <td  colspan="8"> <b> <i> Thankyou for Your Business </i> </b> </td>                 
            </tr>

        </table>
    </div>
</body>
</html>
