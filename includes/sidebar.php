<div class="sidenav-menu-heading">Dashboard</div>
<a class="nav-link" href="index">
  <div class="nav-link-icon"><i data-feather="home"></i></div>
  Inicio
</a>

<a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#funcionario" aria-expanded="false" aria-controls="funcionario">
  <div class="nav-link-icon"><i data-feather="grid"></i></div>
  Funcionario
  <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="funcionario" data-parent="#accordionfuncionario">
  <nav class="sidenav-menu-nested nav accordion" id="accordionfuncionario">
    <a class="nav-link" href="funcionario-registrar">Registrar</a>
    <a class="nav-link" href="funcionario-listar">Listar</a>
  </nav>
</div>

<a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#cliente" aria-expanded="false" aria-controls="cliente">
  <div class="nav-link-icon"><i data-feather="grid"></i></div>
  Clientes
  <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="cliente" data-parent="#accordioncliente">
  <nav class="sidenav-menu-nested nav accordion" id="accordioncliente">
    <a class="nav-link" href="cliente-registrar">Registrar</a>
    <a class="nav-link" href="cliente-listar">Listar</a>
  </nav>
</div>






</div>
</div>

<div class="sidenav-footer">
  <div class="sidenav-footer-content">
    <div class="sidenav-footer-subtitle">Logado Como:</div>
    <div class="sidenav-footer-title"><?php echo $_SESSION['login'] ?></div>
  </div>
</div>
</nav>
</div>