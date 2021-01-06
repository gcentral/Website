@echo off

if not "%GCDEV%"=="T" goto setpath

exit /b 0

:setpath
echo Setting GCentral environment
set PATH=%CD%\nodejs;%CD%\xampp\php;%PATH%
set GCDEV=T

exit /b 0