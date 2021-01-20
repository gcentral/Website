@echo off
call env
setlocal

set XAMPP_URL=http://dl.gcentral.org/xampp.zip
set NODEJS_URL=https://nodejs.org/dist/v14.15.4/node-v14.15.4-win-x64.zip

set CONFIG_SERVER=F

echo:
echo    === XAMPP ===
if exist %XAMPP_FOLDER%\php\php.exe goto skipxampp
echo:

if exist xampp.zip goto skipxamppdl
<nul set /p ="Not found, downloading...          "
bin\wget -q -O xampp.zip %XAMPP_URL%
if not %ERRORLEVEL%==0 goto badxampp
echo Done.

:skipxamppdl

set zip=%CD%\xampp.zip
set dest=%CD%
echo Extracting %zip%
echo     to     %dest%
echo:
<nul set /p ="Extracting...                      "
call :UnZipFile "%dest%" "%zip%"
if not %ERRORLEVEL%==0 goto badxamppzip
echo Done.

echo    === Configure XAMPP ===
cd %XAMPP_FOLDER%
call setup_xampp
set EL=%ERRORLEVEL%
cd ..
if not %EL%==0 goto badconfig

<nul set /p ="Setting DocumentRoot...            "

php scripts\apache-config.php

del xampp.zip

rem create file signifying mysql update is needed
type nul>%temp%\gc_cfg

goto startcomposer

:skipxampp
echo:
echo Found php at %CD%\%XAMPP_FOLDER%\php\php.exe

:startcomposer

echo:
echo    === Composer ===
echo:
if exist bin\composer.phar goto skipcomposer
<nul set /p ="Downloading installer signature... "
php -r "copy('https://composer.github.io/installer.sig', 'installer.sig');"
set /P SIG=<installer.sig
del installer.sig
echo Done.

<nul set /p ="Downloading installer...           "
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
echo Done.

<nul set /p ="Verifying installer...             "
php -r "echo hash_file('sha384', 'composer-setup.php');" > checksum.sig
set /P ACTUAL_CHECKSUM=<checksum.sig
set ACTUAL_CHECKSUM=%ACTUAL_CHECKSUM%
del checksum.sig

if not %SIG%==%ACTUAL_CHECKSUM% goto badchecksum

echo Good.

echo:
<nul set /p ="Beginning installation...          "

cd bin
php ..\composer-setup.php --version=1.10.19 --quiet
set EL=%ERRORLEVEL%
cd ..
del composer-setup.php

if not %EL%==0 goto badcomposerinstall

echo Done.

echo:
echo You can now run composer from this folder for this project!

goto phppackage

:skipcomposer
echo Composer already exists, skipping installation.

:phppackage
echo:
echo    === PHP Packages ===
echo:
if exist .\vendor\ goto skipphppackages
call composer install

set EL=%ERRORLEVEL%
rem echo EL %EL%
if not %EL%==0 goto badphppackages

goto nodejs

:skipphppackages
echo vendor folder already exists, skipping.

:nodejs
echo:
echo    === NodeJS ===

if exist nodejs/node.exe goto skipnode
if exist nodejs.zip goto skipnodedl

echo:
<nul set /p ="Downloading NodeJS...              "
bin\wget -q -O nodejs.zip %NODEJS_URL%
if not %ERRORLEVEL%==0 goto badnodedl
echo Done.

:skipnodedl

echo:
mkdir nodejs-unzip
set zip=%CD%\nodejs.zip
set dest=%CD%\nodejs-unzip
echo Extracting %zip%
echo     to     %dest%
echo:
<nul set /p ="Extracting...                      "
call :UnZipFile "%dest%" "%zip%"
if not %ERRORLEVEL%==0 goto badnodezip
del nodejs.zip
echo Done.

dir nodejs-unzip /b > nodepath
set /p nodepath=<nodepath
del nodepath
move /Y nodejs-unzip\%nodepath% .\nodejs 1>nul
rmdir nodejs-unzip

goto startnpm

:skipnode
echo:
echo Found NodeJS at %CD%\nodejs\node.exe

:startnpm
echo:
echo    === JS Packages ===
echo:
if exist .\node_modules\ goto skipjspackages
call npm install
if not %ERRORLEVEL%==0 goto badnpm

:startbuild
echo:
echo    === Building JS ===
echo:
call dev

goto populatemysql

:skipjspackages
echo node_modules folder already exists, skipping.

:populatemysql

if not exist %temp%\gc_cfg goto skipconfigserver

echo:
echo    === Populating MySQL Database ===
echo:
echo Starting MySQL server
start /b %XAMPP_FOLDER%\mysql_start

rem more ping abuse as a pause
ping -n 10 127.0.0.1 >nul

echo:
<nul set /p ="Creating database...               "
%XAMPP_FOLDER%\mysql\bin\mysql -u root < scripts\setup.sql
echo Done.

<nul set /p ="Migrating up to test data...       "
set /p MIGRATION_VERSION=<scripts\gcentral_dev.ver
call c --no-interaction doctrine:migrations:migrate %MIGRATION_VERSION%
echo Done.
echo    Migrated to %MIGRATION_VERSION%

<nul set /p ="Applying versioned data...         "
rem echo use gcentral_dev; > %temp%\gc.sql
rem type scripts\gcentral_dev.sql >> %temp%\gc.sql
%XAMPP_FOLDER%\mysql\bin\mysql -u root < scripts\gcentral_dev.sql
echo Done.

<nul set /p ="Finishing migration...             "
call c --no-interaction doctrine:migrations:migrate
echo Done.

%XAMPP_FOLDER%\xampp_stop

rem remove file signifying mysql deployment is needed
del %temp%\gc_cfg

:skipconfigserver

echo:
echo:
echo    =============================================
echo    ============== SETUP COMPLETED ==============
echo    =============================================
echo:
echo The development environment should now be ready to use!
echo You can run the development server with the command:
echo serve.bat
echo:
echo The default login email and password are:
echo    email: test@gcentral.org
echo     pass: 123456
echo:
pause

exit /b 0

:badconfig
echo:
echo There was a problem configuring XAMPP. Try deleting the %XAMPP_FOLDER% folder
echo and try again.
goto badend

:badnpm
echo:
echo There was a problem installing the JS packages. Please try again.
goto badend

:badphppackages
echo:
echo Unable to install PHP packages with composer. Please try again.
goto badend

:badnodedl
echo FAILED!
echo:
echo There was a problem downloading NodeJS, please try again.
goto badend

:badchecksum
echo BAD!
echo:
echo Expected signature:
echo %SIG%
echo:
echo Calculated signature:
echo %ACTUAL_CHECKSUM%
echo:
echo Incorrect checksum for the composer installer. Please try again.
goto badend

:badcomposerinstall
echo FAILED!
echo:
echo There was a problem installing composer for this project.
goto badend

:badphppackages
echo:
echo There was a problem installing the PHP packages for this project.
echo Please try again.
goto badend

:badxampp
echo FAILED!
echo:
echo Unable to download XAMPP zip from GCentral, please try again.
goto badend

:badxamppzip
echo FAILED!
echo:
echo There was a problem unzipping the XAMPP server. Please check
echo xampp.zip
echo and unzip it yourself and rerun this script or delete it
echo and rerun this script.
goto badend

:badend
pause
exit /b 1

:UnZipFile <ExtractTo> <newzipfile>
set vbs="%temp%\_.vbs"
if exist %vbs% del /f /q %vbs%
>%vbs%  echo Set fso = CreateObject("Scripting.FileSystemObject")
>>%vbs% echo If NOT fso.FolderExists(%1) Then
>>%vbs% echo fso.CreateFolder(%1)
>>%vbs% echo End If
>>%vbs% echo set objShell = CreateObject("Shell.Application")
>>%vbs% echo set FilesInZip=objShell.NameSpace(%2).items
>>%vbs% echo objShell.NameSpace(%1).CopyHere(FilesInZip)
>>%vbs% echo Set fso = Nothing
>>%vbs% echo Set objShell = Nothing
cscript //nologo %vbs%
set EL=%ERRORLEVEL%
if exist %vbs% del /f /q %vbs%
exit /b %ERRORLEVEL%

:end