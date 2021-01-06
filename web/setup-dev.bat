@echo off
setlocal

set XAMPP_URL=http://dl.gcentral.org/xampp-portable-windows-x64-7.4.13-0-VC15.zip
set NODEJS_URL=https://nodejs.org/dist/v14.15.4/node-v14.15.4-win-x64.zip

call env

echo:
echo    === XAMPP ===
if exist xampp\php\php.exe goto skipxampp
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
del xampp.zip
echo Done.

echo    === Configure XAMPP ===
php bin\apache-config.php
if not %ERRORLEVEL%==0 goto badconfig


goto startcomposer

:skipxampp
echo:
echo Found php at %CD%\xampp\php\php.exe

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
call composer install

set EL=%ERRORLEVEL%
rem echo EL %EL%
if not %EL%==0 goto badphppackages

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
rem Need to make sure npm can relaunch node for some of the install actions
call env
call npm install
if not %ERRORLEVEL%==0 goto badnpm

echo:
echo:
echo    === SETUP COMPLETED ===
echo:
echo The development environment should now be ready to use!
echo You can run the development server with the command:
echo serve

exit /b 0

:badconfig
echo:
echo There was a problem configuring XAMPP. Try deleting the xampp folder
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