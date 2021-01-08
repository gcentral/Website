@echo off
call env

cd %XAMPP_FOLDER%

start /b xampp_start

rem Pause for a handful of seconds by abusing ping
ping -n 4 127.0.0.1 >nul

echo:
echo:
echo ======================================================
echo Server is running. You can access the server at
echo http://localhost
echo:
echo You can manage the mysql database at
echo http://localhost/phpmyadmin
echo ======================================================
echo:
echo Pressing any key will shutdown the development server.

start "" http://localhost
pause

start /b /wait xampp_stop

cd ..

exit /b 0