<?php

$db = 'world';
$host ='localhost';
$user= 'nicolas';
$pass = 'test';

printf("%s, %s ,%s ,%s ", $user, $pass, $db, $host );


$mysqli=new mysqli($host,$user,$pass,$db);


$Q1 = 'SELECT * FROM city WHERE CountryCode = "FRA"';


$Q2 = 'SELECT city.name FROM city INNER JOIN country ON city.ID = country.Capital ';
$Q3 = 'SELECT count(Code) FROM country';
$Q4 = 'SELECT city.name FROM city WHERE city';

printf("<!DOCTYPE html>\n>");
printf("<html>\n");


printf("<head>\n");


printf("<title>Résultat Requête SQL</title>\n");
printf("</head>\n");
printf("<body>\n");
printf("%s", $Q1);
    if ($res=$mysqli->query($Q1)) {
        while($row=$res->fetch_assoc()) {
            printf("Nom : [%s]<br />\n",$row['Name']);
        }
        $res->free();
    }
    else {
        fprintf(STDERR,"ERREUR : %s !!!\n",$mysqli->error);
    }


printf("------------------------------------------------------ <br />");


    if ($res=$mysqli->query($Q2)) {
        while($row=$res->fetch_assoc()) {
            printf("Nom : [%s]<br />\n",$row['name']);
        }
        $res->free();
    }
    else {
        fprintf(STDERR,"ERREUR : %s !!!\n",$mysqli->error);
    }


printf("------------------------------------------------------ <br />");

if ($res=$mysqli->query($Q3)) {
    $row=$res-> fetch_row();
    printf("%d", $row[0]);
        
    $res->free();
    }
    else {
        fprintf(STDERR,"ERREUR : %s !!!\n",$mysqli->error);
    }

printf("------------------------------------------------------ <br />");

    if ($res=$mysqli->query($Q4)) {
        while($row=$res->fetch_assoc()) {
            printf("Nom : [%s]<br />\n",$row['Name']);
        }
        $res->free();
    }
    else {
        fprintf(STDERR,"ERREUR : %s !!!\n",$mysqli->error);
    }


printf("------------------------------------------------------ <br />");






printf("</body>\n");
printf("</html>\n");
$mysqli -> close();
?>

