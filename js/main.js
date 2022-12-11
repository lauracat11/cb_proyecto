var mapa = document.getElementById("mapa");
var poligono = document.getElementById("poligono")
var poligono2 = document.getElementById("poligono4");
var poligono3 = document.getElementById("poligono5");
var generarBoxes = document.createElement("div");
var marcador = document.createElement("div");
var paddockscroll = document.getElementById("paddockscroll");
var flechaatras = document.getElementById("flechaatras");
var contador = 0;
var mapazoom = 0;
console.log(poligono);
console.log("mapazoom: " + mapazoom);




flechaatras.addEventListener("click", function () {
    if (mapazoom == 1) {
        mapazoom = 0;
        mapa.className = "mapa_paddock_back"
        console.log("mapazoom: " + mapazoom);
        marcador.remove();
        var poligono_back = document.createElement("div");
        poligono_back.className = "poligon";
        document.getElementById('body').appendChild(poligono_back);
        poligono_back.id = "poligono"

        var poligono2_back = document.createElement("div");
        poligono2_back.className = "poligon2";
        poligono_back.appendChild(poligono2_back);

        var poligono3_back = document.createElement("div");
        poligono3_back.className = "poligon3";
        poligono2_back.appendChild(poligono3_back);

        var poligono4_back = document.createElement("div");
        poligono4_back.className = "poligon4";
        document.getElementById('body').appendChild(poligono4_back);
        poligono4_back.id = "poligono4"

        var poligono5_back = document.createElement("div");
        poligono5_back.className = "poligon5";
        document.getElementById('body').appendChild(poligono5_back);
        poligono5_back.id = "poligono5"





        poligono_back.addEventListener("click", (event) => {
            //ELIMINAR ANTERIORES
            console.log("contador: " + contador)
            var test = "HOAL"
            mapa.className = "mapa_paddock";
            mapazoom = 1;
            console.log("mapazoom: " + mapazoom);
            console.log(generarBoxes)
            poligono_back.remove();
            poligono4_back.remove();
            poligono5_back.remove();


            marcador.id = "marcador";
            marcador.className = "marcador1";
            document.getElementById('body').appendChild(marcador);
            marcador.addEventListener("click", (event) => {
                generarPaddockReserva();


            },
            );
        }
        );
    }
},
);
//------------------------------PADDOCK----------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------


poligono.addEventListener("click", (event) => {
    //ELIMINAR ANTERIORES
    console.log("contador: " + contador)
    var test = "HOAL"
    mapa.className = "mapa_paddock";
    mapazoom = 1;
    console.log("mapazoom: " + mapazoom);
    console.log(generarBoxes)
    poligono.remove();
    poligono2.remove();
    poligono3.remove();


    marcador.id = "marcador";
    marcador.className = "marcador1";
    document.getElementById('body').appendChild(marcador);
    marcador.addEventListener("click", (event) => {
        //GENERA CUADRO DE RESERVA
        generarPaddockReserva();
    },
    );

},
);








paddockscroll.addEventListener("click", (event) => {
    generarPaddockReserva();
},
);
function generarPaddockReserva() {
    if (contador == 0) {
        contador = -1
        //GENERA CUADRO DE RESERVA
        console.log("generarboxesvaaqui");
        generarBoxes.id = "generarBoxes"
        generarBoxes.className = "generarBoxes";
        document.getElementById('body').appendChild(generarBoxes);
        let text1 = document.createElement("div");
        text1.className = "quitar";
        text1.innerHTML = "X";
        document.getElementById('generarBoxes').appendChild(text1);
        let text2 = document.createElement("div");
        text2.className = "paddock";
        text2.innerHTML = "PADDOCK";
        document.getElementById('generarBoxes').appendChild(text2);
        let img = document.createElement("div");
        img.className = "imgPaddock";
        document.getElementById('generarBoxes').appendChild(img);
        let text3 = document.createElement("div");
        text3.className = "textoPaddock";
        text3.innerHTML = "Gaudiu d'un espai a l'aire lliure davant del marc <br> incomparable del traçat del Circuit. Més de <br> 30.000m2 condicionats amb tots els serveis que pugui necessitar per a la celebració <br> dels seus esdeveniments."
        document.getElementById('generarBoxes').appendChild(text3);
        let reservar1 = document.createElement("a");
        reservar1.className = "reservarPaddock";
        reservar1.innerHTML = "LLOGAR"
        reservar1.href="../html/alquilarpaddock.html"
        document.getElementById('generarBoxes').appendChild(reservar1);
                                                                                                  
        //ELIMINA RECUADRO DE RESERVA
        text1.addEventListener("click", (event) => {
            contador = 0
            generarBoxes.className = ""
            text1.className = ""
            text2.className = ""
            img.className = ""
            text3.className = ""
            reservar1.className = ""
            text1.innerHTML = "";
            text2.innerHTML = "";
            text3.innerHTML = ""
            reservar1.innerHTML = ""
        },
        );

    }
}
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//------------------------------PADDOCK----------------------------------------------