<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Top 22</title>

    <!-- BootStrap CSS lib -->
    <link rel="stylesheet" type="text/css" href="/TwentyTwo/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/TwentyTwo/lib/bootstrap/css/DataTables-1.10.16/css/jquery.dataTables.css"/>


    <!-- JQuery lib -->
    <script type="text/javascript" src="/TwentyTwo/lib/jquery/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="/TwentyTwo/lib/bootstrap/css/DataTables-1.10.16/js/jquery.dataTables.js"></script>

    <!-- BootStrap JS lib -->
    <script src="../lib/bootstrap/js/bootstrap.js"></script>

    <!-- Local JS File -->
    <script type="text/javascript" src="/TwentyTwo/js/global.js"></script>
    <script type="text/javascript" src="/TwentyTwo/js/top.js"></script>
    <link rel="stylesheet" href="/TwentyTwo/css/top.css">
</head>

<header>
    <?php include 'navbar.php'; ?>
</header>

<body>

<!--Remaining section-->

<div id="content" class="container" style="padding-top: 70px">
    <h1><strong>Best of</strong></h1>
    <a href="add.php"><h6>Soumettre un 22</h6></a>
    <table id="topTwentyTwo" class="table table-striped table-bordered tableformat" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th style="text-align: center;">Nombre de vote</th>
            <th>Cible</th>
            <th>Description</th>
            <th style="text-align: center;">Date du 22</th>
            <th style="text-align: center;">Date Limite</th>
            <th style="text-align: center;">Voter</th>
        </tr>
        </thead>
        <tbody>
        <tr id="1">
            <td>50</td>
            <td>Quentin Chaumont</td>
            <td>Faire de la merde</td>
            <td>10-11-2017</td>
            <td>10-12-2017</td>
            <td>
                <button class="glyphicon glyphicon glyphicon-thumbs-up " style="color: green;" onclick="upVote(this)"></button>
                <button class="glyphicon glyphicon-thumbs-down" style="color: red;" onclick="downVote(this)"></button>
            </td>
        </tr>
        <tr id="2">
            <td>100</td>
            <td>Clément Faure</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid autem beatae corporis, cumque delectus dicta dolorem enim eveniet expedita impedit incidunt molestias neque nostrum, placeat quasi sapiente sed sint suscipit!</td>
            <td>10-11-2017</td>
            <td>10-12-2017</td>
            <td>
                <button class="glyphicon glyphicon glyphicon-thumbs-up" style="color: green;" onclick="upVote(this)"></button>
                <button class="glyphicon glyphicon-thumbs-down" style="color: red;" onclick="downVote(this)"></button>
            </td>
        </tr>
        <tr id="3">
            <td>200</td>
            <td>Paul Germain</td>
            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolores ducimus excepturi ipsum iusto nihil reiciendis rem saepe totam velit. Alias eveniet ipsam magnam mollitia quae recusandae rerum sapiente voluptate.</td>
            <td>10-11-2017</td>
            <td>10-12-2017</td>
            <td>
                <button class="glyphicon glyphicon glyphicon-thumbs-up" style="color: green;" onclick="upVote(this)"></button>
                <button class="glyphicon glyphicon-thumbs-down" style="color: red;" onclick="downVote(this)"></button>
            </td>
        </tr>
        </tbody>
    </table>
</div>

</body>

</html>