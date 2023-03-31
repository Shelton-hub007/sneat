<?php
$BASE_URL = './../';
include_once __DIR__ . '/../header.php'
?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <a href="dashboard.php"><span class="text-muted fw-light">Dashboard /</span></a><a href="user/"><span class="text-muted fw-light">Usuário /</span></a> Eliminação
  </h4>
  <div class="row">
    <!-- INICIO -->
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      Usuario Eliminado com sucessso.
    </div>
    <div class="text-center">
      <a href="user/index.php"><button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Voltar</button></a>
    </div>
    <!-- FIM -->
  </div>

</div>
<?php
include_once __DIR__ . '/../footer.php'
?>