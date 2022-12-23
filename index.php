<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #tittle {
            padding-top: 40px;
        }

        * {
            margin: 0;
            padding: 0;
        }

        #navbar {
            background-color: black;
            display: flex;
            position: sticky;
            height: 80px;
            justify-content: center;
            border: 2px solid black;
            top: 0px;
            z-index: 45;
            opacity: 0.9;
        }

        #navbar ul {
            display: flex;
        }

        #navbar ul li {
            color: white;
            list-style: none;
            padding-top: 30px;
            padding-right: 30px;
            padding-left: 5px;
            cursor: pointer;
            border: 2px solid black;
            font-size: 20px;
            margin-right: 30px;
            border-radius: 10px;
        }

        #navbar ul li:hover {
            transition-property: all;
            transition-duration: 0.4s;
            cursor: pointer;
            color: palevioletred;
        }

        #body ul li {
            list-style: none;
            margin: auto;
        }

        #body ul {
            justify-content: center;
            align-items: center;
        }

        #one {
            height: 28rem;
            width: 65rem;
            border-radius: 20px;
            margin-bottom: 30px;
            margin-top: 30px;
            transition: all 1s ease-in-out;
            border: 5px solid black;
        }

        #two {
            height: 28rem;
            width: 65rem;
            border-radius: 20px;
            transition: all 1s ease-in-out;
            border: 5px solid black;
        }

        #one:hover {
            cursor: pointer;
            height: 30rem;
            width: 70rem;
            opacity: 0.8;

        }

        #two:hover {
            cursor: pointer;
            height: 30rem;
            width: 70rem;
            opacity: 0.8;

        }

        body {
            justify-content: center;
            height: 130rem;
            background: url('https://free4kwallpapers.com/uploads/originals/2019/11/11/home-world-plane-wallpaper.jpg')no-repeat center center/cover;
        }

        .item1 a {
            text-decoration: none;
            color: white;
            margin-left: 300px;
            padding: 3px;
            padding-left: 10px;
            padding-right: 10px;
            border: 2px solid white;
            border-radius: 10px;

        }

        .item1 a:hover {
            transition-property: all;
            transition-duration: 0.4s;
            cursor: pointer;
            color: palevioletred;
        }

        #head {
            text-decoration: none;
            padding-top: 1rem;
            font-size: 1.2rem;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: rgb(45, 6, 82);
            padding-left: 5rem;
            padding-right: 5rem;
        }

        #main {
            margin-top: 0%;
            text-align: center;
        }

        .item2 {
            height: 100px;
            box-shadow: rgba(240, 46, 170, 0.4) -5px 5px, rgba(240, 46, 170, 0.3) -10px 10px, rgba(240, 46, 170, 0.2) -15px 15px, rgba(240, 46, 170, 0.1) -20px 20px, rgba(240, 46, 170, 0.05) -25px 25px;
        }

        .item a {
            padding-left: 30px;
        }

        .ite img {
            margin-top: 20px;
            height: 300px;
            width: 90px;
            background-size: cover;
            border: 2px solid black;
            border-radius: 10px;
        }

        .ite {
            background-color: black;
            color: white;
            padding-right: 8px;
            padding-left: 5px;
            padding-bottom: 30px;
            margin-top: 30px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            border-radius: 10px;
        }

        .ite:hover {
            background-color: darkgray;
            color: black;
        }

        #navb input[type=text] {
            padding: 6px;
            margin-top: 22px;
            margin-bottom: 18px;
            font-size: 17px;
        }


        #navb .search-container button {
            padding: 10px 12px;
            margin-top: 18px;
            background: red;
            font-size: 17px;
            border: 2px solid white;
            cursor: pointer;
            border-radius: 30px;
        }


        #navb .search-container button:hover {
            background: white;
            border: 2px solid red;
            padding-left: 60px;
            transition-property: all;
            transition-duration: 0.4s;
        }
    </style>
</head>

<body>
    <div id="main">
        <nav id="navbar">
            <ul>
                <a href="index.php"><img class="item2" src="https://images-workbench.99static.com/iwtka28M5zc-aYIwxZ2_DkoOQRw=/99designs-contests-attachments/19/19156/attachment_19156974">
                    <li class="item"><a href=></a>Home</li>
                    <li class="item"><a href></a>Services</li>
                    <li class="item"><a href></a>security</li>
                    <li class="item"><a href></a>contact</li>
            </ul>
            <ul>
                <li class="item1"><a href="logout.php">Log out</a></li>
            </ul>
            <div id="navb">
                <form action="/action_page.php" class="search-container">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </nav>

        <h1 id="tittle">Tourism Services and Security</h1>
        <div class="owl-carousel owl-theme">
            <div class="ite"><a href=""><img src="https://swaadbiharka.com/wp-content/uploads/2021/08/One-day-in-Goa-Itinerary.jpeg"></a>GOA
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://us.123rf.com/450wm/babayuka/babayuka1905/babayuka190500137/123612867-hyderabad-telangana-state-india-charminar-famous-historical-mosque-travel-sketch-vintage-hand-drawn-.jpg?ver=6"></a>HYDERABAD
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://c8.alamy.com/comp/2F4ERB7/outline-bangalore-india-city-skyline-with-colored-historic-buildings-isolated-on-white-vector-illustration-bangalore-cityscape-with-landmarks-2F4ERB7.jpg"></a>MUMBAI
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://i.ytimg.com/vi/Y7upqgKoSBI/maxresdefault.jpg"></a>KERALA
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://skift.com/wp-content/uploads/2022/06/GettyImages-1208049833-scaled-e1654782364566-1024x682.jpg"></a>AGRA
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://images.news18.com/ibnlive/uploads/2021/09/hawa-mahal-16326642244x3.jpg"></a>BANGLORE
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://thumbs.dreamstime.com/z/illustration-banner-happy-onam-festival-south-india-kerala-text-space-background-happy-onam-festival-south-india-122488514.jpg"></a>TAMIL NADU
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://ik.imagekit.io/hydlcbl5qlg/public/misc/dhK84iF4eAGItdtA204QInHpGBE8cOiip6yYeke6.png?tr=h-0,w-800,pr-true,fo-auto"></a>GUJARATH
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://travelogyindia.b-cdn.net/blog/wp-content/uploads/2014/02/delhi.jpg"></a>RAJASTHAN
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiZotpDrzMH9QiS_PJ_L7hDtoa-jTV0y64al00AAD8JvcWs7IQgIFxizwf9UX7CQ1pEOo&usqp=CAU"></a>DELHI
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://www.sharpholidays.in/blog/wp-content/uploads/2018/07/south-india.jpg"></a>PUNJAB
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
            <div class="ite"><a href=""><img src="https://img.traveltriangle.com/blog/wp-content/uploads/2017/07/Kerala.jpg"></a>JAMMU
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestiae ipsam numquam id mollitia, harum, accusantium aliquam deserunt, atque quidem placeat nostrum. Atque, sunt explicabo?</p>
            </div>
        </div>
        <nav id="body">
            <h1 id="head">Shine your Way by Letting us Customize your Dream place & Trip!</h1>
            <ul>
                <h1 id="head">NORTH</h1>
                <li><a href="page1.php"><img id="one" src="https://www.xtrafondos.com/wallpapers/resized/montanas-en-lago-al-atardecer-4450.jpg?s=large" alt=""></li>
            </ul>
        </nav>
        <nav id="body">
            <h1 id="head">SOUTH</h1>
            <ul>
                <li><a href="page2.php"><img id="one" src="https://www.xtrafondos.com/wallpapers/resized/la-vie-lactea-en-el-bosque-6729.jpg?s=large" alt=""></li>
            </ul>
        </nav>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>

</body>

</html>