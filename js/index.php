<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8" />
 <!-- 
 Wichtig: Reihenfolge einhalten:
    1 : CSS
    2 : Modernizr
    3 : JQuery
    4 : alle anderen Scripte 
       Wir folgen dem Schema, dass Scripte im Header einzubinden sind - und NICHT im Footer. Die Vorteile überwiegen den Nachteilen. 
     - einziger wesentlicher Nachteil: es vergeht mehr Zeit bisser User was sieht, da die Scripte erst *komplett* laden
     - wesentlicher Vorteil: Es gibt (zb. JQueryUI Plugins von denen DX abhängig ist) die nicht richtig funktionieren, wenn jQuery erst im Footer lädt. 
--> 

<title>Home - Rootfolder</title>
<meta charset="utf-8" />
<link href="Content/Images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<meta name="viewport" content="width=device-width" />
<link href="css/indexstyle.css" rel="stylesheet" type="text/css" />
<script src="scripts/modernizr-2.6.2.js" type="text/javascript"></script>
<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.8.11.js" type="text/javascript"></script>
</head>

<body>

    <header>
        <div id="logo">
            <img src="Logo.png" alt="text for no img" width="250" height="70">
        </div>
        <h1><span style="color: white; font-size: 29px" >FIA</span> karteikarten</h1>
    </header>

<div id="content">

    <nav>
        Netzmasken Ermittlung
        <ul>
            <li><a href="/karteikarten/js/netzmaskenermittlung.html">Aufgabe</a></li>
            <li><a href="/karteikarten/js/netzmaskenermittlung-2.html">Weg</a></li>
            <li><a href="/karteikarten/js/netzmaskenermittlung-3.html">Lösung</a></li>
        </ul>
    </nav>
    <nav>
        Adressart Ermittlung
        <ul>
            <li><a href="/karteikarten/js/adressartermittlung.html">Aufgabe</a></li>
            <li><a href="/karteikarten/js/adressartermittlung-2.html">Weg</a></li>
            <li><a href="/karteikarten/js/adressartermittlung-3.html">Lösung</a></li>
        </ul>
    </nav>
    <nav>
        Netzklassen BS
        <ul>
            <li><a href="/karteikarten/netzklassen.html">Aufgabe</a></li>
            <li><a href="/karteikarten/bs/html/netzklassen-2.html">Lösung</a></li>
        </ul>
    </nav>

</div>


<footer>
    <span style="font-size: 12px"> FOOTER Impressum etc.</span>
    <br />
    Die vorangegangenen Klangbeispiele sind Ergänzungen zum methodischen Aufbau der Textbeilage, und dürfen nicht losgelöst von dieser behandelt werden.
    <br />
    Hiermit distanziere ich mich von allen Inhalten dieser Seite, da ich nur das Layout gemacht habe :P
</footer>


</body>
</html>