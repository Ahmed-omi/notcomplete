

var Push  = document.getElementById("btnpush")
    var regime = document.getElementById("regime");
      var origine = document.getElementById("origine");
        var repas = document.getElementById("repas");

    document.getElementById("btnRegime").addEventListener("click", function(){


        regime.style.display="block";
        origine.style.display="none";
        repas.style.display="none";


    })


 document.getElementById("btnOrigine").addEventListener("click", function(){


   regime.style.display="none";
   origine.style.display="block";
   repas.style.display="none";

} )

 document.getElementById("btnRepas").addEventListener("click", function(){


   regime.style.display="none";
   origine.style.display="none";
   repas.style.display="block";


} )


document.getElementById("btnpush").addEventListener("click", function(){


  regime.style.display="block";
  origine.style.display="block";
  repas.style.display="block";

} )
