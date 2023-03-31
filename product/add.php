<?php
$BASE_URL = './../';
include_once __DIR__ . '/../header.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <a href="dashboard.php"><span class="text-muted fw-light">Dashboard /</span></a><a href="product/"><span class="text-muted fw-light">Produto /</span></a> Adicionar
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
              <label class="col-sm-2 col-form-label" for="code">Código</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" id="code" placeholder="" aria-label="" aria-describedby="code">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="name">Nome</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" id="name" placeholder="" aria-label="" aria-describedby="name">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="price">Preço</label>
              <div class="col-sm-10">
                <div class="input-group">
                  <input type="number" class="form-control" id="price" placeholder="" aria-label="" aria-describedby="price">
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