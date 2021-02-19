 
var months = new Array();
months[0] = "Januari";
months[1] = "Feburari";
months[2] = "Maret";
months[3] = "April";
months[4] = "Mei";
months[5] = "Juni";
months[6] = "Juli";
months[7] = "Agustus";
months[8] = "September";
months[9] = "Oktober";
months[10] = "Nopember";
months[11] = "Desember";

var currentDate = new Date();
var currentMonth = currentDate.getMonth();
var hariini=currentDate.getDate();
currentDate.setDate(1);
// document.write('<div style = "">')
document.write("<table id='jjj' align='center' border='1' cellpadding='10' cellspacing='0'> ");
document.write("<tr>");
document.write("<td colspan=7 align='center'><strong>"+ months[currentMonth] +"</strong></td>");
document.write("</tr>")
document.write("<tr bgcolor='#fffa69'>");
document.write("<td align='center'>Mi</td>");
document.write("<td align='center'>Sn</td>");
document.write("<td align='center'>Sl</td>");
document.write("<td align='center'>Rb</td>");
document.write("<td align='center'>Km</td>");
document.write("<td align='center'>Jm</td>");
document.write("<td align='center'>Sb</td>");
document.write("</tr>");

if (currentDate.getDay() != 0)
{
document.write("<tr>");
for (i = 0; i < currentDate.getDay(); i++)
{
document.write("<td>&nbsp;</td>");
}
}

while (currentDate.getMonth() == currentMonth)
{
if (currentDate.getDay == 0)
{
document.write("<tr>");
}

if (hariini==currentDate.getDate())
{
document.write("<td align='center' bgcolor='#f5d5f7'> <font color='#817e80'><strong>" + currentDate.getDate() + "</strong></font></td>");
}

else
{
document.write("<td align='center'>" + currentDate.getDate() + "</td>");
}

if (currentDate.getDay() == 6)
{
document.write("</tr>");
}
currentDate.setDate(currentDate.getDate() + 1);
}

for (i = currentDate.getDay(); i <= 6; i++)
{
document.write("<td>&nbsp;</td>");
}

document.write("</table>");