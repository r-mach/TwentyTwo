<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add</title>

    <!-- BootStrap CSS lib -->
    <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">

    <!-- JQuery lib -->
    <script type="text/javascript" src="../lib/jquery/jquery-3.2.1.js"></script>

    <!-- BootStrap JS lib -->
    <script src="../lib/bootstrap/js/bootstrap.js"></script>

    <!-- Local JS File -->
    <script type="text/javascript" src="/TwentyTwo/js/global.js"></script>
</head>

<header>
    <?php include 'navbar.php'; ?>
</header>

<body>

<!--Remaining section-->

<div class="container-fluid">
    <div class="row" style="padding-top: 50px">
        <div class="col-sm-6" style="padding-top: 20px">
            <img class="img-responsive" src="../images/logo22.jpg" alt="img.jpg">
        </div>
        <div class="col-sm-6">
            <h2><strong>Formulaire d'ajout</strong></h2><br>
            <form action="top.php" method="GET">
                <div class="form-group" style="padding-top: 20px">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="name">Prénom</label>
                            <input class="form-control" id="name" name="name" type="text" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="lastname">Nom</label>
                            <input class="form-control" id="lastname" name="lastname" type="text" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 5px">
                        <div class="col-sm-4">
                            <label for="filiere">Année d'étude</label>
                            <select class="form-control" id="filiere" required>
                                <option>1A</option>
                                <option>2A</option>
                                <option>3A(R)</option>
                                <option>4A+</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col-sm-6">
                            <input class="form-control" id="targetName" name="targetName" placeholder="Prénom Cible du 22" type="text" required>
                        </div>
                        <div class="col-sm-6">
                            <input class="form-control" id="targetLastname" name="targetLastname" placeholder="Nom Cible du 22" type="text" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col-sm-12">
                            <textarea class="form-control" id="content" name="content" rows="4" placeholder="Description du 22" required></textarea>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col-sm-6">
                            <label for="endDate">Date limite</label>
                            <input class="form-control" id="endDate" name="endDate" type="date" required>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 30px">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <input class="form-control" type="submit" value="Envoyer" style="background-color: dimgrey; color: white">
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>