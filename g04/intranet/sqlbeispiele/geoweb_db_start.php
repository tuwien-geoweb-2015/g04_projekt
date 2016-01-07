<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <title>geoweb.m10 - Intranet - Php-Sqlite</title>
  <meta http-equiv="Content-Type" content="text/html" charset="iso-8859-1" />
  <meta name="description" content="Die Seite dient für den geoweb-Übungsbetrieb." />
  <meta name="author" content="Bröthaler, Hocevar" />
  <meta name="keywords" content="Raumplanung, Modul 10, geoweb" />
  <link rel="stylesheet" type="text/css" href="geoweb_styles.css" />

</head>

<body>

<div class="wrapper">
  <div class="header">
  	 <h1 align="right">ue.geoweb.m10</h1>
     <div id="navigation" style="left: 15px; bottom: 3px; width: 620px">
      <ul>
        <li><a href="http://student.ifip.tuwien.ac.at/geoweb/2015/intranet/" target="_top">
		Home</a></li>
        <li><a href="http://student.ifip.tuwien.ac.at/geoweb/intranet/intern/index.htm" target="_top">
		Intranet</a></li>
        <li><a href="http://student.ifip.tuwien.ac.at/geoweb/intranet/intern/php_start.php">
		Php</a></li>
        <li><a href="http://student.ifip.tuwien.ac.at/geoweb/intranet/intern/phpliteadmin_start.htm">
		SQLite</a></li>
        <li class="current"><a href="http://student.ifip.tuwien.ac.at/geoweb/2015/ifip/geoweb_db_start.php">
		Php-SQLite</a></li>
        <li><a href="http://student.ifip.tuwien.ac.at/geoweb/2015/ifip/spatialite_start.php">
		SpatiaLite</a></li>
        <li><a href="http://student.ifip.tuwien.ac.at/geoweb/intranet/intern/imak_db_start.php">
		(MySql/phpMyAdmin)</a></li>
      </ul>
    </div>
  </div>
  
  
  <div class="content">
  
    <h1><a name="anfang"></a>Php - SQLite - Datenbankzugriff</h1>
   
    <p>Übungsziel ist, mittels PHP und SQL 
	Daten in einer SQLite-Datenbank zu verwalten, flexibel abzufragen und die 
	Ergebnisse tabellarisch darzustellen (Demo-Beispiel: Formular für die 
	Abfrage einer SQLite3-Datenbank).</p>
    <h2>Schritte beim Datenbank-Zugriff</h2>

    <p> PHP ermöglicht den Zugriff zu Datenbanken. Für verschiedene Datenbanken 
	stehen produktspezifische Erweiterungen (Php-Funktionen/Php-Klassen) zur 
	Verfügung (siehe <a target="_blank" href="http://at.php.net/manual/en/refs.database.php">
	Php Database Extensions</a>).<br />
        Mit diesen Funktionen können Verbindungen zu Datenbanken hergestellt, 
	SQL-Befehle für Daten-Definition (CREATE, DROP), Daten-Manipulation (INSERT, 
	UPDATE, DELETE) und Daten-Abfrage (SELECT) an den Server geschickt und 
	Abfrageergebnisse verarbeitet werden. Die grundlegenden Schritte für den 
	Datenbank-Zugriff sind allgemein:
   </p>
    <ol>
        <li>Datenbank öffnen (Verbindung zur Serverdatenbank herstellen)</li>
        <li>SQL-Befehl durchführen (SELECT-Abfrage oder SQL-Befehl ohne 
		Abfrageergebnis)</li>
        <li>Abfrageergebnis verarbeiten (bei SELECT-Befehl)</li>
        <li>Datenbank schließen</li>
    </ol>
    
    <h2> PHP-Funktionen für SQLite3-Datenbank</h2>
    <p>Für den Zugriff auf eine SQLite3-Datenbank stellt PHP eine &quot;Klasse&quot;
	<a href="http://www.php.net/manual/de/class.sqlite3.php" target="_blank">
	SQLite3</a> (Datenbank-Objekt mit Methoden und Eigenschaften für Verbindung 
	zu Datenbank) zur Verfügung. Nachfolgend werden die wichtigsten Methoden und 
	Eigenschaften dieser Klasse angeführt (vollständige Liste siehe
	<a href="http://php.net/manual/de/book.sqlite3.php" target="_blank">
	SQLite3-Referenz</a>, siehe auch php-Dokumentation zu
	<a href="http://www.php.net/manual/en/language.oop5.php" target="_blank">
	Klassen und Objekte</a>)</p>
	<table border="1" cellpadding="1" cellspacing="0">
	<tbody valign="top">
	<tr><td style="width: 226px"><em>$db </em>= new SQLite3 (<em>$dbname</em>);</td><td>
		<a href="http://www.php.net/manual/de/sqlite3.open.php" target="_blank">
		Datenbank öffnen</a>: <em>$dbname </em>ist der Filename (Pfad) der 
		SQLite3-Datenbank. Es wird das Datenbankobjekt (<em>$db</em>) 
		zurückgegeben.</td></tr>
	<tr><td style="width: 226px"><em>$db</em>-&gt;exec(<em>$sql</em>);</td><td>
		<a href="http://www.php.net/manual/de/sqlite3.exec.php" target="_blank">
		Datenbank-Befehl durchführen</a>: SQL-Befehl (<em>$sql</em>), der keine 
		Daten zurückliefert (z.B. CREATE, DROP; INSERT, UPDATE, DELETE), wird 
		durchgeführt (Methode liefert TRUE, falls erfolgreich, sonst FALSE)</td></tr>
	<tr><td style="width: 226px"><em>$result</em> = <em>$db</em>-&gt;query(<em>$sql</em>);</td><td>
		<a href="http://www.php.net/manual/de/sqlite3.query.php" target="_blank">
		Datenbank-Abfrage durchführen</a>: SELECT-Befehl (<em>$sql</em>) 
		durchführen. Methode liefert Abfrageergebnis in&nbsp;
		<a href="http://www.php.net/manual/de/class.sqlite3result.php" target="_blank">
		Ergebnis-Objekt</a> <em>$result</em>.&nbsp; (Methode liefert FALSE, falls 
		nicht erfolgreich)</td></tr>
	<tr><td style="width: 226px"><em>$row</em> = <em>$result</em>-&gt;fetchArray();<br />
		</td><td>
		<a href="http://www.php.net/manual/de/sqlite3result.fetcharray.php" target="_blank">
		Zeile aus Abfrageergebnis</a> in 
		<em>$row</em> als numeriertes Array (Index ab 0) und/oder assoziatives 
		Array (Index ist Spaltenname) übertragen. Bei iterativen Aufruf wird 
		jeweils nächste Zeile geliefert. Falls keine Zeile (mehr) verfügbar ist, 
		wird FALSE geliefert. Die Spaltenwerte sind dann mit $row[0] bzw. 
		$row[&quot;Name&quot;], abrufbar.</td></tr>
	<tr><td style="width: 226px"><em>$result</em>-&gt;numColumns()</td><td>
		<a href="http://www.php.net/manual/de/sqlite3result.numcolumns.php" target="_blank">
		Anzahl der Spalten</a> 
		(Felder) in Abfrageergebnis</td></tr>
	<tr><td style="width: 226px"><em>$result</em>-&gt;ColumnName(<em>$i</em>)</td><td>
		<a href="http://www.php.net/manual/de/sqlite3result.columnname.php" target="_blank">
		Spaltenname</a> der n-ten Spalte (Index <em>$i</em> beginnend bei 0)</td></tr>
	<tr><td style="width: 226px"><em>$db</em>-&gt;lastErrorMsg()<br />
		<em>$db</em>-&gt;lastErrorCode()</td><td>
		<a href="http://www.php.net/manual/de/sqlite3.lasterrormsg.php" target="_blank">
		Fehlermeldung</a> 
		der letzten fehlerhaften Datenbank-Operation bzw.<br />
		<a href="http://www.php.net/manual/de/sqlite3.lasterrorcode.php" target="_blank">
		Fehlercode</a> der letzten fehlerhaften Datenbank-Operation liefern.</td></tr>
		<tr>
			<td style="width: 226px"><em>$db</em>-&gt;changes();</td><td>
			<a href="http://www.php.net/manual/de/sqlite3.changes.php" target="_blank">
			Anzahl der Zeilen</a>, die beim letzten SQL-Befehl hinzugefügt, 
			geändert oder gelöscht wurden</td>
		</tr>
		<tr>
			<td style="width: 226px"><em>$db</em>-&gt;loadExtension(<em>$lib</em>);</td><td>
			<a href="http://www.php.net/manual/de/sqlite3.close.php" target="_blank">
			SQLite-Erweiterung </a>(Library) laden <br />
			(für SpatiaLite zB loadExtension('libspatialite.so')</td>
		</tr>
	<tr><td style="width: 226px"><em>$db</em>-&gt;close();</td><td>
		<a href="http://www.php.net/manual/de/sqlite3.close.php" target="_blank">
		Schließen</a> der Verbindung zur SQLite3-Datenbank</td></tr>
	</tbody>
	</table>
    <p><em>$db</em> (Datenbank-Objekt) und <em>$result</em> (Ergebnis-Objekt) 
	sind eigene, frei festlegbare Variablennamen (Methoden dieser Objekte werden 
	mit -&gt; angegeben). Ebenso sind <em>$dbname</em> (Pfad), <em>$sql </em>
	(SQL-Befehl)<em>, $row</em> (Zeilen-Array) und <em>$i</em> (Nummer des 
	Spalte) eigene, frei festlegbare Variablennamen.</p>

    <h2> Einfache PHP-Datenbank-Beispiele</h2>

    <p>Beim Datenbank-Zugriff im Web sind auch Sicherheitsaspekte (u.a. 
	Vermeidung von <a target="_blank" href="http://php.net/manual/de/security.database.sql-injection.php">
	Sql-Injection</a>) zu beachten. Bei SQLite-Datenbank sind die Zugriffsrechte 
	auf File-Ebene (Lese- und Schreibrechte) zu beachten. Die Datenbank selbst 
	enthält keine Rechteverwaltung (User/Passwörter).<Br />
    Für die praktische Anwendung ist es zweckmäßig, einzelne Schritte in 
	getrennten Php-Dateien umzusetzen.<br />
    </p>
    
    <p>Beispiel 1: Öffnen der Datenbank (geoweb_db_open.php)</p>    
    <div class="phpsource"><?php highlight_file( "geoweb_db_open.php"); ?></div>  

    <p>Der Befehl für Öffnen der Datenbank wird hier in einer separaten 
	php-Datei eingefügt, die in weiteren php-Dateien mit Include eingebunden 
	werden kann. Der Name der Datenbank-Datei ist damit nur an einer Stelle 
	anzugeben.</p>

    <p>Beispiel 2: Schließen der Datenbank (geoweb_db_close.php)</p>    
    <div class="phpsource"><?php highlight_file( "geoweb_db_close.php"); ?></div><br />  

    <p><a  target="_blank" href="geoweb_db_bsp3.php">Beispiel 3:</a> Daten 
	abfragen (geoweb_db_bsp3.php)</p>    
    <p>Die Php-Dateien für Öffnen und Schließen der Datenbank können mit Include 
	eingebunden werden.</p>
    <div class="phpsource"><?php highlight_file("geoweb_db_bsp3.php"); ?></div>  
    <br />

    <p>Beispiel 4: Abfrageergebnis als Html-Tabelle ausgeben 
	(geoweb_db_table_function.php).<br />
    (Realisierung hier als eigene Funktion, sie kann damit an verschiedenen 
	Stellen verwendet werden)</p>    
    <div class="phpsource"><?php highlight_file("geoweb_db_table_function.php"); ?></div>  
    <br />

    <p><a  target="_blank" href="geoweb_db_bsp5.php">Beispiel 5:</a> Daten 
	abfragen und in Tabelle ausgeben (geoweb_db_bsp5.php)</p>    
    <div class="phpsource"><?php highlight_file("geoweb_db_bsp5.php"); ?></div>  
    <p>Ein @ vor einer Funktion (hier geoweb_db_table) oder einem Ausdruck 
	unterdrückt eventuelle Fehlermeldungen (z.B. um eigene Fehlermeldungen 
	auszugeben).<br />
	  </p>
    <p><a  target="_blank" href="geoweb_db_bsp6_form.php">Beispiel 6:</a> 
	Formular für Eingabe eines Sql-Befehls und Anzeige der Abfrageergebnisse<br />
	(geoweb_db_bsp6.php; SQL-Beispiele siehe unten)</p>
    <div class="phpsource"><?php highlight_file( "geoweb_db_bsp6_form.php"); ?></div>  

    <br />
    <p>SQL-Beispiele zur Datenbank ifip_db.sqlite<br />(zu SQL siehe <a  target="_blank" href="http://www.ifip.tuwien.ac.at/lehre/280290/unterlagen/geoweb_block2c_phpliteadmin.pdf">
	geoweb-phpLiteAdmin-Unterlage, Kap. 3</a>)</p>

    <table border="1" cellpadding="1" cellspacing="0">
    <tbody valign="top">
	<tr><td>Liste aller Bundesländer</td><td>SELECT * FROM lnd_oes</td></tr>
	<tr><td>Liste aller Wiener Bezirke</td><td>SELECT * FROM bez_oes WHERE 
		bezirk_id &gt;= 900</td></tr>
	<tr><td>Liste aller Bezirke, die mit B beginnen</td><td>SELECT bezirk_id, 
		bezirk FROM bez_oes WHERE bezirk LIKE 'B%'</td></tr>
	<tr><td>Liste der Bezirke mit Angabe des Landesnamens (Join der Tabellen 
		über Merkmal land_id), sortiert nach Landes-/Bezirksname</td>
            <td>SELECT bezirk_id,bezirk,lnd_oes.land_id,land FROM bez_oes INNER 
			JOIN lnd_oes ON bez_oes.land_id = lnd_oes.land_id ORDER BY 
			land,bezirk</td></tr>
	<tr><td>Summe der Einwohner in Österreich (auf Basis der Daten je Bezirk)</td>
            <td>SELECT SUM(Einw_2001), SUM(Einw_2011) FROM bez_oes</td></tr>
	<tr><td>Summe der Einwohner je Bundesland&nbsp; (auf Basis der Daten je Bezirk)</td>
            <td>SELECT land,SUM(Einw_2011) FROM lnd_oes INNER JOIN bez_oes ON 
			lnd_oes.land_id = bez_oes.land_id GROUP BY land</td></tr>
    </tbody>
    </table>
 	
    <p>Zum Testen SQL-Befehl einfach mit Copy&amp;Paste in <a  target="_blank" href="geoweb_db_bsp6_form.php">
	Formular Beispiel 6</a> einfügen<br />
	(oder SQL-Befehl mittels phpLiteAdmin testen).<br />
	  </p>
    <p><a href="geoweb_db_bsp7_demomap.php" target="_blank">Beispiel 7:</a> 
	Formular für Auswahl einer Karte (geoweb_db_bsp7_demomap.php)<br />
	Die Liste der verfügbaren Karte wird in der SQLite-Datenbank in der Tabelle 
	'demoMap' erfasst (Merkmale Name, Text, Quelle und URL). Gemäß Auswahl wird 
	der URL-Parameter bei dem Aufruf Kartendarstellung eingesetzt (zur 
	Kartendarstellung siehe nachfolgende geoweb-Blöcke).</p>
    <div class="phpsource"><?php highlight_file( "geoweb_db_bsp7_demomap.php"); ?></div>  

      <p>&nbsp;</p>

    <p>&nbsp;</p>
    <p>&nbsp;</p>

  </div>

	<div class="footer">
		<a href="#anfang">nach oben</a> | 
		<a href="http://student.ifip.tuwien.ac.at/geoweb/" target="_blank">
		geoweb.m10</a><br />
		Design by geoweb.ifip (Bröthaler, 2015) basad on imak.karto (2011).
	</div>

</div>


</body>

</html>