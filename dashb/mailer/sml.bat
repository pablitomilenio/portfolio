@echo off

::--- Configuration ---

set MailSubject=FGSD taegliche Auswertung

set MailFromAdress=noreply@de.festo.com

set MailFromName=FGSD Festo Global Service Desk

set MailSMTPServer=adesmtp3.de.festo.net

set MailServerUser=pablo.navarro@festo.com

set MailSuffix=de.festo.com

blat "test.txt" -bcc "pablo.navarro@festo.com" -subject "%MailSubject%" -from "%MailFromName% <%MailFromAdress%>" -server "%MailSMTPServer%" -f "%MailServerUser%" -q 


rem -attach "C:\Users\de9fgsd\Documents\daily.pdf"