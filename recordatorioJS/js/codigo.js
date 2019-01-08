//Lanzamos numero entre 1 y 10
function tirada() {
  let min=1;
  let max=10;
  let numero=Math.random() * (max - min) + min;
  return Math.floor(numero);
}

var numero=tirada();
console.log(numero);
var acierto=prompt("Intenta adivinar el número entre 1 y 10");
if(acierto==numero) alert("ACERTADO");
else alert("TuAbuelaEnTanga");
