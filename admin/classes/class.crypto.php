<?php

class Crypto {

  private $result;

  public function __construct() {
    if (!extension_loaded('mcrypt')) throw new Exception('Extensão MCRYPT não carregada.');
    if (!defined('CIPHER')) throw new \Exception('CIPHER não definido.');
    if (!defined('KEY')) throw new \Exception('KEY não definido.');
    if (!defined('MODE')) throw new \Exception('MODE não definido.');
    if (!defined('IV')) throw new \Exception('VETOR DE INICIALIZAÇÃO não definido.');

    $keySize = strlen(KEY);
    $IVSize = strlen(IV);
    $requiredKeySize = mcrypt_get_key_size(CIPHER, MODE);
    $requiredIVSize = mcrypt_get_iv_size(CIPHER, MODE);

    if ($keySize != $requiredKeySize)
      throw new \Exception('Tamanho incorreto da Chave Cryptografica. Esperado: '.$requiredKeySize.' caracteres. Encontrados: '.$keySize);
    if ($IVSize != $requiredIVSize)
      throw new \Exception('Tamanho incorreto do Vetor de Inicialização. Esperado: '.$requiredIVSize.' caracteres. Encontrados: '.$IVSize);
  }

  public function encrypt($data, $baseEncode = true) {
    $this->result = mcrypt_encrypt(CIPHER, KEY, $data, MODE, IV);
    if ($baseEncode) {
      $this->result = base64_encode($this->result);
      return $this->result;
    } else {
      return null;
    }
  }

  public function decrypt($data, $baseDecode = true) {
    if ($baseDecode) $data = base64_decode($data);
    $this->result = mcrypt_decrypt(CIPHER, KEY, $data, MODE, IV);
    return $this->result;
  }

  public function output() {
    return $this->result;
  }
}
