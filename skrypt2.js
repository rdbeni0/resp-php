$('#zagranicznaprzesylka').click( function() { 
var strefa = document.getElementById("zagrlokalizacja").value;	var wagaprzed = document.getElementById("zagrwagaPrzedmiotu").value;
var priorytet = document.getElementById("zagrprior").value;
var calkowitailosc = document.getElementById("zagrilosc").value;



if (strefa == 100) {if (priorytet == 2){if (wagaprzed == 5){
var wynik = "5";}
else if (wagaprzed == 7) {var wynik = "9";
}else if (wagaprzed == 12) {var wynik = "10";} 
else if (wagaprzed == 14) {var wynik = "11";
} else if (wagaprzed == 17) {var wynik = "21.30";
} else if (wagaprzed == 33) {var wynik = "40.90";} }
else if (priorytet == 1){
	if (wagaprzed == 5){
var wynik = "5.20";}
else if (wagaprzed == 7) {var wynik = "11.50";}
else if (wagaprzed == 12) {var wynik = "13";}
else if (wagaprzed == 14) {var wynik = "15.30";
} else if (wagaprzed == 17) {var wynik = "29.30";} 
else if (wagaprzed == 33) {var wynik = "58.90";
} }}
else if (strefa == 105) {
	if (priorytet == 2){
if (wagaprzed == 5){var wynik = "5";}
else if (wagaprzed == 7) {	var wynik = "9";
}else if (wagaprzed == 12) {var wynik = "10";
}else if (wagaprzed == 14) {var wynik = "11.50";} 
else if (wagaprzed == 17) {var wynik = "21.80";	} 
else if (wagaprzed == 33) {
var wynik = "41.40";} }	
else if (priorytet == 1){
	if (wagaprzed == 5){
var wynik = "5.20";}
else if (wagaprzed == 7) {var wynik = "11.50";
}else if (wagaprzed == 12) {var wynik = "13";}
else if (wagaprzed == 14) {
var wynik = "19.30";} 	
else if (wagaprzed == 17) {var wynik = "38";
} else if (wagaprzed == 33) {var wynik = "77";
} }}
else if (strefa == 109) {
if (priorytet == 2){
if (wagaprzed == 5){var wynik = "5";}
else if (wagaprzed == 7) {	var wynik = "9";}
else if (wagaprzed == 12) {var wynik = "10";}
else if (wagaprzed == 14) {var wynik = "11.50";} 
else if (wagaprzed == 17) {var wynik = "21.80";	} 
else if (wagaprzed == 33) {var wynik = "41.40";} }
else if (priorytet == 1){
	if (wagaprzed == 5){var wynik = "5.20";}
else if (wagaprzed == 7) {var wynik = "11.50";} 
else if (wagaprzed == 12) {var wynik = "13";
}else if (wagaprzed == 14) {var wynik = "24";} 	
else if (wagaprzed == 17) {var wynik = "45";
} else if (wagaprzed == 33) {var wynik = "95";} }}
else if (strefa == 115) {
if (priorytet == 2){
if (wagaprzed == 5){var wynik = "5";}
else if (wagaprzed == 7) {
var wynik = "9";}
else if (wagaprzed == 12) {	var wynik = "10";
}else if (wagaprzed == 14) {var wynik = "11.50";} 
else if (wagaprzed == 17) {var wynik = "21.80";} 	
else if (wagaprzed == 33) {var wynik = "41.40"; } 
}else if (priorytet == 1){
if (wagaprzed == 5){	var wynik = "5.20";}
else if (wagaprzed == 7) {var wynik = "11.50";}
else if (wagaprzed == 12) {var wynik = "13";
}else if (wagaprzed == 14) {var wynik = "34.50";} 
else if (wagaprzed == 17) {	var wynik = "68";
} 
else if (wagaprzed == 33) {	var wynik = "147";} }} var calkowitailosc2 = calkowitailosc * wynik;
alert("Końcowa cena to: " +calkowitailosc2 +" zł."); });
