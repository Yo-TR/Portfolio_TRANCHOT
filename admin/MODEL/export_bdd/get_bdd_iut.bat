cd "C:\wamp64\bin\mysql\mysql5.7.14\bin"
set myvar=%DATE:/=%
mysqldump -h localhost -u root portfolio > E:\DUT\MMI_2\"Algorithme & Programation"\Portfolio_TRANCHOT\admin\MODEL\export_bdd\sauvegarde%myvar%.sql
pause