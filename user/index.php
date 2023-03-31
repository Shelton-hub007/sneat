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

<<<<<<< HEAD
          <div class="d-flex">
            <div class="input-group input-group-merge mx-2">
              <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
              <input type="text" class="form-control" placeholder="Procurar..." aria-label="Procurar..." aria-describedby="basic-addon-search31">
=======
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="./assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="./assets/vendor/libs/apex-charts/apex-charts.css" />

  <script src="./assets/vendor/js/helpers.js"></script>
  <script src="./assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

      <!-- Menu -->
      <?php include_once __DIR__ . '/../aside.php' ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">

        <!-- Navbar -->
        <?php include_once __DIR__ . '/../nav.php' ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4">
              <span class="text-muted fw-light">Usuário /</span> Listagem
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
                      <a href="./user/create.php">
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
                          <th>Nome</th>
                          <th>Nome de Usuário</th>
                          <th>Email</th>
                          <th>N. de Telefone</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>John Doe</strong></td>
                          <td>johndoe</td>
                          <td>john.doe@example.com</td>
                          <td><span class="badge bg-label-primary me-1">860000000</span></td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="./user/edit.php"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>John Doe</strong></td>
                          <td>johndoe</td>
                          <td>john.doe@example.com</td>
                          <td><span class="badge bg-label-primary me-1">860000000</span></td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="./user/edit.php"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>John Doe</strong></td>
                          <td>johndoe</td>
                          <td>john.doe@example.com</td>
                          <td><span class="badge bg-label-primary me-1">860000000</span></td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="./user/edit.php"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>John Doe</strong></td>
                          <td>johndoe</td>
                          <td>john.doe@example.com</td>
                          <td><span class="badge bg-label-primary me-1">860000000</span></td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="./user/edit.php"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>John Doe</strong></td>
                          <td>johndoe</td>
                          <td>john.doe@example.com</td>
                          <td><span class="badge bg-label-primary me-1">860000000</span></td>
                          <td>
                            <div class="dropdown">
                              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="./user/edit.php"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                              </div>
                            </div>
                          </td>
                        </tr>
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
>>>>>>> 947af6d40aef5c2bba6507efb33429e28b101bce
            </div>
            <a href="./user/add.php">
              <button type="button" class="btn btn-icon btn-outline-primary">
                <span class="tf-icons bx bx-plus"></span>
              </button>
            </a>
          </div>
<<<<<<< HEAD
=======
          <!-- / Content -->

          <!-- Footer -->
          <?php include_once __DIR__ . '/../footer.php' ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
>>>>>>> 947af6d40aef5c2bba6507efb33429e28b101bce
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