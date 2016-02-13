<?php

$from_email=array('iscout@centerofthewest.org'=>'iScout Tour');

$config = array(
  'database' => array(
    'test' => array(
      'datasource' => 'Database/Mysql',
      'persistent' => false,
      'host' => 'localhost',
      'login' => 'root',
      'password' => '',
      'database' => '',
    ),
    'default' => array(
      'datasource' => 'Database/Mysql',
      'persistent' => false,
      'host' => 'localhost',
      'login' => 'XXXXX',
      'password' => 'XXXXX',
      'database' => 'XXXXX',
    ),
  ),
  //change which one it uses from email.php file
	'email'=>array(
		'default'=>array(
			'transport' => 'Mail',
			'from' => 'forms@centerofthewest.org',
			//'charset' => 'utf-8',
			//'headerCharset' => 'utf-8',
		),
		'office365'=>array(
			'from' => $from_email,
			'transport' => 'Smtp',
			'host' => 'smtp.office365.com',
			'port' => 587,
			'username' => 'iscout@centerofthewest.org',
			'password' => 'XXXX',
			'client' => null,
			'log' => true,
			'tls' => true
		)
	)
);


Configure::write('debug', 2); //change to zero for production!
Configure::write('Security.salt', '12345sdfsdf24'); 
Configure::write('Security.cipherSeed', '09247502394');

//no trailing slash!
//sj -added IF statement for kiosk
if ($_SERVER['HTTP_HOST']=='iscout-kiosk.bbcw.org'){
	Configure::write('globalSiteURL','http://iscout-kiosk.bbcw.org');
	Configure::write('enableKioskMode','cfm');
	Configure::write('defaultTemplate',9);
	
	}
else {
	Configure::write('globalSiteURL','http://iscout.bbcw.org');
	//use EMPTY for this now
	Configure::write('enableKioskMode','');
}


//admin functions on IP whitelist
$ip_whitelist=array(
	'1.2.3.4',
	'1.2.3.4',
	'1.2.3.4'
);
Configure::write('enableAdminFunctions',0);
foreach ($ip_whitelist as $ip){
	if ($_SERVER['REMOTE_ADDR']==$ip) Configure::write('enableAdminFunctions',1);
}

//gets error emails
Configure::write('globalAdminEmail','');

//the address that messages send from, forms will be fine for all testing
Configure::write('globalFromEmail',$from_email);

Configure::write('globalSuperUser','iscout1234');



?>
