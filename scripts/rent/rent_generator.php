<?php

/* 
 *  
 * Created On: Jan 14, 2023 12:10
 */

# Print: A4 | Margin: None | Scale: Custom (85% --(OR)-- 67%) 


$start_date = "2022-04-01";
$no_of_months = 10; # For 10 Months.

?>
<style type="text/css">
    body {
        background: rgba(187, 215, 236, 0.3);
/*        background-image: radial-gradient(grey 1px, transparent 0);
        background-size: 10px 10px;
        background-position: -19px -19px;*/
    }
    
    #page {
        width: 600px;
        margin: 0 auto;
        margin-top: 0;
        margin-right: -10px;
        border-left: 1px solid rgba(187, 215, 236, 0.6);
        /*background: url(./bg.png) rgba(187, 215, 236, 0.3) repeat;*/
    }
    .box {
        opacity: 0.9;
        margin: 20px;
    }
    
    .inner-box {
        color: #333 !important;
        padding: 20px;
        min-height: 230px;
        border: 2px dotted rgba(187, 215, 236, 1);
    }
    
    .title {
        font-size: 24px; 
        font-weight: bold;
        color: rgba(87, 135, 171, 1);
    }
    
    .sep {
        margin: 30px 0;
        border: 2px dotted rgba(187, 215, 236, 0.9);
    }
    
    .clr {
        color: rgba(187, 215, 236, 1);
    }
    
    .dash {
        border-bottom: 2px dotted rgba(187, 215, 236, 1);
    }
    
    .header {
        font-size: 20px; 
        letter-spacing: 1px;
    }
    
    .right {
        float: right;
    }
    
    .contents {
        color: #666;
        padding: 20px 0;
        line-height: 35px;
    }
    
    .footer {
        margin-top: 30px;
    }
</style>

<div id="page">
<?php
$start_date = strtotime($start_date);
$space = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
for ($i=1; $i <= $no_of_months; $i++): 
    ?>
        <div class="box">
            <div class="inner-box">
                <div class="header">
                    <b class="title">RENT RECEIPT</b> 
                    <span class="dash"><?php echo $space; ?></span> <b><?php echo date("Y", $start_date); ?></b>
                    <b class="right">No: # <span class="dash"><?php echo $space; ?></span></b>
                </div>
                
                <div class="contents">
                    Received sum of INR <span class="dash"><?php echo $space.$space.$space; ?></span> / month from <span class="dash"><?php echo $space.$space.$space.$space; ?></span>
                    towards the rent of property located at <span class="dash"><?php echo $space.$space.$space.$space.$space.$space.$space.$space.$space; ?></span> for the period from 
                    <span class="dash"><?php echo $space.$space.$space; ?></span> to <span class="dash"><?php echo $space.$space.$space; ?></span>.
                </div>
                
                <div class="footer">
                    <b>Date: </b> <span class="dash"><?php echo $space.$space; ?></span>
                    <div class="right" style="min-width: 200px;">
                        <span>Signature (landlord)</span> <br />
                        <b>Name: </b> <span class="dash"><?php echo $space.$space; ?></span> <br />
                        <b>PAN: </b> <span class="dash"><?php echo $space.$space; ?></span>
                    </div>
                </div>
            </div>
        </div>
    <div class="sep"></div>
    <?php
    
    # Increment 1 month
    $start_date = strtotime("+1 month", $start_date);
    
endfor;
?>
</div>  