<?php include('./components/post/post.php'); ?>
<?php include('./components/userInfo/UserInfo.php'); ?>
<?php include('./components/nav/Nav.php'); ?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/short.css">
    <title>Kitkot</title>
</head>

<body>

    <div class="kotkit">

        <?php UserInfo()?>            
        <div class="right-option">
            <?php Nav()?>            
            <div class="short">
                <?php echo post("./assets/img/short-video.png", "./assets/img/pasman.png", "Elena piano Music", 75.5, 10) ?>
                <!-- reapeat post video-->
                <?php echo post("./assets/img/short-video.png", "./assets/img/pasman.png", "Elena piano Music", 73.5, 10) ?>
                <!-- reapeat post video-->
            </div>
        </div>
</body>

</html>