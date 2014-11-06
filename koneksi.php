<?php
    $con=mysqli_connect("localhost","root","","db_test");
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
function toDmy($data) {
    if ($data == '') {
        return false;
    }
    $mode = '';
    if (filter_var($data, FILTER_VALIDATE_FLOAT)) {

        return date('d-m-Y H:i:s', $data);
    } elseif (preg_match('[-]', $data)) {
        $data = str_replace('-', ' ', $data);
    } elseif (preg_match('[/]', $data)) {
        $data = str_replace('/', ' ', $data);
    } else {
        return false;
    }
    $set = explode(' ', $data);
    if (count($set) >= 3) {
        if (strlen($set[0]) == 4) {
            #'dari Ymd';
            if(strlen($set[1]) == 1){$set[1] = '0'.$set[1];}
            if(strlen($set[2]) == 1){$set[2] = '0'.$set[2];}
            $tgl = $set[2] . '-' . $set[1] . '-' . $set[0];
            if (!empty($set[3])) {
                $tgl.=' ' . $set[3];
            }
            if (!empty($set[4])) {
                $tgl.=' ' . $set[4];
            }
            return $tgl;
        } elseif (strlen($set[2]) == 4) {
            #'dari dmY';
            if(strlen($set[1]) == 1){$set[1] = '0'.$set[1];}
            if(strlen($set[0]) == 1){$set[0] = '0'.$set[0];}
            
            $tgl = $set[0] . '-' . $set[1] . '-' . $set[2];
            if (!empty($set[3])) {
                $tgl.=' ' . $set[3];
            }
            if (!empty($set[4])) {
                $tgl.=' ' . $set[4];
            }
            return $tgl;
        } else {
            return false;
        }
    } else {
        return false;
    }
}


?>