<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page1.css">
    <style>
    body::before{
    content:"";
    position: absolute;
    height: 140%;
    width: 120%;
    top: 0px;
    left: 0px;
    z-index: -1;
    opacity: 1.2;
}
h1{
    display: inline-block;
    color: black;
    text-align: center;
    border: 2px solid black;
    border-radius: 5px;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    margin-left: 600px;
    padding: 10px;


}
#states{
    border: 2px solid black;
    border-radius: 5px;
    margin-top: 50px;
    margin-left: 200px;
    margin-right: 170px;
    padding-bottom: 170px ;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
}
#states ul{
    display: flex;
    justify-content: center;
}

#states ul li{
    display: flex;
    margin: 2rem;
    margin-top: 130px;
}
#one{
    height: 150px;
    width: 150px;
    border: 2px solid black;
    border-radius: 20px;
    transition: all 0.5s ease-in-out;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
#one:hover{
    cursor: pointer;
    height: 170px;
    width: 170px;
    
}
        </style>
</head>
<body>
    <h1>TRAVEL  ANYWHERE</h1>
    <div id="states">
        <ul>
            <li><a href="telanDist.php"><img id="one" src="https://media.istockphoto.com/id/981368726/vector/restaurant-food-drinks-logo-fork-knife-background-vector-image.jpg?s=612x612&w=0&k=20&c=9M26CBkCyEBqUPs3Ls5QCjYLZrB9sxwrSFmnAmNCopI="></a></li>
            <li><a href="telanDist.php"><img id="one" src="https://cdn.vectorstock.com/i/1000x1000/35/63/indian-buildings-monuments-with-flags-vector-25983563.webp"></a></li>
            <li><a href="telanDist.php"><img id="one" src="https://media.istockphoto.com/id/1254737904/vector/colorful-shopping-bags-logo-design-vector.jpg?b=1&s=612x612&w=0&k=20&c=NDv0vY6Wj7Ye4Xtdgm3KjpaKUqzE47vrJSFbSyfJuIA="></a></li>
            <li><a href="telanDist.php"><img id="one" src="https://uploads.turbologo.com/uploads/design/hq_preview_image/798549/draw_svg20210619-27637-1abgk3m.svg.png"></a></li>
        </ul>
    </div>
</body>
</html></a>