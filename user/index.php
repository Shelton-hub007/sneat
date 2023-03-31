<?php
include_once __DIR__ . '/../database.php';

$BASE_URL = './../';
include_once __DIR__ . '/../header.php';
?>

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <a href="dashboard.php"><span class="text-muted fw-light">Dashboard /</span></a><span class="text-muted fw-light">Usuário</span>
  </h4>
  <div class="row">
    <!-- Basic with Icons -->
    <div class="col-xxl">
      <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Lista de Usuários</h5>

          <div class="d-flex">
            <div class="input-group input-group-merge mx-2">
              <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
              <input type="text" class="form-control" placeholder="Procurar..." aria-label="Procurar..." aria-describedby="basic-addon-search31">
            </div>
            <a href="./user/add.php">
              <button type="button" class="btn btn-icon btn-outline-primary">
                <span class="tf-icons bx bx-plus"></span>
              </button>
            </a>
          </div>
        </div>

        <div class="table-responsive text-nowrap">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Nome de Usuário</th>
                <th>Email</th>
                <th>N. de Telefone</th>
                <th>Acção</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              <?php
              // faz a seleção do dados na Tabela	
              $data = mysqli_query($connection, "SELECT * FROM users ORDER BY id ASC");
              // lista os dados
              while ($value = mysqli_fetch_array($data)) {

                // PDO
                // $stmt = $pdo->prepare("SELECT * FROM users ORDER BY id DESC");
                // $stmt->execute();
                // $values = $stmt->fetchAll();

                // foreach($values as $value) {
              ?>
                <tr>
                  <td><?php echo $value['id'] ?></td>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?php echo $value['name'] ?></strong></td>
                  <td><?php echo $value['username'] ?></td>
                  <td><?php echo $value['email'] ?></td>
                  <td><span class="badge bg-label-primary me-1"><?php echo $value['contact'] ?></span></td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="user/edit.php?id=<?php echo $value['id'] ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" href="user/deleteQuery.php?id=<?php echo $value['id'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>

        <div class="card-footer d-flex align-items-center justify-content-between">
          <div class=""></div>
          <nav aria-label="Page navigation">
            <ul class="pagination">
              <li class="page-item first">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
              </li>
              <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-left"></i></a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">2</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0);">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);">5</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevron-right"></i></a>
              </li>
              <li class="page-item last">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once __DIR__ . '/../footer.php';
?>