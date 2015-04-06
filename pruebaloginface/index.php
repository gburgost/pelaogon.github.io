<?php
 require_once("src/facebook.php");

  $config = array(
      'appId' => '1565969417010635',
      'secret' => '2b58cc08410bd3619e962ae3fcc11a9e',
      'fileUpload' => false, // optional
      'allowSignedRequest' => false, // optional, but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);

  $params = array(
  'scope' => 'read_stream, friends_likes',
  'redirect_uri' => 'http://localhost/pruebaloginface/index.php'
);

$loginUrl = $facebook->getLoginUrl($params);

?>
<a href="<?php echo $loginUrl; ?>">Login</a>
