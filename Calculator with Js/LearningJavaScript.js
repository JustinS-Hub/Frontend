"use strict";
//---Kommtare

var nunmber = 5; // in-line comment

/*
Multi-line comment
console.log("Hallo World");
alert("AHHH");
*/
//--- "use strict";

//Schlüsselphrase um den "strengen Modus" beim Quellcode zu benutzen
//Hierbei werden gewöhnliche Progrmammierfehler und unsicher Aktionen erkenntlich gemacht
//Wird entweder am anfang einer js datei oder in einer Methode benutzt
//Fehler wie z.b. deklarieren von variablen ohne schlüsselwörter

//---Data Types:

/*
--undefined
-wenn funktionen keinen Rückgabewert haben und sie mit globalen Variablen arbeiten,
so wird diese variable auf "undefined" gesetzt

--null

--boolean
-true oder false
-besitzen numerische werte: true = 1 & false = 0

--string
Werden mit Anführungszeichen ""
In einem String kann der \ Escape-Operator genutzt werden
In Js können String mit '' einfachen/halben Anführungszeichen umschlossen werden und der Inhalt wird als String gewertet
Strings können mit + aneinander gekettet werden oder auch mit +=
String.length gibt die länge wieder
string[0] gibt das Zeichen an Stelle 0 wieder - es wird von 0 gezählt
Strings sind unveränderlich, allerdings kann die variablen zuweisung geändert werden


--symbol

--number
-ganze Zahlen und Kommazahlen
-es kann mit boolischen werten gerechnet werden
-wird mit einem nicht zahlentyp gerechnet, so ist das ergebnis "NaN" = Not a Number

--object
-werden von {} klamemrn umgeben
-können in Arrays gespeichert werden
-kann weitere Objekte beinhalten


--
-Es gibt 3 keywords für variablen Deklaration bzw. Initialisierung: var, let, const
-var sollte man nicht mehr benutzt werden, weil es wegen fehlender scopes eher fehleranfällig ist
-var ermöglicht den selben variablenbezeichner mehr mals zu benutzten
-Variablen sind nicht streng-typisiert und können den Variablentypen wechseln (außer const)
-Variablenamen sind case-sensitive
-Variablen die außerhalb von einer Methode definiert werden, besitzen einen globalen Gültigkeitsbereich
d.h. sie können von überall im Script aufgerufen werden
-Variablen können, bei unterschiedlichen Gültigkeitsbereichen den selben Namen besitzen
Dabei wird der lokale scope dem globalen scope vorgezogen

*/
var name = "Jörg";

name = true;

let otherName;

otherName = 6;
otherName;
// let ist scope(Gültigkeitsbereich)-abhängig



//pi = 5;
// const sind Variablen die nicht mehr geändert werden können
// "Uncaught TypeError: Assignment to constant variable"
//Konstanten sollten groß geschrieben werden
const PI = 3.14;

const s = [5, 7, 2]

// s = [2,5,7] //Wirft ne Fehlermeldung

s[0] = 2;
s[1] = 5;  // Wirft keine Fehlermeldung
s[2] = 7;
//console.log(s);

//um sicher zugehen, dass man wirklich keine Änderungen durchführen kann
//kann man "Object.freeze()" benutzen
//Object.freeze(s)
s[0] = 2;
//Uncaught TypeError: Cannot assign to read only property '0' of object '[object Array]'


//--- Rechenoperation
//console.log(otherName);
/*
+ Addition
- Subtraktion
* Multiplikation
/ Division
% Modulo

kurze Schreibweisen sind auch möglich:
var1 += || -= || *= || /= || %=  var2;

--- inkrement und dekrement
++var1  oder  var1++
--var1 oder var1--
*/

//--- Arrays
//Indizes
// Elemente können jeden Datentyp annehmen(?)
var ourArray = ["John", 23];
ourArray[0] = "nicht mehr John";
var zahl1 = ourArray[1];

// Js kann ein-dimensionale Arrays in der Console ausgeben
// console.log(ourArray) Ausgabe:
//(2) ['nicht mehr John', 23]

var myArray = [[1, 2, 3], [4, 5, 6], [7, 8, 9], [[10, 11, 12,], 13, 14]];
// myArray[3][0][1] = 11

// Hinzufügen und Löschen bei Arrays
var ourArray = ["Apfel", "Birnen", "Bananen"];
ourArray.push("Melonen", "Kiwi");
//console.log(ourArray)

//Elemente können mit push hinzugefügt werden
//Konsolenausgabe: (5) ['Apfel', 'Birnen', 'Bananen', 'Melonen', 'Kiwi']

//Das letzte Element wird entfernt und wird als Rückgabewert ausgegeben
ourArray.pop();

//Das erste element wird entfernt und wir als Rückgabewert ausgegeben
ourArray.shift();


//---Methoden/functions
/* 
-Schlüsselwort "function"
-Variablen können nicht von außerhalb einer Methode benutzt werden
-Methoden den selben Bezeichner haben, aber die Methode die zuletzt mit 
dem Bezeichner definiert wurde, wird aufgerufen, unabhängig ob sie sich in der Parameterliste unterscheiden
-

 */
function MethodenName() {
    //ausführbarerCode
    console.log("erster Text");
}

function MethodenName(a, b) {
    console.log(a - b);
}

function MethodenNam() {
    var test = 20;
    console.log("zweiter text");
}

//MethodenName(2,2);

let numb = 4;

function minusSieben(num) {
    return num -= 7;

}
//console.log(minusSieben(numb));

var zahl2 = minusSieben(10);

//--!!Anonyme Methoden und arrow function
// Anonyme Methoden sind namenlos bzw. bekommen ein Verweis durch variablen
// "Pfeilmethoden sind Methoden die andere Methoden als Parameter erwarten"
// Sie arbeiten gut mit 'höher rangigen' Funktionen wie map, filter, reduce


const anon = function () {
    return new Date();
}

//Pfeilmethode - arrow function
const magic = () => new Date();

//!!Higher Order
//Man kann mit flexiblen Parameterlise arbeiten, da man einen standartwert für variablen anlegen kann
const increment = (function () {
    return function increment(number, value = 0) { // 0 ist der Standartwert, der übergeben wird, wenn
        return number + value;                     // kein Wert für value übergeben wird
    };
}())
//console.log(increment(5, 2));
//console.log(increment(5))

//---Restoperator
//Der Restoperator "..." nimmt alle übergebenen argumente (anzahl scheint egal) und steckt sie in das array arr
function restOperator(...arr) {
    console.log(argumente)
}
//restOperator(1, 2, 3, 4, 5)

//---Spreadoperater
//Der Spreadoperator "..." (selbe Schreibweise wie Restoperator) kann den Inhalt eines Arrays verteilen(?)
//Er kann den Inhalt eines Arrays in ein anderes Array gespeichern
const arr1 = ['Jan', 'Feb', 'Mar', 'Apr',];
let arr2;
arr2 = [...arr1];
arr1[0] = 'Käse';
//console.log(arr2);



//---Vergleichsoperation
//-simple Vergleiche können mit "==" gemacht werder. Dabei werden die Datentypen, sofern sie unterschiedlich sind, in einen gemeinsamen Datentyp umgewandelt
//somit lässt sich zum Beispiel 3 == "3" die Nummer drei und ein String mit der Zahl drei vergleichen
//-mit dem strengen vergleichsoperator "===" wird ein true nur ausgegeben, sofern die Variablen auch typgleich sind
//-Das gleiche Konzept gilt auch für den ungelich operator "!="  und "!==" (strenger Vergleich)
//- größer / kleiner  "<" ">" (zahl1 > zahl2) (zahl1 < zahl2)
// größer gleich / kleiner gleich "<=" ">=" (zahl1 <= zahl2) (zahl1 >= zahl2)
// verkettung von wahrheitswerten mit "&&" für UND (beide Werte müssen wahr sein) bzw.
// "||" für ODER (mindestens ein Wert muss wahr sein)

// if-Abfrage
// wenn nur verglichen werden soll, ob ein Wert wahr ist kann die kurzschreibweise genutzt werden if(bool) anstatt if(bool == true)
// else leitet alternative Funktion, sofern die If-Abfrage false ist
// mit else if kann auf weitere bedingung geprüft werden
var bool;
if (bool) {
    console.log("bool ist wahr");
}
if (bool == false) {
    console.log("bool ist falsch");
}

var zahl2 = 11
var string1 = "3";

/* if(zahl2 == string1){
    console.log("Die Zahl und der String sind gleich");
}

if (zahl2 === string1){
    console.log("Die Zahl und der String sind gleich");
} else {
    console.log("Die beiden variablen sind nicht gleich bzw. vom gleichen Datentyp");
}

 */
if (zahl2 > 10) {
    //  console.log("Zahl ist größer als 10");
} else if (zahl2 < 5) {
    //    console.log("Zahl ist kleiner als 5");
} else {
    //    console.log("Zahl ist zwsichen 10 und 5");
}

//Switch-case-Abfrage
//Der vergleich wird mit dem strengen Vergleichsoperator gemacht(müssen typgleich sein)
// Ein fall muss mit dem schlüsselwort "break;" abgeschlossen werden

switch (zahl2) {
    case 5:
        console.log("ist 5");
        break;
    case 10:
        console.log("ist 10");
        break;
    case 8:
        console.log("ist 8");
        break;
    case 7:
        console.log("ist 7");
        break;
    case 2:
    case 1:
        console.log("ist 2 oder 1");
        break;
}

//---Objects
//Ähnlich wie Arrays, anstatt Indizes werden Eigenschaften/Properties zum speichern von Eigenschaften/attributes benutzt (?)
//

var ourDog = {
    "name": "Qunicy",
    "legs": 4,
    "siblings": 0,
    34: "Schäferhund"
};

//---Zugriff auf Objekteigenschaften
// Entweder mit Punktnotation oder mit Klammernotation

var dogProperty = ourDog.name;
var dogProperty = ourDog["name"];
var testIndex = 34;
var dogProperty = ourDog[testIndex];

//-- Hinzufügen von Objekteigenschaften
// über die Punktnotation könnnen Eigenschaften einfach hinzugefügt werden und gleichzeitig ein Wert zugewiesen werden.
// Wird kein Wert zugewiesen wird automatisch "undefined" zugewiesen
ourDog.bark = "wuff";
//console.log(ourDog.bark);

//-- Entfernen von Objekteigenschaften
// Man brauch das schlüsselwort "delete"
delete ourDog.bark;
//console.log(ourDog.bark);

//--Überprüfung von Besitz einer Eigenschaften eines Objektes
// Eigenschaft muss in Anführungszeichen sein
var bool = ourDog.hasOwnProperty('name');
//console.log(bool);

//--Zugriff auf verschachtelte Objekte

var auto = {
    "innenraum": {
        "sitze": 4,
        "radio": 1,
        "lenkrad": 2
    },
    "außenraum": {
        "spiegel": 2,
        "antenne": 1
    },
    "reifen": 4
};
//console.log(auto.innenraum.sitze); // Ausgabe: 4

//---while-Schleife
//while(Bedingung){}

var myArray = [];
var i = 0;
while (i < 10) {
    myArray.push(i);
    i++;
}
//console.log(myArray)

//---For-Schleife
//for(index Definition;Bedingung; In/De-krement )
for (var i = 0; i < myArray.length; i++) {
    //   console.log(myArray[i]);
}
//-- verschachtelte for-Schleife für ein verschateltes Array
var myArray2 = [[1, 2, 3], [11, 22, 33], [111, 222, 333,], [5, 4, 6]]
var string = "";
//console.log(string);
for (var i = 0; i < myArray2.length; i++) {
    for (var j = 0; j < myArray2[j].length; j++) {
        string += " " + myArray2[i][j];
    }
}
//console.log(string)

//---for-each-Schleife
//Arraybezeichner.ForEach(Funktion);  Die Funktion wird auch jedes element des Arrays benutzt und "muss vorher definiert werden"(?)
//myArray2.forEach(logItems);

//Die Fnktion brauch drei parameter
function logItems(item, index, arr) {
    console.log([index] + " " + item);
}

//---Do-While-Schleife
//diese Schleife läuft mindestens einmal durch bevor sie die Bedingung prüft
var myArray3 = [];
var i = 1;

do {
    myArray3.push(i * 5)
    i++;
} while (i < 10)
//console.log(i, myArray3)

//---nützliche Funktionen
//Math.floor rundet auf die nächst größere Ganzzahl(integer) auf
//Math.random generiert eine zufällige zahl zwischen 0 und 1 ist aber niemals 1
// darum Reichweite + 1
var zufallszahl = Math.floor(Math.random() * 10)

//---parseInt(String) wandelt einen String aus Ziffern in eine Zahl um
//es auch das Zahlsystem übergeben werden d.h. ob es sich um eine binare Zahl oder Dezimale Zahl handelt
function converInInteger(str) {
    return parseInt(str);
}
function convertFromBinary(str) {
    return parseInt(str, 2)
}

function convertFromHexadecimal(str) {
    return parseInt(str, 16)
}

//console.log(convertFromBinary("101"));
//console.log(convertFromHexadecimal("101"));

//---ternäre Operator
//Bedingung ? statement-wenn-wahr : statement-wenn-falsch;
//Kann ineinander verschachelt sein
var a = 5;
var b = 3;
//a === b ? console.log("sind gleich") : console.log("Sind nicht gleich");

//Destruckturierung dient zur eleganten Zuweseinung von Variablen aus Objektwerten
//
var voxel = { x: 3.6, y: 7.4, z: 6.54 };

var x = voxel.x;
var y = voxel.y;
var z = voxel.z
// Stattdessen kan man verkürzen
const { x: a1, y: b1, z: c1 } = voxel;
console.log(a1);
