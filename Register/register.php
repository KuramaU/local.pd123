<link rel="stylesheet" href="/css/register.css">
<?php
$name = "";
$email= "";
$phone="";
$password= "";
if($_SERVER["REQUEST_METHOD"]=="POST") {
    //echo "<br/><br/><br/>";
    if(isset($_POST["name"]))
        $name=$_POST["name"]; //Супер глобальний масив, який зберігає значенян полів форми
    if(isset($_POST["email"]))
        $email=$_POST["email"];
    if(isset($_POST["phone"]))
        $email=$_POST["phone"]; //Супер глобальний масив, який зберігає значенян полів форми
    if(isset($_POST["password"]))
        $password=$_POST["password"]; //Супер глобальний масив, який зберігає значенян полів форми
    if(!empty($name)&&!empty($email)&&!empty($phone)&&!empty($password)) {
        try {
            //підклюичти до Бази даних
            $dbh = new PDO('mysql:host=localhost;dbname=pd123', "root", "");
            //Cтворює запит до БД
            $sql = "INSERT INTO users (name, email, phone,password) VALUES(?, ?, ?,?);";
            $stmt= $dbh->prepare($sql); //сворити параметризований запит
            $stmt->execute([$name, $email,$phone, $password]);
            $dbh = null;
            header('Location: /'); //Перехід на головну сторінку
            exit;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    //echo "<h3>$name</h3>";
}
?>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/head.php"; ?>
<body>
<main>
    <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="card shadow-lg" style="background: #ffe6a7b5">
                <div class="card-body p-5">
                    <h1 class="row justify-content-sm-center h-100">Реєстрація</h1>
                    <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="name">Фото:  </label>
                            <img src="/images/cat.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="name">Прізвище/Ім'я</label>
                            <input id="name" type="text" class="form-control" name="name" value="<?php echo $name; ?>" required=""
                                   autofocus="">
                            <div class="invalid-feedback">
                                Вкажіть прізвище та ім'я
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">Електронна адреса</label>
                            <input id="email" type="email" class="form-control" name="email" value="<?php echo $email; ?>" required="">
                            <div class="invalid-feedback">
                                Вкажіть пошту
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="email">Телефон</label>
                            <input id="email" type="email" class="form-control" name="email" value="<?php echo $phone; ?>" required="">
                            <div class="invalid-feedback">
                                Вкажіть номер телефону
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2 text-muted" for="password">Пароль</label>
                            <input id="password" type="password" class="form-control" name="password" required="">
                            <div class="invalid-feedback">
                                Вкажіть пароль
                            </div>
                        </div>

                        <div class="align-items-center d-flex">
                            <button type="submit" class="btn btn-primary ms-auto">
                                Зареєструватися
                            </button>
                        </div>
                    </form>
                </div>
                <div class="card-footer py-3 border-0">
                    <div class="text-center">
                        Already have an account? <a href="LogIn.php" class="text-dark">Вхід</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
</body>
<?php include $_SERVER["DOCUMENT_ROOT"] . "/footer.php"; ?>
