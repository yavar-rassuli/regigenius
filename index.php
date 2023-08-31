<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Home Page</title>
<link rel="stylesheet" type ="text/css" href="style.css"></link>
<script src= "http://code.jquery.com/jquery-1.10.2.min.js"></script>
 <script type="text/javascript">
        $(document).ready(function(){
            $('.menubutton').click(function(){
                $('nav').slideToggle('slow');
            });
        });
</script>

</head>
<body>
<figure class ='logo'>
        <a href="index.php" target="_blank"><img alt="logo" src="picture/Regigenius_Logo.png" width="120px" height="80px"/></a>
    </figure>
	<section id="menubar">
        <ul>
            <li class="menubutton" ><img src="picture/Menu_icon.png"></li>
        </ul>
    </section>
    <header>
        <h1>Wilkommen zum Regigenius</h1>
    </header>	
    <nav class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Tarantino.php" >Quentin Tarantino</a></li>
            <li><a href="Nolan.php" >Christopher Nolan</a></li> 
            <li><a href="Lucas.php">George Lucas</a></li>
        </ul>
    </nav>		
    <section id="main">
        <article>
            <h2>Film</h2>
             <video class='video' poster="picture/movies.jpg" autoplay="autoplay" loop="loop" controls="controls" width="600" height="450">
                <source src="video/regigenius_MYC.mp4" type="video/mp4">
            </video>
            <p></p>
       <p>hier text für film vielleicht!!..........................................................
           ........................................
           <hr>
       </p>
        </article>
        <aside>
            <section>
                <h2>Homepage</h2>
                <img alt="logo" src="picture/regigenius.jpg" width="350" height="400"/>
                <h3>Quentin Jerome Tarantino ist ein US-amerikanischer Filmregisseur, Produzent, 
                    Drehbuchautor, Kameramann und Schauspieler. Er ist zweifacher Oscar- und dreifacher
                    Golden-Globe-Preisträger sowie Gewinner der Goldenen Palme der Internationalen Filmfestspiele von Cannes. Wikipedia
                    Geboren: 27. März 1963 (Alter 57 Jahre), Knoxville, Tennessee, Vereinigte Staaten
                    Vollständiger Name: Quentin Jerome Tarantino
                    Ehepartnerin: Daniella Pick (verh. 2018)
                </h3>
            </section>
        </aside>
    </section>
    <footer>
        <ul> 
        <li><a href="Impressum.php" >Impressum</a></li>
             <p> © Copyright 2020-2021 by Martin, Yavar, Christopher. All Rights Reserved.
                   Regigenius is Powered by MYC.</p> 
        </ul>
    </footer>
        
        
</body>

</html>
