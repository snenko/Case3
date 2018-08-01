<?php
require 'db_connect.php';
require_once 'models/articles.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php
    $title ="test page";
?>
    <title><?php echo$title?></title>
</head>
<body>
<div class="container" style="margin-top: 10px">

    <!-- <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="http://www.creativeloop.co.zw/wp-content/uploads/2014/07/Linkedin-honest-slogans-298x180.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Название карточки</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="http://www.creativeloop.co.zw/wp-content/uploads/2014/07/Linkedin-honest-slogans-298x180.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Название карточки</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="http://www.creativeloop.co.zw/wp-content/uploads/2014/07/Linkedin-honest-slogans-298x180.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Название карточки</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div> --><!-- карточки -->
    <div class="media" style="margin: 15px">
        <img class="mr-3" src="http://world-of-stalker.narod.ru/ikonki/Zombie.jpg" alt="Generic placeholder image">
        <div class="media-body">
            <h5 class="mt-0">Медиа заголовок</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>

    </div>
    <div class="media" style="margin: 15px">
        <img class="mr-3" src="http://world-of-stalker.narod.ru/ikonki/Zombie.jpg" alt="Generic placeholder image">
        <div class="media-body">
            <h5 class="mt-0">Медиа заголовок 2</h5>
            Exampe text 2 </br> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>

    </div> <!-- Медиа заголовки  -->
</div> <!-- Коментарии-->
<br/>
</body>
<form> <!-- Форма добавления коментариев-->
    <div class="container">
        <h1 style="font-family: Ebrima;">Форма добавления коментариев</h1>
     <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Serhii">
        </div>
     <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
     </div>
        <!--   <div class="form-group">
               <label for="exampleFormControlSelect1">Example select</label>
               <select class="form-control" id="exampleFormControlSelect1">
                   <option>1</option>
                   <option>2</option>
                   <option>3</option>
                   <option>4</option>
                   <option>5</option>
               </select>
           </div>  Select 1 -->
        <!--<div class="form-group">
           <label for="exampleFormControlSelect2">Example multiple select</label>
           <select multiple class="form-control" id="exampleFormControlSelect2">
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
           </select>
       </div> Select 2     -->
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
        <input type="submit" value="Send">
    </div>

</form>
</html>