<?php
$BASE_URL = './../';
include_once __DIR__ . '/../header.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <a href="dashboard.php"><span class="text-muted fw-light">Dashboard /</span></a><a href="user/"><span class="text-muted fw-light">Usuário /</span></a> Adicionar
  </h4>
  <div class="row">
    <!-- Basic with Icons -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Adicionar</h5>
          <small class="text-muted float-end"></small>
        </div>
        <div class="card-body">
          <form>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                  <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Nome de Usuário</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-key"></i></span>
                  <input type="text" id="basic-icon-default-company" class="form-control" placeholder="johndoe" aria-label="johndoe" aria-describedby="basic-icon-default-company2">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                  <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="basic-icon-default-email2">
                  <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="basic-icon-default-phone">N. de Telefone</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                  <input type="text" id="basic-icon-default-phone" class="form-control phone-mask" placeholder="840000000" aria-label="840000000" aria-describedby="basic-icon-default-phone2">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 form-label" for="basic-icon-default-phone">Palavra-passe</label>
              <div class="col-sm-10 form-password-toggle">
                <div class="input-group">
                  <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-lock"></i></span>
                  <input type="password" class="form-control" id="basic-default-password32" placeholder="············" aria-describedby="basic-default-password">
                  <span class="input-group-text cursor-pointer" id="basic-default-password"><i class="bx bx-hide"></i></span>
                </div>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once __DIR__ . '/../footer.php';
?>