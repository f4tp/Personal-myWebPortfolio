<%
'Sends an email'
Dim mail
Set mail = Server.CreateObject("CDO.Message")
mail.To = "mr_treadwell@live.co.uk"
mail.From = Request.Form("email")
mail.Subject = "feedback PaulTreadwell.GA"
mail.TextBody = Request.Form("message")
mail.Send()
Response.Write("Mail Sent!")
'Destroy the mail object!'
Set mail = nothing
%>
