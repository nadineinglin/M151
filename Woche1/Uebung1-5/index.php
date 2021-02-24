
    <!--Erster Teil der Übung nur Posten -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Uebung1-5</title>
    </head>
    <body>
    <h1>Pizza Konfigurator</h1>
    <p>Deine Pizza besteht aus folgenden Toppings</p>
    <?php
        session_start();
        
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $zutat = $_POST['zutat'];
            $zutaten =["Tomaten","Käse"];
            $length = count($zutaten);
            $zutaten[$length]= $zutat;
            for($i=0; $i<count($zutaten);$i++){
                echo $zutaten[$i];
            }
            

        } 
    ?>
        <form method="POST" action="?">
            <input type="text" name="zutat" placeholder="Zutat">
            <input type="submit" value="Add">
        </form>
    </body>
    </html> 