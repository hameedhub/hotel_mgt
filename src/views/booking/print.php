<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Victoria Inn Suite</title>
    
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
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="<?php echo URL ?>public/images/icon/logo.png" style="width:100%; max-width:100px;">
                            </td>
                            
                            <td>
                                Invoice #: <?php echo $this->user['id']?><br>
                                Date: <?php echo date('d-M-Y'); ?><br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                Victoria Inn, Hotel.<br>
                                16A Okundia Street,<br> Off 2nd Ugbor Road G.R.A<br>
                                Benin City, Nigeria
                            </td>
                            
                            <td>
                            <?php echo $this->user['first_name'] .' '. $this->user['last_name'] ?><br>
                                <?php if(isset($this->user['tel_no'])){
                                    echo 'Phone: '. $this->user['tel_no'];
                                }else{ echo 'Phone: - -';} ?><br>
                                <?php  if(isset($this->user['email'])){
                                        echo 'Email: '. $this->user['email'];
                                }else{ echo "Email:  - -";} ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                <td></td>
                <td>
                    Check #
                </td>
            </tr>
            
            <tr class="details">
                <td>
                    Check
                </td>
                <td></td>
                <td>
                    1000
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Services
                </td>
                <td>
                    Qty
              </td>
                
                <td>
                    Price
                </td>
            </tr>
            <tr class="item last">
                <td>
                <?php echo $this->user['room_name'] .' ('.$this->user['room_type_name'].')'?>
                </td>
                <td>
                <?php 
                                             $check_in = strtotime($this->user['check_in']);
                                              $check_out = strtotime($this->user['check_out']);
                                             $diff = $check_out - $check_in;
                                            $days = round($diff/(60 * 60 * 24));
                                             echo  'Days: '.$days ;
                                              
                                             $room_total = $this->user['price'] * $days;
                                              ?>
                </td>
                <td>
                ₦<?php echo $this->user['price'] ?>
                </td>
            </tr>
          <?php
          $arr_total = array();
          foreach($this->tab as $value){?>
            <tr class="item">
                <td>
                   <?php echo $value['name'] ?>
                </td>
                <td>
                    <?php echo $value['qty']; ?>
                </td>
                <td>
                ₦<?php echo $value['price'] ?>
                </td>
            </tr>

            
          <?php 
        array_push($arr_total, $value['price'] * $value['qty'] );
        }?>
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: ₦<?php echo $room_total +array_sum($arr_total) ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>