<?php include $_SERVER["DOCUMENT_ROOT"] . "/head.php"; ?>
    <link rel="stylesheet" href="/css/LogIn.css">
  <body>
    <main>
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="card shadow-lg" style="background: #ffe6a7b5">
                    <div class="card-body p-5">
                        <h1 class= "row justify-content-sm-center h-100">Вхід</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                            <img src="/images/cat.png" alt="Avatar" class="avatar">
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">Електронна пошта</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required="" autofocus="">
                                <div class="invalid-feedback">
                                    Вкажіть пошту
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">Пароль</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" required="">
                                <div class="invalid-feedback">
                                    Пароль є обов'язковим
                                </div>
                                <a href="forgot.html" class="float-end">
                                    Відновити пароль?
                                </a>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                    <label for="remember" class="form-check-label">Запамятати мене</label>
                                </div>
                                <button type="submit" class="btn btn-primary ms-4">
                                    Вхід
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            У вас немає акууту? <a href="register.php" class="text-dark">Створити зараз</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
  </body>

<?php include $_SERVER["DOCUMENT_ROOT"] . "/footer.php"; ?>