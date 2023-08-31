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
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="Tarantino.php" >Quentin Tarantino</a></li>
            <li><a href="Nolan.php" class="active">Christopher Nolan</a></li> 
            <li><a href="Lucas.php">George Lucas</a></li>
        </ul>
    </nav>		
    <section id="main">
        <article>
            <h2>Batman Begins (2005)</h2>
            <img alt="Batman Begins" src="picture/Batman Begins (2005).jpg" />
       <p>hier text für The Batman Begins (2005)..........................................................
           ........................................
           <hr>
       </p>
       <h2>The Prestige (2006)</h2>
       <img alt="The Prestige" src="picture/The Prestige (2006).jpg" />
       <p>hier text für The Prestige (2006)..........................................................
           ........................................
           <hr>
       </p>
       <h2>The Dark Knight (2008)</h2>
       <img alt="The Dark Knight" src="picture/The Dark Knight (2008).jpg" />
       <p>hier text für The Dark Knight (2008)..........................................................
           ........................................
           <hr>
       </p>
       <h2>Inception (2010)</h2>
       <img alt="Inception" src="picture/Inception (2010).jpg" />
       <p>hier text für Inception (2010)..........................................................
           ........................................
           <hr>
       </p>
       <h2>Tenet (2020)</h2>
       <img alt="Tenet" src="picture/Tenet (2020).jpg" />
       <p>hier text für Tenet (2020)..........................................................
           ........................................
           <hr>
       </p>
      
        </article>
        <aside>
            <section>
            <h2>Christopher Nolan</h2>
            <img alt="logo" src="picture/Christopher_Nolan.jpg" />
             <h3>Christopher Nolan wurde am 30. Juli 1970 in London geboren. 
                 Er hat sowohl britische als auch amerikanische Wurzeln und besitzt beide Staatsbürgerschaften.
                  Internationale Bekanntheit erlangte Nolan als Filmregisseur, Drehbuchautor und Filmproduzent. 
                  Schon mit sieben Jahren begann er Filme mit der Kamera seines Vaters zu drehen.
                   Nach der Schule studierte er englische Literatur in London. Im Jahr 1998 kam sein erster Spielfilm,
                    ‘Following‘, heraus, welcher ihm sein 
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
