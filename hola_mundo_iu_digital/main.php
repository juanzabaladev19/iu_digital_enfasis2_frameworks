<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>IU Digital</title>
</head>
<body>
    <h1>HOla mundo iu digital</h1>
    <?php
        for($i= 0; $i<5; $i++){
            $miVariable = 3;
            echo "<div class='alert alert-primary' role='alert'>
            A simple primary alert—check it out!
          </div>";
        }
    ?>
    <div>
        <h5>Hola</h5>
        <?php
            require_once(dirname(__DIR__).'/hola_mundo_iu_digital/db_config.php');
            $dbConfig = new DbConfig();
            $dbConfig->setHost("localhost");
            $dbConfig->connect();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>x
</body>
</html>