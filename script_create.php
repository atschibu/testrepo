<?php
#script_create

$scriptay = array('https://itsfoss.com/notepad-alternatives-for-linux/', 'https://mizine.de/html/abruf-wie-durch-googlebot/', 'https://mizine.de/html/turbo-fur-die-webseite-htaccess-tunen-gzip-injizieren-und-ballast-abwerfen/', 'https://github.com/h5bp/server-configs-apache', 'http://www.gidnetwork.com/tools/gzip-test.php', 'https://developers.google.com/web/tools/lighthouse/audits/cache-policy?utm_source=lighthouse&utm_medium=unknown', 'https://coderwall.com/p/fatjmw/compressing-html-output-with-php', 'https://developers.google.com/speed/pagespeed/insights/?hl=de', 'https://compressor.io/compress', './filters/index.php','https://mediaqueri.es/','https://www.dr-zeitler.de/', 'https://www.dr-zeitler.de/favicon.ico', 'Ztransparent.png', 'https://search.google.com/test/mobile-friendly?utm_source=support.google.com/webmasters/&utm_medium=referral&utm_campaign=%206352293','../test/ini.php', '../test/mysql_reflex.php', '../test/create_tables_wget.php', '*** Mysql-Skripte zur Sicherheit alle einzeln anklicken*** ', 'create_section.php', 'create_text.php', 'create_link.php', 'create_section_link.php', '*** Ende Mysql-Skripte,  damit Änderungen in Datenbank übernommen werden***', 
'../test/show_tables.php','index.php','./filters/index.php', 'date.sh', 'index.php?transform=1', 'index.php?transform=2', 'index.php?section=allgemeinarzt-tanzen.php' ,
				 'index.php?section=allgemeinarzt-coronavirus-deutschland.php','index.php?section=allgemeinarzt-telefon-AU.php',
				 'index.php?section=allgemeinarzt-Atemnot-Infizierter.php','index.php?section=allgemeinarzt-fastenzeit.php', 'index.php?section=allgemeinarzt-tod.php',
			'https://dr-zeitler.de/allgemeinarzt-coronavirus-deutschland.htm', 'http://dr-zeitler.de/.well-known/pki-validation/starfield.html',);
echo '<ul>';
foreach($scriptay as $url) 
	printf("<li style='font-size: 20px'><a href = '%s'>%s</a></li>", $url, $url);
//
$script_extay_ssh = array('dr-zeitler.de', 'dr-zeitler.de/Ztransparent.png'); 
foreach($script_extay_ssh as $url) 
	printf("<li style='font-size: 20px'><a href = 'https://%s'>%s</a></li>", $url, $url);


$script_extay = array('heilsam.de', 'crosoft.de/test','crosoft.de/termine_datum/abfrage.php', '192.168.1.5/arzt-urteile/index.php', 'google.de',
'www.google.com/search?q=site:www.dr-zeitler.de&hl=de', 'php.net', '192.168.1.5/phphacks/spider/spider.php',  'dr-zeitler.de/report.html', '192.168.1.5/phphacks/spider/report.html', 'crosoft.de/intranet/index.php5', 
'crosoft.de/intranet/index.php5?wiki=HumanInventory', 'doklink.de/index.php?wiki=HiMain', 'doklink.de/index.php?wiki=InMain', '192.168.1.5/ch7/komplex/index.php?wiki=HiMain', 'pear.php.net',
);

echo '---------------------'.'<br>';

foreach($script_extay as $url) 
	printf("<li style='font-size: 20px'><a href = 'http://%s'>%s</a></li>", $url, $url);

echo '</ul>';
?>
