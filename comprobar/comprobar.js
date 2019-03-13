function comprobar(){
  let nombre=document.getElementById("nombre").value;
  let numero=document.getElementById("numero").value;
  console.log(numero);
  if(nombre.length==0){
    alert("El campo nombre está vacio");
    return false;
  }else if (isNaN(numero)) {
    alert("El campo numero es un texto");
    return false;
  }else{
    return true;
  }

}
