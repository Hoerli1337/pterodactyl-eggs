# Pterodacty Egg for TrackMania Nations Forever / United Forever

- TrackMania Nations Forever / United Forever

A pure TM NF/UF server without any extras.
Requires only a TM account and necessary ports.

- TrackMania Nations Forever / United Forever XASECO

A pure TM NF/UF server including XASECO in version 1.
This server requires a MySQL database with the predefined tables for XASECO in order to function.

Setting up a TM NF / UF server with XASECO

1. create a server from the Egg
2. fill in all necessary fields, but enter incorrect access data for the database enter incorrect access data
3. Install the server
4. stop the server again immediately after the installation
5. create a database via the panel
6. enter the Enter the database access data in localdatabase.xml
7. import the database structures for XASECO manually via the command line

mysql -u USERNAME -p DATABASENAME < aseco.sql

mysql -u USERNAME -p DATABASENAME < extra.sql

mysql -u USERNAME -p DATABASENAME < rasp.sql


8. start the server


Tested on wings 1.11.3
________________________________________________

# Pterodacty Egg für TrackMania Nations Forever / United Forever

- TrackMania Nations Forever / United Forever

Ein reiner TM NF/UF Server ohne weitere Extras.
Benötigt nur ein TM-Account und notwednige Ports.

- TrackMania Nations Forever / United Forever XASECO

Ein reiner TM NF/UF Server inklusive XASECO in Version 1.
Dieser Server benötigt eine MySQL-Datenbank mit den vorgefertigten Tabellen für XASECO um zu funktionieren.

Einrichtung eines TM NF / UF Servers mit XASECO


1. Erstelle ein Server aus dem Egg
2. Fülle alle notwendigen Felder aus, gebe aber bei der Datenbank vorerst falsche Zugangsdaten ein
3. Lass den Server installieren
4. Stoppe den Server nach der Installation sofort wieder
5. Erstelle eine Datenbank über das Panel
6. Gebe die Datenbank-Zugangsdaten in der localdatabase.xml ein
7. Importiere über die Komandozeile die Datenbankstrukturen für XASECO von Hand

mysql -u USERNAME -p DATABASENAME < aseco.sql

mysql -u USERNAME -p DATABASENAME < extra.sql

mysql -u USERNAME -p DATABASENAME < rasp.sql


8. Starte den Server



Getestet mit Wings 1.11.3
![Screenshot](https://hoerli.net/wp-content/uploads/2023/04/TrackMania-Nations-Forever.png)

