@echo off

::--- Configuration ---

set MailSubject=Schwerwiegende Warnung: Kursverfall !

set MailFromAdress=noreply@de.festo.com

set MailFromName=Statistik Server FGSD

set MailSMTPServer=adesmtp3.de.festo.net

set MailServerUser=pablo.navarro@festo.com

set MailSuffix=de.festo.com

blat "BadNews.html" -bcc "pablo.navarro@festo.com" -subject "%MailSubject%" -from "%MailFromName% <%MailFromAdress%>" -server "%MailSMTPServer%" -f "%MailServerUser%" -q 


rem -attach "C:\Users\de9fgsd\Documents\daily.pdf"