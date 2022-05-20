<?php

namespace Models\Utils;


class Generators {
    // TODO: Definir mais atributos que serão futuramente usados desta classe


    #region PUBLIC METHODS

    #region GERADORES DE GUID
    public function generateGUIDv1() {
        if (function_exists('com_create_guid') === true) {
            return trim(com_create_guid());
        }
        else {
            $data = openssl_random_pseudo_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
            
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }
    }

    public function generateGUIDv2() {
        $guid = '';
        $namespace = rand(11111, 99999);
        $uid = uniqid('', true);
        $data = $namespace;
        $data .= $_SERVER['REQUEST_TIME'];
        $data .= $_SERVER['HTTP_USER_AGENT'];
        $data .= $_SERVER['REMOTE_ADDR'];
        $data .= $_SERVER['REMOTE_PORT'];
        $hash = strtoupper(hash('ripemd128', $uid . $guid . md5($data)));
        $guid = substr($hash,  0,  8) . '-' .
                substr($hash,  8,  4) . '-' .
                substr($hash, 12,  4) . '-' .
                substr($hash, 16,  4) . '-' .
                substr($hash, 20, 12);
        
        return $guid;
    }
    #endregion GERADORES DE GUID

    #endregion PUBLIC METHODS

}

?>