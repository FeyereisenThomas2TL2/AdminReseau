<VirtualHost *:80>
        ServerAdmin t.feyereisen@students.ephec.be
        ServerName intranet.wt12.ephec-ti.be
        ServerAlias www.intranet.wt12.ephec-ti.be

        DocumentRoot /var/www/site/intra
        <Directory />
                Options FollowSymLinks
                AllowOverride None
        </Directory>
        <Directory /var/www/site/intra>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride None
                Order allow,deny
                allow from 54.37.65.68
        </Directory>
</VirtualHost>
