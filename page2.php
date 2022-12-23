
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="page2.css">
    <link rel="" href="telanDist.php">
    <style>
    body::before{
    content:"";
    background: url('https://www.xtrafondos.com/wallpapers/resized/la-vie-lactea-en-el-bosque-6729.jpg?s=large')no-repeat center center/cover;
    position: absolute;
    height: 120%;
    width: 120%;
    top: 0px;
    left: 0px;
    z-index: -1;
    opacity: 1.2;
}
h1{
    color: rgb(250, 251, 251);
    text-align: center;

}
#states ul{
    display: flex;
    justify-content: center;
}

#states ul li{
    display: flex;
    margin: 2rem;
}
#one{
    height: 250px;
    width: 250px;
    border: 2px solid black;
    border-radius: 20px;
    transition: all 0.5s ease-in-out;
}
#one:hover{
    cursor: pointer;
    height: 300px;
    width: 300px;
    
}
    </style>
</head>
<body>
    <h1>Welcome to the SOUTH</h1>
    <div id="states">
        <ul>
            <li><a href="place.php"><img id="one" src="https://media.gettyimages.com/vectors/telangana-3d-map-on-gray-background-vector-id1341602053?k=20&m=1341602053&s=612x612&w=0&h=FNC6tsOJRSUjFeLWT2IhXq4TqY5QytkrMX7kJrQ12WY=" alt=""></a></li>
            <li><a href="place.php"><img id="one" src="https://media.gettyimages.com/vectors/andhra-pradesh-map-on-blue-green-background-with-shadow-vector-id1225292489?k=20&m=1225292489&s=612x612&w=0&h=WY2pUVy7gDN5it8e8YNijznsIR_BMLqAaP__otkz1nw=" alt=""></a></li>
            <li><a href="place.php"><img id="one" src="https://media.gettyimages.com/vectors/karnataka-map-on-blue-green-background-with-shadow-vector-id1225430101?k=20&m=1225430101&s=612x612&w=0&h=FHhfH6HASHGpYgeZBZSyan3kevpS9tUmIB_dE6NHn8c=" alt=""></a></li>
        </ul>
        <ul>
            <li><a href="place.php"><img id="one" src="https://media.gettyimages.com/vectors/tamil-nadu-3d-map-on-gray-background-vector-id1341601989?k=20&m=1341601989&s=612x612&w=0&h=OJbtfeBMH-5WUyimnnJQpQk3cnLJHhBaQ0okSrpAyvQ=" alt=""></a></li>
            <li><a href="place.php"><img id="one" src="https://media.gettyimages.com/vectors/kerala-map-with-long-shadow-on-blank-background-flat-design-vector-id1271007958?k=20&m=1271007958&s=612x612&w=0&h=XjYSFkvtWIMjkEwwwJ75FacLadJ4nn-1vhoHnUvrDM4=" alt=""></a></li>
        </ul>
    </div>
</body>
</html>