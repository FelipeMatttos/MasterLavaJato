<?php
class Login
{
  private $login;
  private $senha;


  public function getLogin()
  {
    return $this->login;
  }

  public function setLogin($login)
  {
    $this->login = $login;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function setSenha($senha)
  {
    $this->senha = $senha;
  }

  public function logarUsuario()
  {
    include 'Database.php';
    try {
      $sql = "SELECT * FROM usuario WHERE login = ?";
      $stmtUsuario = $conn->prepare($sql);
      $stmtUsuario->bindParam(1, $this->login);
      $stmtUsuario->execute();
      $usuario = $stmtUsuario->fetch(PDO::FETCH_ASSOC);
      if (!empty($usuario)) {
        if (Bcrypt::check($this->senha, $usuario['senha'])) {
          session_start();
          $_SESSION['login'] = $usuario['login'];
          $_SESSION['email'] = $usuario['email'];
          $_SESSION['id'] = $usuario['id'];
          return json_encode(array("sucesso" => true));
        } else {
          return json_encode(array("sucesso" => false, "erro" => "erro.admin.senha", 'codigo' => 0));
        }
      } else {
        return json_encode(array("sucesso" => false, "erro" => "erro.admin.login", 'codigo' => 1));
      }
    } catch (PDOException $e) {
      return "Erro: " . $e->getMessage();
    }
  }
}
