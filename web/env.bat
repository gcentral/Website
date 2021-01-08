@echo off

if not "%GCDEV%"=="T" goto setpath

exit /b 0

:setpath
echo Setting GCentral environment
set PATH=%CD%\nodejs;%CD%\xampp\php;%PATH%
set XAMPP_FOLDER=server
set GCDEV=T
prompt $CGCentral$F $P$G

exit /b 0