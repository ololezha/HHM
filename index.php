<!doctype html>
<html lang="ru">
<head>
    <title>Honey Hunters</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=eet" href="css/normalize.css">
    <!--    Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <!--    My CSS -->
    <link rel="stylesheet" href="css/style.css?v.1">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="bg_1">
    <div class="container-fluid  wrapper">
        <div class="row">
            <header class="header  col-12">
                <div class="logo  col-4">
                    <img src="img/logo.png" alt="HoneyHunters">
                </div>
            </header>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mail">
                    <img src="img/mail.png" alt="ContactMail">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="order_form" id="form_comment">
                    <form class="my_form" action="insert.php" method="post" class="col-12">
                        <div class="order_form__item  col-5">
                            <p class="order_form__title">Имя <span>*</span></p>
                            <input type="text" name="user_name" id="inp1" required>
                            <p class="order_form__title">E-Mail <span>*</span></p>
                            <input type="text" name="user_email" id="inp2" required>
                        </div>
                        <div class="order_form__item  col-6">
                            <p class="order_form__title">Комментарий <span>*</span></p>
                            <input type="text" name="user_comment" id="inp3" required>
                        </div>
                        <div class="order_form__button  col-12">
                            <button id="btn_create" type="submit">Записать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--------------------COMMENTS--------------------->
<div class="bg_2"> 
    <div class="container-fluid  wrapper">
        <div class="row">
            <div class="col-12">
                <div class="comments">
                    <p class="comments_title">Выводим комментарии</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div id="test">
                <?php
                include ('connect.php');
                $select = mysql_query("SELECT * FROM hhm2");
                while ($result = mysql_fetch_array($select)) {
                echo "<div class='comments_box  col-3'>
                    <p class='comments_box__name'>$result[name]</p>
                    <p class='comments_box__email'>$result[email]</p>
                    <p class='comments_box__message'>$result[comment]</p></div>";
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg_1">
    <div class="container-fluid  wrapper">
        <div class="row">
            <footer class="footer  col-12">
                <div class="footer_logo  col-3">
                    <img src="img/footer_logo.png" alt="HoneyHunters">
                </div>
                <div class="footer_social  col-2">
                    <div class="footer_social__item">
                        <a class="social_btn  vk" href="#"></a>
                    </div>
                    <div class="footer_social__item">
                        <a class="social_btn  fb" href="#"></a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- My JavaScript -->
    <script rel="javascript" src="js/script.js?v.1"></script>


    <script type="text/javascript">
    $(function(){
        $('form').submit(function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: data,
                success: function(result){
                    $("#test").html(result);
                }
            });
        });
    });
    </script>

</body>
</html>