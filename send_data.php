<?php

/* print_r($_POST);
exit;
 */
$data = [];

if (isset($p_POST)):
    $data['result'] = true;
else:
    $data['result'] = false;
endif;

echo json_encode($data);
