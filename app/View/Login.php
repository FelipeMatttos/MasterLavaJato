<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Studio Senna | Login</title>
  <link href="src/css/styles.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
  <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous">
  </script>
</head>

<body class="bg-primary">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <!-- Basic login form-->
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header justify-content-center">
                  <h3 class="font-weight-light my-4">Login</h3>
                </div>
                <div class="card-body">
                  <div id="loginErro"></div>
                  <form>
                    <div class="form-group">
                      <label class="small mb-1" for="inputEmailAddress">Login</label>
                      <input class="form-control" id="login" type="text" placeholder="Login" required />
                    </div>
                    <div class="form-group">
                      <label class="small mb-1" for="inputPassword">Senha</label>
                      <input class="form-control" id="senha" type="password" placeholder="Senha" required />
                    </div>
                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                      <a class="small" href="auth-password-basic.html">Esqueceu a senha?</a>
                      <button type="button" class="btn btn-primary" id="btn-login">Login</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <div id="layoutAuthentication_footer">
      <footer class="footer mt-auto footer-dark">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
            <div class="col-md-6 text-md-right small">
              <a href="#!">Privacy Policy</a>
              &middot;
              <a href="#!">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <script src="src/js/scripts.js"></script>
  <script src="src/js/erroSucesso.js"></script>
  <script>
    $(document).ready(function() {
      $(document).on("click", "#btn-login", function() {
        login = $("#login").val();
        senha = $("#senha").val()
        if (login == '' || senha == '') {
          erro('Preencha os campos de Login e Senha', '#loginErro')
        } else {
          $.post("app/Controller/Login.php", {
            login: login,
            senha: senha
          }, function(resposta) {
            var login = JSON.parse(resposta);
            if (login.Sucesso) {
              window.location.href = 'index';
            } else {
              erro(login.Erro, '#loginErro')
            }
          })
        }
      })
    })
  </script>
</body>

</html>