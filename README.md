### PHP shurjoPay(V2) Plugin ###
	This repository is to integrate shurjoPay with Raw PHP.
	
### Postmane Documentations

    This document will illustrate the overall request and response flow.
    URL : https://documenter.getpostman.com/view/6335853/U16dS8ig	
	
	
### How do I get set up? ###
	## Step 1: ##
	Upload all the files of this repository to your web root(i.e. localhost or your-domain-name).
	It is recommended to create a shurjopay folder and upload the files within it. 
	(i.e. localhost/<YOUR-PROJECT-NAME>/shurjopay/index.php OR your-domain-name/shurjopay/index.php)
	Go to browser and point the folder (i.e. localhost/shurjopay/ )your need.
	
	## Step 2: ##
		Set up the config.php file with the live credentials given to you after getting on-boarded with shurjoPay.
		For example:
			define('USERNAME','<USERNAME-PROVIDED-BY-SHURJOPAY>');
			define('PASSWORD','<PASSWORD-PROVIDED-BY-SHURJOPAY>');
			define('TESTMODE', FALSE);
			define('PREFIX','NOK');

		Note that, if you are trying to integrate with sandbox then do not change anything in config.php.
	
	## Step 3: ##
		Change the $return_url before passing the checkout form data.
		For reference, check the sp.php file.
		For example: $return_url = 'http://localhost/<YOUR-PROJECT-FOLDER-NAME>/shurjopay/return.php';
		(You can customize the return.php file with the necessary front-end utilities if you like to.)

	## Step 4: ##
		Call the "generate_shurjopay_form($payload)" function and pass the necessary checkout datas as an array parameter in it.
		For reference, check the sp.php file.
		Example of the $payload:
		$payload = array(
		      'currency' => 'BDT',
		      'return_url' => $return_url,
		      'cancel_url' => $return_url,
		      'amount' => $amount,                
		      // Order information
		      'prefix' => 'NOK',
		      'order_id' => '42',
		      'discsount_amount' => 0,
		      'disc_percent' => 0,
		      // Customer information
		      'client_ip' => '127.0.0.1',                
		      'customer_name' =>  'CUSTOMER NAME',
		      'customer_phone' => '01818555555',
		      'email' => 'test@example.com',
		      'customer_address' => 'Dhaka',                
		      'customer_city' => 'Dhaka',
		      'customer_state' => 'Dhaka',
		      'customer_postcode' => '1207',
		      'customer_country' => 'Bangladesh',
		      'value1' => 'value1',
		      'value2' => 'value2',
		      'value3' => 'value3',
		      'value4' => 'value4'
		  );

		
	
### Who do I talk to? ###
	For any technical assistance please contact to: https://shurjopay.com.bd/#contacts
