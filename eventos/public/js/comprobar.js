function comp(){
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let edad=document.getElementById('edad').value;
  let provincia=document.getElementById('provincia').value;
  let error=true;
  if(nombre==""){
    error=false;
  }
  if (apellidos=="") {
    error=false;
  }
  if (edad=="") {
    error=false;
  }
  if (provincia=="") {
    error=false;
  }
  if (error==false) {
    return false;
  }
}
