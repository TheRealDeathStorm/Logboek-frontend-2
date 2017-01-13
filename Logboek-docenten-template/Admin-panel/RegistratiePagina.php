<!DOCTYPE html>
<!-- saved from url=(0032)http://logboek.sif.datmelvin.nl/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login pagina</title>
    <link rel="stylesheet" href="css/RegistratiePagina/bootstrap.min.css">
    <link rel="stylesheet" href="css/RegistratiePagina/PUSH---Bootstrap-Button-Pack1.css">
    <link rel="stylesheet" href="css/RegistratiePagina/PUSH---Bootstrap-Button-Pack3.css">
    <link rel="stylesheet" href="css/RegistratiePagina/PUSH---Bootstrap-Button-Pack2.css">
    <link rel="stylesheet" href="css/RegistratiePagina/Register-Form-Clean.css">
    <link rel="stylesheet" href="css/RegistratiePagina/PUSH---Bootstrap-Button-Pack.css">
    <link rel="stylesheet" href="css/RegistratiePagina/styles.css">
    <?php include 'includes/header.php'; ?>
</head>
<?php include 'includes/menu.php'; ?>


<body>
    <div class="login-clean">
        <!-- Het formulier heeft nu een action naar index.html,
            Deze moet natuurlijk door de backend nog aangepast worden.
            -->
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><img src="css/RegistratiePagina/aventuslogo.png" style="max-height:155px;"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="voornaam">Voornaam</label>
                        <input class="form-control" id="voornaam" type="text" name="voornaam" placeholder="Voornaam" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tussenvoegsel">Tussenvoegsel</label>
                        <input class="form-control" id="tussenvoegsel" type="text" name="tussenvoegsel" placeholder="Tussenvoegsel">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="achternaam">Achternaam</label>
                        <input class="form-control" id="achternaam" type="text" name="achternaam" placeholder="Achternaam" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="SchoolMail">Mail</label>
                <input class="form-control" id="SchoolMail" type="email" name="email" placeholder="bijv. 123456@student.aventus.nl" required>
            </div>
            <div class="form-group">
            <label for="rol">Kies een rol</label>
            <select class="form-control" id="rol">
                <option>Student</option>
                <option>Leraar</option>
                <option>LTB</option>
                <option>Admin</option>
            </select>
            </div>
            <div class="form-group">
                <label class="control-label">Selecteer een bestand</label>
                <input id="input-7" name="input7[]" multiple type="file" class="file file-loading btn btn-primary btn-block" data-allowed-file-extensions='["csv", "txt"]'>
<!--                <script>$mimes = array('application/vnd.ms-excel','text/plain','text/csv','text/tsv');-->
<!--                if(in_array($_FILES['file']['type'],$mimes)){-->
<!--                    // do something-->
<!--                } else {-->
<!--                    alert("Fout, Bestand is geen .CSV bestand.");-->
<!--                }</script>-->

            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Verzend</button>
            </div>
            <!--<a href="http://logboek.sif.datmelvin.nl/#" class="forgot">Forgot your email or password?</a>-->
        </form>
    </div>
    <script src="RegistratiePagina_files/jquery.min.js.download"></script>
    <script src="RegistratiePagina_files/bootstrap.min.js.download"></script>
    <?php
        include 'Includes/footer.php';
    ?>

</body></html>