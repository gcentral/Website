@echo off

call env
setlocal

echo:
<nul set /p ="Removing XAMPP..."
rmdir /s /q %XAMPP_FOLDER% 2>nul
del /q xampp.zip 2>nul
echo Done.

<nul set /p ="Removing NodeJS..."
rmdir /s /q nodejs 2>nul
echo Done.

<nul set /p ="Removing PHP Packages..."
rmdir /s /q vendor 2>nul
rmdir /s /q var 2>nul
echo Done.

<nul set /p ="Removing JS Packages..."
rmdir /s /q node_modules 2>nul
echo Done.

<nul set /p ="Removing Composer..."
del /q bin\composer.phar 2>nul
echo Done.