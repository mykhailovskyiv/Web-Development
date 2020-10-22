<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/front/css/style.css">
    <title>Sponge</title>
</head>

<body>
<header>
    <div class="container-head">
        <div class="menu-block">
            <div class="logo"><img src="/front/img/logo.svg" alt=""></div>
            <div id="menu">
                <button class="c-hamburger c-hamburger-line">
                    <span class="line one"></span>
                    <span class="line two"></span>
                    <span class="line three"></span>
                </button>
            </div>
        </div>
        <div id="company_fix" class="company_fix">
            <p class="company-fix__title">Science official</p>
        </div>
    </div>
    <div id="mobile-menu" class="mobile-menu">
        <nav class="mobile-menu__content">
            <a class="link">Компаниус</a>
            <a class="link">Компаниус</a>
            <a class="link">Компаниус</a>
            <a class="link">Компаниус</a>
            <a class="link">Компаниус</a>
        </nav>
    </div>
</header>
<main>
    <div class="container" id="container">
        <div class="company-main">
            <div class="company-main__title">Компании</div>
            <div class="company-main__block" id="company-main__block">
                <div id="carousel" class="carousel">
                    <div class="gallery">
                        <ul class="gallery-company">

                            <script src="script.js"></script>
                            <?php
                            require_once '../newFile.php';
                            $procredure = new Procedure();

                            $ids = $procredure->getProjects();
                            while ($row = $ids->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                <style>
                                    #company_img-<?php echo $row['id'];?> svg path, #company_img-<?php echo $row['id'];?> svg polygon{
                                        fill: <?php echo $row['logo_color'];?> !important;
                                    }
                                    #company-<?php echo $row['id'];?>{
                                        border: <?php echo $row['logo_color'];?> solid;
                                    }
                                    #descr-<?php echo $row['id'].'::before';?>{
                                        background-color: <?php echo $row['logo_color'];?>;
                                    }
                                    #company-<?php echo $row['id'].':hover';?>{
                                        background-color: <?php echo $row['logo_color'];?>;
                                    }
                                    .company:hover #company_img-<?php echo $row['id'];?> svg path, #company_img-<?php echo $row['id'];?> svg polygon{
                                        fill: white !important;
                                        transition-duration: 0.8s;
                                        transition-delay: 0.1s;
                                    }
                                    .company:hover #descr-<?php echo $row['id'].'::before';?>{
                                        background-color: white;
                                    }
                                </style>
                                <li>
                                    <div class="company" id="company-<?php echo $row['id'];?>">
                                        <div class="company_content">
                                            <div class="company-img" id="company_img-<?php echo $row['id'];?>"><?php echo $row['project_logo']?></div>
                                            <h4 class="company__name"><?php echo $row['project_name']?></h4>
                                            <p class="company__description" id="descr-<?php echo $row['id'];?>"><?php echo $row['short_about_pr']?></p>
                                        </div>
                                    </div>
                                </li>    
                                
                                <?php
                            }
                            ?>
                        </ul>
                    </div> 
                </div>       
            </div>
        </div>
    </div>
</main>
<script src="carousel.js"></script>
<script src="create-element.js"></script>
</body>

</html>