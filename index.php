<html>

<head>
    <!-- css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Learn PHP</title>

</head>

<body class="bg-gray-700 m-1">

    <div class="container mx-auto p-4 bg-gray-200 ">
        <?php

        #IMPORT APPS
        // import config.php

        include('apps/config.php');

        // import function.php
        include('apps/function.php');



        #IMPORT VIEWS

        // import creat.php
        if (isset($_GET['p']) and $_GET['p'] == 'create') {
            require_once('views/create.php');
        }

        // import read
        elseif (isset($_GET['p']) and $_GET['p'] == 'read') {
            require_once('views/read.php');
        }

        // import update.php
        elseif (isset($_GET['p']) and $_GET['p'] == 'update') {
            require_once('views/update.php');
        }


        // impport delete
        elseif (isset($_GET['p']) and $_GET['p'] == 'delete') {
            require_once('views/delete.php');
        }
        // import 404.php
        else {
            echo "<h1>Oops!Error 404<h1> Halaman Yang kam cari trada";
        }
        ?>



    </div>










</body>

</html>