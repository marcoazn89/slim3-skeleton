<?php
$status = \HTTP\Response\Status::getInstance();
?>
{
  "error": {
    "statusCode": <?php echo $status->getCode();?>,
    "statusDescription": "<?php echo $status->getMessage(); ?>",
    "message": "<?php echo $data; ?>"
  }
}
