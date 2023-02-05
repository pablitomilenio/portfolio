net use o: /delete /yes
@echo ^<br^>
net use o: \\cde62560\c$\TEMP\Statistik Fgsd2008 /user:de9fgsd
@echo ^<br^>
xcopy o:\Export.txt d:\xampp\htdocs\data.csv /y /k /h /r
@echo ^<br^>
@rem xcopy o:\Export_temp.txt d:\xampp\htdocs\data_new.csv /y /k /h /r
@echo ^<br^>

@rem xcopy \\cde62560\c$\TEMP\Statistik\Export.txt d:\xampp\htdocs\data.csv /y /k /h /r
@rem xcopy \\cde62560\c$\TEMP\Statistik\Export_temp.txt d:\xampp\htdocs\data_new.csv /y /k /h /r
@rem a file with data.csv name must exist within the folder
@rem  /y /k /h /r