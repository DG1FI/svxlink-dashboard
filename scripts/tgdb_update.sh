#!/bin/sh

timestamp=$(date +'%d.%m.%Y')

TABLE_url=https://www.lausitzlink.de/downloads/tgdb_lausitzlink.php
TABLE_ofile=/tmp/tglist.tmp
PHP_ofile=/var/www/include/tgdb.inc.php

if [ -f "$PWD/html_table_converter" ]; then

echo "Get TG list fom https://fm-funknetz.de/Download/tgdb_site.php"

# python3 script for output HTML tables from an URL
# requires python3
# apt-get install python3-pip
# pip3 install html-table-parser-python3

$PWD/html_table_converter -u $TABLE_url > $TABLE_ofile

else
echo "$PWD/html_table_converter not found...EXIT"
exit 0

fi



sed -i "s/\]\]//g" $TABLE_ofile
sed -i "s/\[\[//g" $TABLE_ofile
sed -i "s/'TG /'/g" $TABLE_ofile
sed -i "s/ '/'/g" $TABLE_ofile
sed -i "s/\[//g" $TABLE_ofile
sed -i "s/\]//g" $TABLE_ofile

echo "<?php" > $PHP_ofile
echo "\$tgdb_array = [ " >> $PHP_ofile
cat $TABLE_ofile >> $PHP_ofile
echo "];" >> $PHP_ofile
echo "?>" >> $PHP_ofile



sed -i "s+','+' => '+g" $PHP_ofile

rm $TABLE_ofile
chown www-data:www-data $PHP_ofile
