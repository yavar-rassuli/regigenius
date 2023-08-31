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
        <article class="impressum">
        <h1>impressum</h1> 
 
        <h3> Regigenius.ch</h3>
          <p>Benedict-Schule Zürich
          Militärstrasse 106
          8004 Zürich
         </p>

      <p>Telefon: 044 242 12 60</p>
      <p>E-Mail: Regigenius@Regigenius.ch </p>
        </article>
        <aside>
            <section>
            <img alt="logo" src="picture/Regigenius_Logo.png"/>
             
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
