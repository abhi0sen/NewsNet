<?php
// echo "aagya <br>";
session_start();
$name = $_SESSION['paper_name'];
// echo "name is : ".$name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper Network</title>
    <link rel="stylesheet" href="../css_styles/admin_style.css">
    <link rel="stylesheet" href="../css_styles/home_page.css">

</head>

<body>
    <nav class="Nav_bar background">
        <ul class="nav-list">
            <div class="logo"><img src="../images/logo.png" alt="Logo"></div>
            <li><a href="#home"> Home </a></li>
            <li><a href="#home"> Request </a></li>
            <li><a href="setting.php"> Settings </a></li>
            <!-- <li><a href="#service"> Services </a></li> -->
            <!-- <li><a href="#contact"> contact us </a></li> -->
        </ul>
        <div class="rightnav">
            <button class="btn btn-sm"> <?php echo $name ?> </button>
            <a href="logout.php"><button class="btn btn-sm"> Log Out</button></a>
        </div>  
    </nav>
    <section class="background firstsection">
        <div class="box-main">
            <div class="fhalf">
                <p class="text-big">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corrupti
                    consequuntur nam labore accusantium architecto ipsa vero aliquid veniam delectus.</p>
                <p class="text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corrupti
                    consequuntur nam labore accusantium architecto ipsa vero aliquid veniam delectus.</p>
                <div class="buttons">
                    <button class="btn">Subscribe</button>
                    <button class="btn">Watch Video</button>
                </div>
            </div>
            <div class="shalf">
                <img src="../img/bg.jpg" alt="background">
            </div>
        </div>
    </section>
    <section class="section">
        <div class="paras">
            <p class="sectiontag text-big">Lorem ipsum dolor sit maxime.</p>
            <p class="sectionsubtag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
                sapiente sunt explicabo, possimus, magni aliquid aut quis commodi odit quas quidem, sint quaerat eos
                maxime quod natus ex recusandae sequi veritatis quam ipsum accusantium autem! Facilis sed ex iure
                accusantium dolorum repudiandae cum Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                officia sed, recusandae eligendi iure dolores officiis est voluptas. Perferendis deleniti deserunt nulla
                odit. Excepturi sit vitae vero perferendis nihil possimus necessitatibus, cupiditate voluptatem,
                pariatur voluptas ad reiciendis nesciunt, rerum voluptates! Eveniet possimus, a necessitatibus illum
                incidunt impedit expedita harum reprehenderit quod autem, animi, voluptates assumenda repudiandae
                quidem? Nisi eveniet optio laudantium impedit qui, illum eum quaerat. Nulla aut delectus quo eius
                dolorem odit quibusdam perferendis minus suscipit ea quasi animi error numquam neque beatae, dolores
                quam eligendi omnis a tempore laboriosam minima enim. Odio numquam voluptas error? Accusamus, molestiae
                provident. in libero, neque obcaecati asperiores quos maxime.</p>
        </div>
        <div class="thumbnail">
            <img src="../img/logo.jpg" alt="same as logo" class="imgfluid">
        </div>
    </section>
    <section class="section left">
        <div class="paras">
            <p class="sectiontag text-big">Lorem ipsum dolor sit maxime.</p>
            <p class="sectionsubtag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
                sapiente sunt explicabo, possimus, magni aliquid aut quis commodi odit quas quidem, sint quaerat eos
                maxime quod natus ex recusandae sequi veritatis quam ipsum accusantium autem! Facilis sed ex iure
                accusantium dolorum repudiandae cum Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                officia sed, recusandae eligendi iure dolores officiis est voluptas. Perferendis deleniti deserunt nulla
                odit. Excepturi sit vitae vero perferendis nihil possimus necessitatibus, cupiditate voluptatem,
                pariatur voluptas ad reiciendis nesciunt, rerum voluptates! Eveniet possimus, a necessitatibus illum
                incidunt impedit expedita harum reprehenderit quod autem, animi, voluptates assumenda repudiandae
                quidem? Nisi eveniet optio laudantium impedit qui, illum eum quaerat. Nulla aut delectus quo eius
                dolorem odit quibusdam perferendis minus suscipit ea quasi animi error numquam neque beatae, dolores
                quam eligendi omnis a tempore laboriosam minima enim. Odio numquam voluptas error? Accusamus, molestiae
                provident. in libero, neque obcaecati asperiores quos maxime.</p>
        </div>
        <div class="thumbnail">
            <img src="../img/logo.jpg" alt="same as logo" class="imgfluid">
        </div>
    </section>
    <section class="section">
        <div class="paras">
            <p class="sectiontag text-big">Lorem ipsum dolor sit maxime.</p>
            <p class="sectionsubtag text-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus
                sapiente sunt explicabo, possimus, magni aliquid aut quis commodi odit quas quidem, sint quaerat eos
                maxime quod natus ex recusandae sequi veritatis quam ipsum accusantium autem! Facilis sed ex iure
                accusantium dolorum repudiandae cum Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim
                officia sed, recusandae eligendi iure dolores officiis est voluptas. Perferendis deleniti deserunt nulla
                odit. Excepturi sit vitae vero perferendis nihil possimus necessitatibus, cupiditate voluptatem,
                pariatur voluptas ad reiciendis nesciunt, rerum voluptates! Eveniet possimus, a necessitatibus illum
                incidunt impedit expedita harum reprehenderit quod autem, animi, voluptates assumenda repudiandae
                quidem? Nisi eveniet optio laudantium impedit qui, illum eum quaerat. Nulla aut delectus quo eius
                dolorem odit quibusdam perferendis minus suscipit ea quasi animi error numquam neque beatae, dolores
                quam eligendi omnis a tempore laboriosam minima enim. Odio numquam voluptas error? Accusamus, molestiae
                provident. in libero, neque obcaecati asperiores quos maxime.</p>
        </div>
        <div class="thumbnail">
            <img src="../img/logo.jpg" alt="same as logo" class="imgfluid">
        </div>
    </section>
    <section class="footer">
            <center>
                <b>
                    <p style="font-size: 20px;">Follow us</h3>
                </b><br>
                <a href="www.facebook.com"><img src="../images/facebook.png" alt="facebook"></a>
                <a href="www.instagram.com"><img src="../images/instagram.png" alt="instagram"></a>
                <a href="www.twitter.com"><img src="../images/twitter.png" alt="twitter"></a>
                <br>
                <em>
                    <p style="font-size: 10px;">COPYRIGHT © 2021 NEWS.NET - ALL RIGHTS RESERVED</p>
                </em>
            </center>
        </section>
</body>

</html>

