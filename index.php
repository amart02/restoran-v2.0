<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='style.css'>
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
                <img src='img/logo.png' alt="">
            </div>
            
            <div class='nav'>
                <a class='nav-item' href="index.php">ГЛАВНАЯ</a>
                <a class='nav-item' href="index1.php">МЕНЮ</a>
                <a class='nav-item' href="#onas">О НАС</a>
                <a class='nav-item' href="#bron">БРОНЬ</a>
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
                    Свяжитесь с нами для <br> бронирования <br> <br> Г. Новосибирск, <br> ул Ленина, д 28
                </div> 
            </div>  
            <div class='btn'>
                <a class='button' href='index2.html'>ЗАКАЗ СТОЛИКА</a>
            </div>
            
            <div class='burger-menu'>
                <button id='burger'>
                    <img src='img/bimg.png' alt=''>
                </button>    
                
                <div id="menu" class='burger-slide disp'>
                    <a class='nav-item block' href="index.php">ГЛАВНАЯ</a>
                    <a class='nav-item block' href="index1.php">МЕНЮ</a>
                    <a class='nav-item block' href="#onas">О НАС</a>
                    <a class='nav-item block' href="#bron">БРОНЬ</a>
                    <a class='nav-item block' href="index4.html">ДОКУМЕНТАЦИЯ</a>
                </div>    
            </div>    
        </div>
        <div class='header-down'>
            <div class='header-title'>
                Добро пожаловать в
                
                <div class='header-subtitle'>
                    Наш ресторан
                </div>
                
                <div class='header-suptitle'>
                    ДОМ ЛУЧШЕЙ ЕДЫ
                </div>
                
                <div class='header-btn'>
                    <a href='index1.php' class='header-button'>Посмотреть меню</a>
                </div>
            </div>    
        </div>
    </div>
    
</div>
    
<div class='cards'>
    <div class='container'>
        
        <div class='cards-holder'>
            
            <div class='card'>
                
                <div class='card-image'>
                    <img class='card-img' src='img/card.png'>
                </div>

                <div class='card-title'>
                    Магическая <span> &nbsp; Атмосфера</span>
                </div>

                <div class='card-desc'>
                    В нашем заведении царит магическая атмосфера, наполненная вкусными ароматами.
                </div>             
            </div>

            <div class='card'>
                
                <div class='card-image'>
                    <img class='card-img' src='img/card.png'>
                </div>

                <div class='card-title'>
                    Лучшее качество <span> &nbsp; Еды</span>
                </div>

                <div class='card-desc'>
                    Качество нашей Еды - отменное!
                </div>               
            </div>

            <div class='card'>
                
                <div class='card-image'>
                    <img class='card-img' src='img/card.png'>
                </div>

                <div class='card-title'>
                    Недорогая <span>  &nbsp; Еда</span>
                </div>

                <div class='card-desc'>
                    Стоимость нашей Еды зависит только от ее количества. Качество всегда на высоте!
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class='history' id='onas'> 
    <div class='container'>
        <div class='hisory-holder'>
           
            <div class='history-info'>
                <div class='history-title'>
                    Наша <span>История</span>
                </div>

                <div class='history-desc'>
                    Как и у любого другого самобытного места, у нас есть своя, особая история. Идея ресторана пришла основателям неожиданно. Во время путешествия по Полярному Уралу создатель нашего ресторанного комплекса застрял в сотнях километров от ближайшего населенного пункта. Вдали от цивилизации и связи путешественникам пришлось обустраивать себе нехитрый быт, добывать еду и выживать в суровых условиях.
                </div>

                <div class='history-number'>
                    <div class='number-item'>
                        93 <span>Напитка</span>
                    </div>

                    <div class='number-item'>
                        206 <span>Блюд</span>
                    </div>

                    <div class='number-item'>
                        71 <span>Закуска</span>
                    </div>
                </div>
            </div>
        
            <div class='history-images'>
                <img class='images-1' src='img/1.jpg' alt="">
                <img class='images-2' src='img/2.jpg' alt="">
                <img class='images-3' src='img/3.jpg' alt="">
                <img class='images-4' src='img/4.jpg' alt="">
            </div>
         </div>
    </div>
</div>
    
<div class='black-block' id='bron'>
    <div class='container'>
        <div class='block-holder'>
            <div class='left'>
                <div class='left-title'>
                    Отпразднуйте важное событие <br>в одном из лучших ресторанов.
                </div>    
                <div class='left-text'>
                    Бизнес-ланчи от 250р
                </div>
            </div>

            <div class='right'>
                <div class='right-button'>
                    <a href='index2.html'class='right-btn'>ЗАБРОНИРОВАТЬ СТОЛ</a>
                </div>
            </div>
        </div>
    </div>    
</div>

<div class='dishes'>    
    <div class='container'>
        <div class='dishes-title'>
            Наши <span>Новые блюда</span>
        </div>
        
        <div class='eda'>
            <div class='eda-images'>
                <img src="img/pizza.jpg" class='pizza'>
            </div>
            
            <div class='eda-items'>
                
                <div class='burger-items'>
                    <img src="img/burger.jpg" class='burger'>
                    <div class="eda-text">
                        Гамбургер с сочной говяжьей котлетой ------------------ 459р
                    </div>
                </div> 
                
                <div class='pizza-items'>
                    <img src="img/pizza1.jpg" class='pizza'>
                    <div class="eda-text">
                        Пицца Эмилиана ---------------------------------------------- 669р
                    </div>
                </div>  
                
                <div class='pasta-items'>
                    <img src="img/pasta.jpg" class='pasta'>
                    <div class="eda-text">
                        Паста Капелли д’анджело ----------------------------------- 539р
                    </div>
                </div>  
            </div>    
        </div>    
    </div>
</div>
    
<div class='menu'>
    <div class='container'>
        <div class='menu-title'>
            Меню
        </div>  
        
        <div class='menu-items'>
            <div class='menu-item'>
                
                <div class='menu-1'>
                    <img src='img/cezar-i.png' class='cezar-img'>
                </div>  
 
                <div class='menu-text1'>
                    Цезарь с курицей
                </div>  
                                 
                <div class='menu-subtext1'>
                    Невероятно вкусный <br> и сытный салат
                </div>

                <div class='menu-button'>
                    <a href="index3.html" class='menu-btn'>ЗАКАЗАТЬ</a>
                </div>    
            </div>  
            
            <div class='menu-item'>
                
                <div class='menu-2'>
                    <img src='img/sup-i.png' class='sup-img'>             
                </div>
                
                <div class='menu-text2'>
                    Сырный суп-пюре
                </div>
                
                <div class='menu-subtext2'>
                    Нежнейший картофельный суп-пюре <br> с плавленым сыром
                </div>
                
                <div class='menu-button'>
                    <a href="index3.html" class='menu-btn'>ЗАКАЗАТЬ</a>
                </div> 
            </div>    
            
            <div class='menu-item'>
                
                <div class='menu-3'>
                    <img src='img/zharkoe-i.png' class='zharkoe-img'> 
                </div>
                
                <div class='menu-text3'>
                    Жаркое по-домашнему
                </div>
                
                 <div class='menu-subtext3'>
                    Сытное жаркое из свиных рёбрышек <br> с овощами
                </div>
                
                <div class='menu-button'>
                    <a href="index3.html" class='menu-btn'>ЗАКАЗАТЬ</a>
                </div>  
            </div>
        </div>    
    </div>    
</div>   
    
<div class='comment'>
    
    <div class='container'>
        <div class='comment-text'>
            Я надолго запомню мой День рождения, проведённый в этом ресторане! Отдельное спасибо за комплимент в виде фруктовой тарелки. Будем рекомендовать этот ресторан своим друзьям и родственникам!
        </div>  
        
        <div class='comment-image'>
            <img src='img/comment.jpg' class='comment-img'>
        </div>    
        
        <div class='comment-type'>
            Посетитель
        </div>
        
        <div class='comment-name'>
            Николай
        </div>    
    </div>    
</div>
    
<div class='galery'>
    
    <div class='container'>
        
        <div class='galery-title'>
            Галерея <span>Блюд</span>
        </div>    
        
        <div class='galery-content'>
            
            <div class='galery-left'>
                
                <div class='galery-up'>
                    <img class='img-gal' src="img/gal3.jpg">
                </div>
                
                <div class='galery-down'>
                    <img class='img-gal' src="img/gal1.jpg">
                    <img class='img-gal' src="img/gal2.jpg">
                </div>    
            </div>    
            
            <div class='gslery-right'>
                
                <div class='galery-up'>
                    <img class='img-gal' src="img/gal4.jpg">
                    <img class='img-gal' src="img/gal6.jpg">
                </div>
                
                <div class='galery-down'>
                    <img class='img-gal' src="img/gal5.jpg">
                </div>  
            </div>    
        </div>    
    </div>    
</div>    
    
<div class='povara'>
    <div class='container'>
        
        <div class='povara-title'>
            Наши <span>Повара</span>
        </div>
        
        <div class='povara-content'>
            <img src='img/povar1.jpg'>
            <img src='img/povar2.jpg'>
            <img src='img/povar3.jpg'>
        </div>    
    </div>    
</div>    
    
<div class='footer'>
    Copyright 2022
</div>    
<script src="app.js"> </script> 
</body>    
</html>
