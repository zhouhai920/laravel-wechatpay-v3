<?php

namespace LaravelWechatpayV3\Kernel\Utils;

class RsaUtil
{
    public static function publicEncrypt($data, $publicKey)
    {
        $encrypted = '';
        openssl_public_encrypt($data, $encrypted, $publicKey);

        return base64_encode($encrypted);
    }

    public static function privateDecrypt($data, $privateKey)
    {
        $decrypted = '';
        openssl_private_decrypt(base64_decode($data), $decrypted, $privateKey);

        return $decrypted;
    }
}