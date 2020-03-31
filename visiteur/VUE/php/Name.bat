for %%f in (C:\wamp64\www\TRANCHOT\Portfolio_TRANCHOT\visiteur\VUE\php\*.php) do call :process %%f
goto :eof

:process
SET fichier=%1
echo %fichier%>>test.txt

