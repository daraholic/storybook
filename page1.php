<?php

include "function.php";
$dsn = "mysql:host=127.0.0.1;charset=utf8;dbname=story";
$pdo = new PDO($dsn, 'root', '');
// echo $page;

// dd($data);

// $data = [
//     ["id"=>"1","src"=>"001.png", "chinese" =>"從前從前...."],
//     ["id"=>"2","src"=>"1021", "chinese" =>"2222...."],
// ];

// 切換page
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$data = find('storys', $page);

if (is_numeric($page)) {
    if ($page == 1) {
        $lastpage = 9;
        $nextpage = $page + 1;
        $page = 9;
    } else if ($page == 9) {
        $lastpage = $page - 1;
        $nextpage = 1;
        $page = $lastpage;
        // $data = find('storys',$page);

    } else {
        $lastpage = $page - 1;
        $nextpage = $page + 1;
    }
}

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
} else {
    $lang = 'chinese';
}
$lang = find('storys', $lang);
// dd($lang);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .box {
            border: 1px solid black;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="cotainer mt-3">
        <div class="row">
            <div class="col text-center">
                <a href="page1.php?lang=<?= $lang; ?>"><i class="fas fa-language"></i></a>
                <img class="img-fluid" src="./images/<?= $data[0]['imges']; ?>" width="40%" height="40%" alt="page1">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3 text-right">
                <a href="page1.php?page=<?= $lastpage; ?>"><i class="far fa-arrow-alt-circle-left fa-3x" style="color:green"></i></a>

            </div>

            <div class="col-sm-6 text-center">
                <!-- <div class="box"> -->
                <p>
                <p class="font-weight-bold">第&nbsp;<?= $data[0]['id']; ?>&nbsp;話</p>

                <?= $data[0]['chinese']; ?>
                </p>
                <!-- <button type="button" class="btn-outline-light btn-lg text-muted" data-toggle="collapse" data-target="#demo">Click here to see English translation</button>
                <div id="demo" class="collapse"><?= $data[0]['english'] .$lang['chinese'] ; ?>
                </div> -->

                <p>
                    <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Click here to see English translation
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                    <?= $data[0]['english']; ?>
                    </div>
                </div>


                <!-- </div> -->
            </div>
            <div class="col-sm-3 text-left">
                <a href="page1.php?page=<?= $nextpage; ?>"><i class="far fa-arrow-alt-circle-right fa-3x" style="color:green"></i></a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".nav-tabs a").click(function() {
                $(this).tab('show');
            });
        });
    </script>
</body>

</html>