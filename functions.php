<?php

$data = (json_decode(stripslashes($_REQUEST['data']), true));

$data_arr = array(
    'contact' => array(
        $data
    )
);

print_r(json_encode($data_arr));