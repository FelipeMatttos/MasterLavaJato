<?
if (empty($_SESSION)) {
    header("Location: home");
}else{
  
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Master Lava Jato</title>
  <link href="src/css/styles.css" rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="src/img/favicon.png" />
  <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>
  <style>
    .topnav .navbar-brand {
      width: 13rem !important;
    }
  </style>
</head>

<body class="nav-fixed">

  <nav class="topnav navbar navbar-expand shadow justify-content-between justify-content-sm-start navbar-light bg-white" id="sidenavAccordion">

    <a href="index"> <img class="navbar-brand" src="src/img/studio-logo.jpg" alt=""></a>

    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle"><i data-feather="menu"></i></button>

    <ul class="navbar-nav align-items-center ml-auto">

      <li class="nav-item dropdown no-caret mr-3 mr-lg-0 dropdown-user">
        <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="src/img/illustrations/profiles/profile-7.png" /></a>
        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
          <h6 class="dropdown-header d-flex align-items-center">
            <img class="dropdown-user-img" src="src/img/illustrations/profiles/profile-7.png" />
            <div class="dropdown-user-details">
              <div class="dropdown-user-details-name"><?php echo $_SESSION['login'] ?>
              </div>
            </div>
          </h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="alterar-senha">
            <div class="dropdown-item-icon"><i data-feather="settings"></i></div>
            Alterar Senha
          </a>
          <a class="dropdown-item" href="logout">
            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
            Sair
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
          <div class="nav accordion" id="accordionSidenav">

            <?php include 'includes/sidebar.php'; ?>
            <div id="layoutSidenav_content">