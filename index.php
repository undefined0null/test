<?php

namespace test;

require 'RSA.php';

use ext\RSA;

$rsa = new RSA;

$origin_data = 'abx';

$ecryption_data = $rsa->publicEncrypt($origin_data);

$decryption_data = $rsa->privDecrypt($ecryption_data);

echo '公钥加密后的数据为：' . $ecryption_data;
echo PHP_EOL;
echo '私钥解密后的数据为: ' . $decryption_data;
echo PHP_EOL;