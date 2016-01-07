----
-- phpLiteAdmin database dump (http://phpliteadmin.googlecode.com)
-- phpLiteAdmin version: 1.9.4.1
-- Exported: 10:43pm on October 22, 2013 (CEST)
-- database file: ../ifip_db.sqlite
----
BEGIN TRANSACTION;

----
-- Table structure for bez_oes
----
CREATE TABLE 'bez_oes' ('bezirk_id' INTEGER PRIMARY KEY NOT NULL, 'bezirk' TEXT, 'land_id' INTEGER, 'Einw_2001' REAL, 'Einw_2011' REAL);

----
-- Data dump for bez_oes, a total of 117 rows
----
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('101','Eisenstadt (Stadt)','1','11332','13101');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('102','Rust (Stadt)','1','1714','1896');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('103','Eisenstadt-Umgebung','1','38751','40936');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('104','Güssing','1','27193','26624');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('105','Jennersdorf','1','17934','17573');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('106','Mattersburg','1','37445','39050');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('107','Neusiedel am See','1','51726','55337');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('108','Oberpullendorf','1','38092','37583');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('109','Oberwart','1','53371','53585');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('201','Klagenfurt (Stadt)','2','90145','94483');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('202','Villach (Stadt)','2','57492','59324');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('203','Hermagor','2','19752','18718');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('204','Klagenfurt (Land)','2','56384','58499');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('205','St. Veit/Glan','2','58733','56061');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('206','Spittal/Drau','2','81706','78043');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('207','Villach (Land)','2','64685','64499');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('208','Völkermarkt','2','43570','42237');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('209','Wolfsberg','2','56607','54024');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('210','Feldkirchen','2','30272','30285');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('301','Krems an der Donau (Stadt)','3','23713','24032');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('302','Sankt Pölten (Stadt)','3','49117','51955');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('303','Waidhofen an der Ybbs (Stadt)','3','11662','11455');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('304','Wiener Neustadt (Stadt)','3','37626','41305');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('305','Amstetten','3','109182','112355');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('306','Baden','3','126906','139039');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('307','Bruck an der Leitha','3','40009','42910');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('308','Gänserndorf','3','88472','95841');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('309','Gmünd','3','40045','37761');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('310','Hollabrunn','3','50062','50301');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('311','Horn','3','32397','31429');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('312','Korneuburg','3','67981','75281');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('313','Krems (Land)','3','54409','55874');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('314','Lilienfeld','3','27083','26369');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('315','Melk','3','75279','76344');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('316','Mistelbach','3','72723','73962');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('317','Mödling','3','106379','114086');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('318','Neunkirchen','3','85769','85460');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('319','Sankt Pölten (Land)','3','93317','96522');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('320','Scheibbs','3','41320','41020');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('321','Tulln','3','64600','70963');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('322','Waidhofen an der Thaya','3','28192','26738');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('323','Wiener Neustadt (Land)','3','71907','75064');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('324','Wien Umgebung','3','102013','114920');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('325','Zwettl','3','45631','43707');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('401','Linz (Stadt)','4','183614','189889');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('402','Steyr (Stadt)','4','39339','38205');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('403','Wels (Stadt)','4','56481','58591');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('404','Braunau am Inn','4','95166','97826');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('405','Eferding','4','30711','31741');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('406','Freistadt','4','63988','65113');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('407','Gmunden','4','99331','99403');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('408','Grieskirchen','4','61951','62555');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('409','Kirchdorf/Krems','4','55161','55557');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('410','Linz-Land','4','129036','139116');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('411','Perg','4','63944','65738');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('412','Ried im Innkreis','4','58186','58553');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('413','Rohrbach','4','57811','56688');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('414','Schärding','4','56985','56426');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('415','Steyr (Land)','4','57604','58700');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('416','Urfahr-Umgebung','4','77724','81400');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('417','Vöcklabruck','4','126585','130316');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('418','Wels (Land)','4','62990','67945');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('501','Salzburg (Stadt)','5','142808','145270');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('502','Hallein','5','54281','57651');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('503','Salzburg Umgebung','5','135100','143081');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('504','St. Johann im Pongau','5','77865','78138');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('505','Tamsweg','5','21282','20502');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('506','Zell am See','5','84118','84424');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('601','Graz (Stadt)','6','226241','261726');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('603','Deutschlandsberg','6','61495','60689');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('606','Graz Umgebung','6','131300','143060');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('610','Leibnitz','6','75326','77338');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('611','Leoben','6','67764','62689');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('612','Liezen','6','82225','79367');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('614','Murau','6','31467','29186');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('616','Voitsberg','6','53588','52063');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('617','Weiz','6','86002','87802');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('620','Murtal','6','77877','73684');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('621','Bruck-Mürzzuschlag','6','107928','101979');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('622','Hartberg-Fürstenfeld','6','90767','89420');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('623','Südoststeiermark','6','91266','89572');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('701','Innsbruck (Stadt)','7','113457','119617');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('702','Imst','7','52656','56557');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('703','Innsbruck (Land)','7','154934','166762');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('704','Kitzbühel','7','59185','61705');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('705','Kufstein','7','93704','101047');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('706','Landeck','7','42795','43591');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('707','Lienz','7','50395','49319');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('708','Reutte','7','31583','31618');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('709','Schwaz','7','74834','79103');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('801','Bludenz','8','60461','61025');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('802','Bregenz','8','121097','126930');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('803','Dorbirn','8','75893','82386');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('804','Feldkirch','8','93597','100099');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('901','Wien 1.,Innere Stadt','9','17056','16374');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('902','Wien 2.,Leopoldstadt','9','90922','96113');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('903','Wien 3.,Landstraße','9','81287','84527');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('904','Wien 4.,Wieden','9','28357','30700');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('905','Wien 5.,Margareten','9','49116','52595');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('906','Wien 6.,Mariahilf','9','27873','29375');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('907','Wien 7.,Neubau','9','28305','30019');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('908','Wien 8.,Josefstadt','9','22582','23529');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('909','Wien 9.,Alsergrund','9','37821','39291');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('910','Wien 10.,Favoriten','9','150648','177989');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('911','Wien 11.,Simmering','9','76901','91087');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('912','Wien 12.,Meidling','9','78275','88503');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('913','Wien 13.,Hietzing','9','49580','50626');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('914','Wien 14.,Penzing','9','78180','84871');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('915','Wien 15.,Rudolfsheim-Fünfhaus','9','64898','71286');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('916','Wien 16.,Ottakring','9','86149','95694');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('917','Wien 17.,Hernals','9','47621','52521');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('918','Wien 18.,Währing','9','44997','47627');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('919','Wien 19.,Döbling','9','64033','68307');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('920','Wien 20.,Brigittenau','9','76267','83356');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('921','Wien 21.,Floridsdorf','9','128231','143962');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('922','Wien 22.,Donaustadt','9','136446','161419');
INSERT INTO "bez_oes" ("bezirk_id","bezirk","land_id","Einw_2001","Einw_2011") VALUES ('923','Wien 23.,Liesing','9','84716','94456');

----
-- Table structure for feedback
----
CREATE TABLE `feedback` (
  `f_nr` INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  `f_name` TEXT,
  `f_mail` TEXT,
  `f_anrede` TEXT,
  `f_msg` TEXT,
  `f_geoweb` INTEGER,
  `f_datum` TEXT);

----
-- Data dump for feedback, a total of 1 rows
----
INSERT INTO "feedback" ("f_nr","f_name","f_mail","f_anrede","f_msg","f_geoweb","f_datum") VALUES ('6','Johann Broethaler','jb@xx.at','Herr','Gratuliere - Formular funktionert','1','21-10-2013');

----
-- Table structure for lnd_oes
----
CREATE TABLE lnd_oes (
land_id INTEGER PRIMARY KEY NOT NULL,
land TEXT NOT NULL);

----
-- Data dump for lnd_oes, a total of 9 rows
----
INSERT INTO "lnd_oes" ("land_id","land") VALUES ('1','Burgenland');
INSERT INTO "lnd_oes" ("land_id","land") VALUES ('2','Kärnten');
INSERT INTO "lnd_oes" ("land_id","land") VALUES ('3','Niederösterreich');
INSERT INTO "lnd_oes" ("land_id","land") VALUES ('4','Oberösterreich');
INSERT INTO "lnd_oes" ("land_id","land") VALUES ('5','Salzburg');
INSERT INTO "lnd_oes" ("land_id","land") VALUES ('6','Steiermark');
INSERT INTO "lnd_oes" ("land_id","land") VALUES ('7','Tirol');
INSERT INTO "lnd_oes" ("land_id","land") VALUES ('8','Vorarlberg');
INSERT INTO "lnd_oes" ("land_id","land") VALUES ('9','Wien');
COMMIT;
