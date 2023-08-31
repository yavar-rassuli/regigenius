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
            <h2>Star Wars Episode V - The Empire Strikes Back (1980)</h2>
            <img alt="The Empire Strikes Back" src="picture/Star Wars Episode V - The Empire Strikes Back (1980).jpg"  />
            <p>hier text für Star Wars Episode V - The Empire Strikes Back (1980)..........................................................
                ........................................
                <hr>
            </p>
            <h2>Star Wars Episode VI - Return of the Jedi (1983)</h2>
            <img alt="Return of the Jedi" src="picture/Star Wars Episode VI - Return of the Jedi (1983).jpg" />
            <p>hier text für Star Wars Episode VI - Return of the Jedi (1983)..........................................................
                ........................................
                <hr>
            </p>
            <h2>Star Wars Episode III - Revenge of the Sith (2005)</h2>
            <img alt="Revenge of the Sith" src="picture/Star Wars Episode III - Revenge of the Sith (2005).jpg" />
            <p>hier text für Star Wars Episode III - Revenge of the Sith (2005)..........................................................
                ........................................
                <hr>
            </p>
            <h2>Star Wars Episode IV A New Hope - Deleted Scenes (2011)</h2>
            <img alt="Star Wars Episode IV A New Hope" src="picture/Star Wars Episode IV A New Hope - Deleted Scenes (2011).jpg"  />
            <p>hier text für Star Wars Episode IV A New Hope - Deleted Scenes (2011)..........................................................
                ........................................
                <hr>
            </p>
        </article>
        <aside>
            <section>
            <h2>George Lucas</h2>
            <img alt="logo" src="picture/Goerge_Lucas.jpg"/>
             <h3>George Walton Lucas Jr. (* 14. Mai 1944 in Modesto, Kalifornien)
                  ist ein US-amerikanischer Produzent, Drehbuchautor und Regisseur. 
                  Seine erfolgreichsten Filmprojekte waren vor allem die Star-Wars-Filmreihe und die Indiana-Jones-Tetralogie.
                   Außerdem gilt Lucas mit Unternehmen wie dem Tricktechnikstudio Industrial Light & Magic seiner ehemaligen
                    Unternehmensgruppe Lucasfilm als Pionier beim Einsatz digitaler Kinokameras und des Qualitätsstandards 
                    THX als sehr engagierter Geschäftsmann in der Filmindustrie.
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
