
// validacion de ingreso de solo numeros
<script type="text/javascript">
window.onload = function () {
document.formularioContacto.nombre.focus();
document.formularioContacto.addEventListener('submit', validarFormulario);
}
 
function validarFormulario(evObject) {
evObject.preventDefault();
var todoCorrecto = true;
var formulario = document.formularioContacto;
if (isNaN(formulario.edad.value)==true || /^[1-9]\d$/.test(formulario.edad.value)==false ) {alert ('Edad no valida'); todoCorrecto=false;}
if (isNaN(formulario.altura.value)==true || formulario.altura.value<=0 || formulario.altura.value>=2.50) {
alert ('Altura no valida'); todoCorrecto=false;}
if (todoCorrecto ==true) {formulario.submit();}
}


$x=866;
var_dump($x);/*devuelve el tipo de datos y el dato*/

//FUNCIONES STRING

// streng devuelve la longitud de una cadena
echo strlen("Hello world!");

// str_word_count cuenta el numero de palabras de una cadena
echo str_word_count("Hello world!");

// strrev invertir una cadena
echo strrev("Hello world!");

//Extraer carateres de una cadena
$cadena = substr($minombre , 0,4);

//imprimir ne mayusculas y minusculas
print strtolower($cadena);
print strtoupper($cadena);

//buscar una letra en una cadena
if(strpos("steven","h") === false) {
    print "Erro letra no encontrada"
}

// strpos buscar texto especifico 
echo strpos("Hello world!", "world");

// str_replace remplazar palabras
echo str_replace("world", "Dolly", "Hello world!");

// creacion de constante
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

// FUNCIONES

//creacion de funcion
function writeMsg() {
    echo "Hello world!";
}


//ajax
<i onclick="showHint(document.getElementById('txt1').value)" class="fa fa-search"></i>

writeMsg(); 

//-----------------------
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

//creacion de un array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

//ordenar array en forma ascendente
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

//ordenar array en forma decendente
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

// variable global (solo es tomada fuera de la funcion)


$x = 5;

function myTest() {
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";

// variable local(solo es tomada dentro de la funcion)




function myTest() {
    $x = 5; 
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";

//palabra global(acceder a un varaible gloabla dentro de una funcion) 


$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; 

// variables locales en array(actualizar varibles locales desde la funcion)


$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y;

