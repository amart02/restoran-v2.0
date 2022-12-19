<?php
require_once 'backend/menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='style1.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&;700&display=swap" rel="stylesheet">
    <title>Ресторан</title>
    <link type="Image/x-icon" href='img/logo.ico' rel="icon">
</head>
    
<body>
<div class='header'>
    <div class='container'>
        <div class="header-line">
            <div class="header-logo">
                <img src="img/logo.png" alt="">
            </div>
            
            <div class='nav'>
                <a class='nav-item' href="index.php">ГЛАВНАЯ</a>
                <a class='nav-item' href="index1.php">МЕНЮ</a>
                <a class='nav-item' href="index.php#onas">О НАС</a>
                <a class='nav-item' href="index.php#bron">БРОНЬ</a>
                <a class='nav-item' href="index4.html">ДОКУМЕНТАЦИЯ</a>
            </div>
            
                       
            <div class='cart'>
                <a href="index3.html">
                   <img class='cart-img' src="img/cart.png" alt="">
                </a>
            </div>
            
            <div class='phone'>
                <div class='phone-holder'>
                    <div class='phone-img'>
                        <img src='img/phone.png' alt="">
                    </div>    
                    <div class='number'><a class='num' href="#">+999-888-76-54</a>
                    </div>
                </div>    
                <div class='phone-text'>
                    Свяжитесь с нами для <br> бронирования
                </div> 
            </div>  
            <div class='btn'>
                <a class='button' href='index2.html'>ЗАКАЗ СТОЛИКА</a>
            </div>
            
            <div class='burger-menu'>
                <button id='burger'>
                    <img src='img/bimg.png' alt=''>
                </button>   
                
                <div id='menu' class='burger-slide disp'>
                    <a class='nav-item block' href="index.php">ГЛАВНАЯ</a>
                    <a class='nav-item block' href="index1.php">МЕНЮ</a>
                    <a class='nav-item block' href="index.php#onas">О НАС</a>
                    <a class='nav-item block' href="index.php#bron">БРОНЬ</a>
                    <a class='nav-item block' href="index4.html">ДОКУМЕНТАЦИЯ</a>
                </div> 
            </div>
             
        </div>
         <div class='header-down'>
                  <div class='header-title'>
                       МЕНЮ РЕСТОРАНА
                  </div>
                 
             <div class='nav1'>
                <a class='nav-item1' href="index1.php?id=1">Салаты</a>
                <a class='nav-item1' href="index1.php?id=2">Супы</a>
                <a class='nav-item1' href="index1.php?id=3">Горячее</a>
                <a class='nav-item1' href="index1.php?id=4">Гарниры</a>
                <a class='nav-item1' href="index1.php?id=5">Десерты</a>
                <a class='nav-item1' href="index1.php?id=6">Напитки</a>
            </div>
                 
             </div> 
   </div>
</div>
    
<div class='cards'>
    <div class='header1'>
        <div class='container'>
            <div class='cards-holder'>
            <?php foreach ($result as $res ): ?> 
                <div class='card'>

                    <div class='card-image'>
                        <img class='card-img' src=<?= $res['image']?>>
                    </div>

                    <div class='card-title'>
                    <?= $res['org_name']?>
                    </div>
                    <div class='card-title2'>
                    <?= $res['weight']?>
                    </div>
                    <div class='card-desc'>
                    <?= $res['structure']?>
                    </div>    
                    <div class='card-desc2'>
                    <?= $res['price']?>
                    </div>
                    <div class='menu-button'>
                    <a href="index3.html" class='menu-btn'>ЗАКАЗАТЬ</a>
                </div> 
                </div>
                <?php endforeach ?>
                

                
            </div>
        </div>
    </div>    
</div>
<script src="app.js"> </script>   
</body>    
</html>