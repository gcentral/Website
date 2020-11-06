# web-gcentral-demo
Prototype using Symfony/PHP for a ported version of the GCentral.org package indexing features.

This demo will be to demonstrate the capabilities of a traditional web back-end VS LabVIEW WebServices & NXG WebVIs. The features available in this demo will be user authentication, package searching, and basic package rating capabilities.

This will be developed using an XAMPP bundled Apache server with a MySQL compatible database.

The gcentral_demo folder contains a c.bat file to shorten command-line calls that normally start with `php bin/console <parameters>`.

`php bin/console make:controller` becomes:
`c make:controller`

Software:
 - VS Code
 - Git for Windows
 - GitKraken (or any git client IE TortoiseGit, SourceTree, etc. or just stick to CLI)
 - XAMPP (Apache, PHP, MySQL*, phpMyAdmin options installed) *Xampp packages the MariaDB open source database that is MySQL compatible
 - Composer (PHP Package Management)
 - Symfony CLI (Symfony scaffolding and project support tools for simplifying command-line interaction with symfony projects)

VS Code Extensions:
 - tmrdh.symfony-helper
 - nadim-vscode.symfony-extension-pack
 - yzhang.markdown-all-in-one

Apache setup:
 - Point DocumentRoot to gcentral_demo/public directory
 - Copy apache-pack's public/.htaccess contents to Directory element contents in httpd.conf and set AllowOverride to none

## The following listings are for information only. If cloning this repo run the command specified to retrieve the dependencies.

Symfony/Composer packages: (Get by `composer install` after cloning the repo)
 - Full project template (`symfony new gcentral_demo --full`)
 - symfony/apache-pack
 - symfony/webpack-encore-bundle (run `npm install` after installing)
 - annotations
 - nesbot/carbon
 - phpmailer/phpmailer
 - league/oauth2-google

#Server setup
## Get basic LAMP stack and security setup
 - Assuming Ubuntu server with account access setup already and sudo privileges for the commands
 - `sudo apt install apache2` install apache web server
 - setup virtual host
 - `sudo ufw allow in "Apache Full"` allow apache past firewall
 - `sudo apt install mysql-server` install mysql database server
 - `sudo mysql_secure_installation` secure mysql installation by removing test database, anonymous user, etc.
 - `sudo apt install php libapache2-mod-php php-mysql php-mbstring php-gettext php-cli phpmyadmin` install PHP and relevant modules and tools
 - `sudo systemctl restart apache2` restart apache with new modules and configuration

## Install composer and tools
 - `sudo apt install composer` install composer
 - `sudo apt install npm` install node package manager if doing JavaScript development
 - `sudo apt install git` install git for pulling updates

## Clone website repo and install dependencies
 - `git clone <url>` Make sure to clone to proper web directory root
 - `composer install` Install php dependencies
 - 