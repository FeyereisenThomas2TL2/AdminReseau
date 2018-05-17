<VirtualHost *:80>
        ServerAdmin t.feyereisen@students.ephec.be
        ServerName wt12.ephec-ti.be
        ServerAlias www.wt12.ephec-ti.be

        DocumentRoot /var/www/site/staticSite
        <Directory />
                Options FollowSymLinks
                AllowOverride None
        </Directory>
        <Directory /var/www/site/staticSite>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride None
                Order allow,deny
                allow from all
        </Directory>
</VirtualHost>

