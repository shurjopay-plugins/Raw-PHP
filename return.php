<?php

  require_once 'shurjoPay.php';
  $spObject = new shurjoPay();
  $response_data = (object) array('Status'=>'No data found');

  if($_REQUEST['order_id'])
  {
      $order_id = trim($_REQUEST['order_id']);
      $response_data = json_decode($spObject->decrypt_and_validate($order_id));
  }




?>
<html>
    <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">      
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="img">
              <img src="shurjopay-logo.png" alt="" class="center">
              <hr>
            </div>
            	
            	<table id="regForm" class="table table-hover">
            		<?php 

            			if(is_array($response_data)):
                    $response_data = array_shift($response_data);
            			foreach($response_data as $key => $val):

            		?>
            			<tr>
            				<td class="table-info"><?php echo $key?></td>
            				<td><?php print_r ($val);?></td>
            			</tr>
            		<?php

            			endforeach;
            			endif;
                  
            		?>
            		<tr><td colspan="2"><a href="index.php"><b>Back</b></td></tr>
            	</table>
            
          </div>
        </div>
      </div>      
    </body>
</html>