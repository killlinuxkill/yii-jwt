<?php

namespace killwindows\JWT;

use Firebase\JWT\JWT as BaseJWT;

class JWT
{
    public $key = '';
    public $alg = 'HS256';

    public function init()
    {}

    public function decode($jwt, $key = '', array $allowed_algs = array())
    {
        if (empty($key) && !empty($this->key)) {
            $key = $this->key;
        }
        return BaseJWT::decode($jwt, $key, $allowed_algs);
    }

    public function encode($payload, $key = '', $alg = 'HS256', $keyId = null, $head = null)
    {
        if (empty($key) && !empty($this->key)) {
            $key = $this->key;
        }
        if (empty($alg) && !empty($this->alg)) {
            $alg = $this->alg;
        }
        return BaseJWT::encode($payload, $key, $alg, $keyId, $head);
    }
}
