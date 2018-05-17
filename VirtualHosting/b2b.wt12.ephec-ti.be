<VirtualHost *:80>
        ServerAdmin t.feyereisen@students.ephec.be
        ServerName b2b.wt12.ephec-ti.be
        ServerAlias www.b2b.wt12.ephec-ti.be

        DocumentRoot /var/www/site/b2b
        <Directory />
                Options FollowSymLinks
                AllowOverride None
        </Directory>
        <Directory /var/www/site/b2b>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride None
                Order allow,deny
                allow from all
        </Directory>
</VirtualHost>
~
