function mostrarCampos(){
    
    var funcao = document.getElementById("funcao").value;
    var campoAssalariado = document.getElementById("campoAssalariado");
    var campoComissionado = document.getElementById("campoComissionado");
    var campoHorista = document.getElementById("campoHorista");

    if(funcao === "assalariado"){
        campoAssalariado.style.display = "block";
        campoComissionado.style.display = "none";
        campoHorista.style.display = "none";
    }

    else if(funcao === "comissionado"){
        campoAssalariado.style.display = "none";
        campoComissionado.style.display = "block";
        campoHorista.style.display = "none";
    }

    else if(funcao === "horista"){
        campoAssalariado.style.display = "none";
        campoComissionado.style.display = "none";
        campoHorista.style.display = "block";
    }

    else{
        campoAssalariado.style.display = "none";
        campoComissionado.style.display = "none";
        campoHorista.style.display = "none";
    }
}

function mostrarFormulario() {
    var forms = document.getElementById("forms");
    
    if (forms.style.display === "none") {
      forms.style.display = "block";
      consulta.style.display = "none";
    } 
    
    else {
      forms.style.display = "none";
      consulta.style.display = "none";
    }
}

function mostrarConsulta() {
    var consulta = document.getElementById("consulta");
    
    if (consulta.style.display === "none") {
      consulta.style.display = "block";
      forms.style.display = "none";
    } 
    
    else {
      consulta.style.display = "none";
      forms.style.display = "none";
    }
}