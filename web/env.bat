@echo off

if not "%GCDEV%"=="T" goto setpath

exit /b 0

:setpath
echo Setting GCentral environment
set XAMPP_FOLDER=server
set PATH=%CD%\nodejs;%CD%\%XAMPP_FOLDER%\php;%PATH%
set GCDEV=T
prompt $CGCentral$F $P$G

exit /b 0