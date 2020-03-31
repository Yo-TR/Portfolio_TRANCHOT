set cnt=1
for %%A in (*.sql) do set /a cnt+=1
echo File count = %cnt%
cd "D:\Logiciels\bin\mysql\mysql5.7.26\bin"
set myvar=%DATE:/=%
mysqldump -h localhost -u root tranchot_portfolio > C:\Users\yoann\OneDrive\Bureau\sauvegarde%myvar%_v%cnt%.sql
pause