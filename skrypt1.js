$('#przesylkakrajowa').click( function() { 

	
var garbart = document.getElementById("garbaryt").value;
var priorytt = document.getElementById("priorytet").value;
var wagaListu = document.getElementById("wagaListu").value;
var calkowitailosc = document.getElementById("ilosc").value;


if (document.getElementById("radio1").checked) {
var potwierdzenie1 = document.getElementById("radio1").value;
potwierdzenieWynik1 = 0;
} 
else if (document.getElementById("radio2").checked){
var potwierdzenie1 = document.getElementById("radio2").value;
potwierdzenieWynik1 = 1.90;
}  
if (document.getElementById("radio3").checked) {
var potwierdzenie2 = document.getElementById("radio3").value;
potwierdzenieWynik2 = 0;
} 
else if (document.getElementById("radio4").checked){
var potwierdzenie2 = document.getElementById("radio4").value;
potwierdzenieWynik2 = 0.50;
} 
if (wagaListu == 77)
{ 
if (priorytt == 10){if (garbart == 20){
var wynik = "4.20";	}
else if(garbart == 21){
var wynik = "7.50";	}}
else if (priorytt == 11){
if (garbart == 20){	var wynik = "5.50";	
}else if(garbart == 21){var wynik = "8.30";}}}
else if (wagaListu == 79){
if (priorytt == 10){
if (garbart == 20){var wynik = "5.90";	}
else if(garbart == 21){var wynik = "8.30";}}
else if (priorytt == 11){ 
if (garbart == 20){ var wynik = "7.20";}
else if(garbart == 21){
var wynik = "11";}}}
else if (wagaListu == 81){
if (priorytt == 10){
if (garbart == 20){	var wynik = "8.50";	
}else if(garbart == 21){var wynik = "9.50";}}
else if (priorytt == 11){
if (garbart == 20){var wynik = "11.00";	}
else if(garbart == 21){var wynik = "14.50";}}}


var potwierdzenia = potwierdzenieWynik1 + potwierdzenieWynik2;var potwierdzeniacalosc = calkowitailosc * potwierdzenia;
var wynik2 = calkowitailosc * wynik;var wynik3 = potwierdzeniacalosc + wynik2;


alert("Cena 1 SZTUKI bez potwierdzeń: "+wynik+" zł.\n"
+"Cena WSZYSTKICH sztuk bez potwierdzeń: "+wynik2 +" zł.\n"
+"ŁĄCZNA cena za wszystkie potwierdzenia: "+ potwierdzeniacalosc+" zł.\n\n"+"KOŃCOWA cena za całość z potwierdzeniami: \n"+ wynik3 +" zł."); 

})
