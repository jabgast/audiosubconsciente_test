$(document).ready(function(){
    $('#selectorTitl11').click(function(){
      $('#subSelect').slideToggle("slow");
    });
  });

  $(document).ready(function(){
    $('#selectorTitl12').click(function(){
      $('#subSelect2').slideToggle("slow");
    });
  });

$(document).ready(function(){
  $('#movSela').click(function(){
    $('#optConta').slideToggle("slow");
  });
});

$(document).ready(function(){
  $('#movSelb').click(function(){
    $('#optContb').slideToggle("slow");
  });
});
function showOndas(){
    var ondasSetValue = document.getElementById("generoSelect").value;
    
    if(ondasSetValue=="ondas"){
        document.getElementById("ondasSelector").style.display = "inline-block";
    }else{
        document.getElementById("ondasSelector").style.display = "none";
    }
    
     if(ondasSetValue=="meditacion"){
        document.getElementById("frecuenciaSelector").style.display = "inline-block";
    }else{
        document.getElementById("frecuenciaSelector").style.display = "none";
    }
    
     if(ondasSetValue=="naturaleza"){
        document.getElementById("ambienteSelector").style.display = "inline-block";
    }else{
        document.getElementById("ambienteSelector").style.display = "none";
    }
      if(ondasSetValue=="cancion"){
        document.getElementById("fileSelector").style.display = "inline-block";
    }else{
        document.getElementById("fileSelector").style.display = "none";
    }
}

function showGeneros_a1(){
  var generoSetValue_a1 = document.getElementById("generoSelect_a1").value;
  
  if(generoSetValue_a1=="ondas_a1"){
      document.getElementById("ondasSelector_a1").style.display = "inline-block";
  }else{
      document.getElementById("ondasSelector_a1").style.display = "none";
  }
  
   if(generoSetValue_a1=="meditacion_a1"){
      document.getElementById("frecuenciaSelector_a1").style.display = "inline-block";
  }else{
      document.getElementById("frecuenciaSelector_a1").style.display = "none";
  }
  
   if(generoSetValue_a1=="naturaleza_a1"){
      document.getElementById("ambienteSelector_a1").style.display = "inline-block";
  }else{
      document.getElementById("ambienteSelector_a1").style.display = "none";
  }
    if(generoSetValue_a1=="cancion_a1"){
      document.getElementById("fileSelector_a1").style.display = "inline-block";
  }else{
      document.getElementById("fileSelector_a1").style.display = "none";
  }
}

function showGeneros_a2(){
  var generoSetValue_a2 = document.getElementById("generoSelect_a2").value;
  
  if(generoSetValue_a2=="ondas_a2"){
      document.getElementById("ondasSelector_a2").style.display = "inline-block";
  }else{
      document.getElementById("ondasSelector_a2").style.display = "none";
  }
  
   if(generoSetValue_a2=="meditacion_a2"){
      document.getElementById("frecuenciaSelector_a2").style.display = "inline-block";
  }else{
      document.getElementById("frecuenciaSelector_a2").style.display = "none";
  }
  
   if(generoSetValue_a2=="naturaleza_a2"){
      document.getElementById("ambienteSelector_a2").style.display = "inline-block";
  }else{
      document.getElementById("ambienteSelector_a2").style.display = "none";
  }
    if(generoSetValue_a2=="cancion_a2"){
      document.getElementById("fileSelector_a2").style.display = "inline-block";
  }else{
      document.getElementById("fileSelector_a2").style.display = "none";
  }
  if(generoSetValue_a2=="audioDinamico_a2"){
    document.getElementById("audioDinamicoSelector_a2").style.display = "inline-block";
}else{
    document.getElementById("audioDinamicoSelector_a2").style.display = "none";
}
}
function showGeneros_a3(){
  var generoSetValue = document.getElementById("generoSelect_a3").value;
  
  if(generoSetValue=="ondas_a3"){
      document.getElementById("ondasSelector_a3").style.display = "inline-block";
  }else{
      document.getElementById("ondasSelector_a3").style.display = "none";
  }
  
   if(generoSetValue=="meditacion_a3"){
      document.getElementById("frecuenciaSelector_a3").style.display = "inline-block";
  }else{
      document.getElementById("frecuenciaSelector_a3").style.display = "none";
  }
  
   if(generoSetValue=="naturaleza_a3"){
      document.getElementById("ambienteSelector_a3").style.display = "inline-block";
  }else{
      document.getElementById("ambienteSelector_a3").style.display = "none";
  }
    if(generoSetValue=="cancion_a3"){
      document.getElementById("fileSelector_a3").style.display = "inline-block";
  }else{
      document.getElementById("fileSelector_a3").style.display = "none";
  }
  if(generoSetValue=="audioDinamico_a3"){
    document.getElementById("audioDinamicoSelector_a3").style.display = "inline-block";
}else{
    document.getElementById("audioDinamicoSelector_a3").style.display = "none";
}
}
function showGeneros_a4(){
  var generoSetValue = document.getElementById("generoSelect_a4").value;
  
  if(generoSetValue=="ondas_a4"){
      document.getElementById("ondasSelector_a4").style.display = "inline-block";
  }else{
      document.getElementById("ondasSelector_a4").style.display = "none";
  }
  
   if(generoSetValue=="meditacion_a4"){
      document.getElementById("frecuenciaSelector_a4").style.display = "inline-block";
  }else{
      document.getElementById("frecuenciaSelector_a4").style.display = "none";
  }
  
   if(generoSetValue=="naturaleza_a4"){
      document.getElementById("ambienteSelector_a4").style.display = "inline-block";
  }else{
      document.getElementById("ambienteSelector_a4").style.display = "none";
  }
    if(generoSetValue=="cancion_a4"){
      document.getElementById("fileSelector_a4").style.display = "inline-block";
  }else{
      document.getElementById("fileSelector_a4").style.display = "none";
  }
  if(generoSetValue=="audioDinamico_a4"){
    document.getElementById("audioDinamicoSelector_a4").style.display = "inline-block";
}else{
    document.getElementById("audioDinamicoSelector_a4").style.display = "none";
}
}
function showGeneros_a5(){
  var generoSetValue = document.getElementById("generoSelect_a5").value;
  
  if(generoSetValue=="ondas_a5"){
      document.getElementById("ondasSelector_a5").style.display = "inline-block";
  }else{
      document.getElementById("ondasSelector_a5").style.display = "none";
  }
  
   if(generoSetValue=="meditacion_a5"){
      document.getElementById("frecuenciaSelector_a5").style.display = "inline-block";
  }else{
      document.getElementById("frecuenciaSelector_a5").style.display = "none";
  }
  
   if(generoSetValue=="naturaleza_a5"){
      document.getElementById("ambienteSelector_a5").style.display = "inline-block";
  }else{
      document.getElementById("ambienteSelector_a5").style.display = "none";
  }
    if(generoSetValue=="cancion_a5"){
      document.getElementById("fileSelector_a5").style.display = "inline-block";
  }else{
      document.getElementById("fileSelector_a5").style.display = "none";
  }
  if(generoSetValue=="audioDinamico_a5"){
    document.getElementById("audioDinamicoSelector_a5").style.display = "inline-block";
}else{
    document.getElementById("audioDinamicoSelector_a5").style.display = "none";
}
}