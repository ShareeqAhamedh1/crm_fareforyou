<?php
 include '../backend/website/conn.php';
 $id = $_REQUEST['id'];

 $sqlPi = "SELECT * FROM tbl_payments_to_customer WHERE pc_id='$id'";
 $rsPi = $conn->query($sqlPi);

 if($rsPi->num_rows > 0){
   $rowPi = $rsPi->fetch_assoc();

   $cp_id = $rowPi['pc_id'];
   $pm_id = $rowPi['pm_id'];
   $cid = $rowPi['c_id'];
 }
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Receipt</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="receipt-container mdl-shadow--4dp">
        <header>
            <img src="https://fareforyou.co.uk/assets/img/logo.png?v=01" alt="Company Logo" class="logo">
            <h1>Customer Payment Receipt</h1>
        </header>

        <main>
            <section class="customer-info">
                <i class="material-icons">person</i>
                <h2>Customer Information</h2>
                <div class="info-grid">
                    <div>
                        <p><strong>Name:</strong></p>
                        <p><?= getDataBack($conn,'tbl_customer_info','c_id',$cid,'c_f_name') ?></p>
                    </div>
                    <div>
                        <p><strong>Phone:</strong></p>
                        <p><?= getDataBack($conn,'tbl_customer_info','c_id',$cid,'c_phone_no') ?></p>
                    </div>
                    <div>
                        <p><strong>Email:</strong></p>
                        <p><?= getDataBack($conn,'tbl_customer_info','c_id',$cid,'c_email') ?></p>
                    </div>
                </div>
            </section>

            <section class="payment-details">
                <i class="material-icons">payment</i>
                <h2>Payment Details</h2>
                <div class="info-grid">
                    <div>
                        <p><strong>Paid Date:</strong></p>
                        <p><?= $rowPi['pc_date'] ?></p>
                    </div>
                    <div>
                        <p><strong>Payment Type:</strong></p>
                        <p>
                          <?= getDataBack($conn,'tbl_payment_method','pm_id',$pm_id,'pm_type') ?>
                          (<?= getDataBack($conn,'tbl_payment_method','pm_id',$pm_id,'pm_ref') ?>)
                        </p>
                    </div>
                    <div>
                        <p><strong>Receipt ID:</strong></p>
                        <p>#RPC 00<?= $rowPi['pc_id'] ?></p>
                    </div>
                </div>
                <div class="payment-summary">
                    <div class="label">Paid Amount :</div>
                    <div class="amount">
                        <span class="material-icons">payments</span>
                        <span>£ <?= $rowPi['pc_amount'] ?></span>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="company-info">
                <h5>Fareforyou limited</h5>
                <p><i class="material-icons">location_on</i> Unit 313, Barking Enterprise Centre, 50 Cambridge Road, Barking, IG11 8FG.</p>
                <p><i class="material-icons">phone</i> 0203 995 8555</p>
            </div>
        </footer>
        <br>
          <p style="text-align:center;margin-top:-5px;font-size:20px;">Thank you for booking with Fareforyou</p>
    </div>

    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script type="text/javascript">
    window.print();
    </script>
</body>
</html>
