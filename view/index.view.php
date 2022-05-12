<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <?php
    if(isset($_POST['save'])){
        echo "<h2>Formos duomenys</h2>";
        foreach ($_POST as $key=>$value){
            if($key !='save'){
                echo "<li>$value</li>";
            }

        }
    }
    ?>
    <h2>Kontaktų forma</h2>
    <form method="post">
        <div class="form-group mb-3">
            <select name="departament" class="form-control">
                <option selected disabled>--Pasirinkite departamentą--</option>
                <?php   foreach ($departments as $department):?>

                <option value="">$department;?>"><?=$department;?></option>
                <option value=">Kitoks departamentas</option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="firstName" placeholder="Vardas">
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="lastName" placeholder="Pavarde">
        </div>
        <div class="form-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="El. paštas">
        </div>
        <div class="form-group mb-3">
            <input type="text" class="form-control" name="form" placeholder="Bendri klausimmai">
            </div>
            <div class="form-group mb-3">
                    <input type="text" class="form-control" name="form" placeholder="Testavimo klausimai">
                </div>
        <button class="btn btn-primary" name="save">Saugoti</button>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>