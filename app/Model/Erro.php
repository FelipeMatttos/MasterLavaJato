<?php
class Erro
{
  private $erro;

  private $mensagem = array(
    "erro.admin.senha" => "Usuario ou Senha Invalidos",
    "erro.admin.login" => "Usuario ou Senha Invalidos",
  );

  public function getErro()
  {
    return $this->erro;
  }

  public function setErro($erro)
  {
    $this->erro = $erro;
  }

  public function MensagemErro()
  {
    if (array_key_exists($this->erro, $this->mensagem)) {
      return $this->mensagem[$this->erro];
    }
  }
}
