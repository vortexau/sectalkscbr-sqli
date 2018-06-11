<?php

require_once('db.php');

require_once('header.php');
print("# pwd ");
print("<br />");
print("/home/sqli");
print("<br />");
print("
select workshop, url from workshops;
+-------------------------------------+
| In Band       | <a href=\"/ib/?id=1\">sqli.uid0.sh/ib</a>     |
| Blind SQLi    | <a href=\"/blind\">sqli.uid0.sh/blind</a>  |
| Out of Band   | <a href=\"/oob\">sqli.uid0.sh/oob</a>    |
| ¯\_(ツ)_/¯    | <a href=\"/leet\">sqli.uid0.sh/leet</a>   |
+-------------------------------------+ ");
print("<br />");
print("greetz to syngularity0, lana, h4nzr && teh cbr krëw");
print("<br />");
print(":wq 4 lyfe");
require_once('footer.php');
