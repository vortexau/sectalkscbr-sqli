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
| Blind SQLi    | <a href=\"/bblind\">sqli.uid0.sh/bblind</a> |
| Blind SQLi    | <a href=\"/tblind\">sqli.uid0.sh/tblind</a> |
+-------------------------------------+ ");
print("<br /><br />");
print("greetz to jack, j@k0b, j0zh & b|ts0rm & teh adl krëw");
print("<br />");
print(":wq 4 lyfe");
require_once('footer.php');
