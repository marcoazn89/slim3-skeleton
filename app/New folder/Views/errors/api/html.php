<?php
$status = \HTTP\Response\Status::getInstance();
?>
<html>
  <head>
    <title>MyApp - <?php echo $status->getCode();?></title>
<link href='https://www.dropbox.com/static/css/error.css' rel='stylesheet' type='text/css'>
<link rel='shortcut icon' href='http://www.coventrywebgraphicdesign.co.uk/wp-content/uploads/logo-here.jpg'>
</head>
<body>
<div class='figure'>
<img src='http://www.coventrywebgraphicdesign.co.uk/wp-content/uploads/logo-here.jpg' width='300'>
</div>
<div id='errorbox'>
<h1>Error (<?php echo $status->getCode();?>)</h1>
<p><?php if(empty($data)) { echo "Well that's embarassing. Something went wrong but we are working on it!."; }else { echo $data; } ?> </p>
<p>Thanks,</p>
<p>Talent Inc.</p>
</div>
</body>
</html>
