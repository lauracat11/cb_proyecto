var mapa = document.getElementById("mapa");
var poligono = document.getElementById("poligono")
var poligono2 = document.getElementById("poligono4");
var poligono3 = document.getElementById("poligono5");
var contador = 0;
var generarBoxes = document.createElement("div");
var marcador = document.createElement("div");
var paddockscroll = document.getElementById("paddockscroll")
console.log(poligono);



//------------------------------PADDOCK----------------------------------------------
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
    poligono.addEventListener("click", (event) => {
        //ELIMINAR ANTERIORES
        console.log("contador: " + contador)
        var test = "HOAL"
        mapa.className = "mapa2";
        console.log(generarBoxes)
        poligono.remove();
        poligono2.remove();
        poligono3.remove();


        marcador.id="marcador";
        marcador.className="marcador1";
        document.getElementById('body').appendChild(marcador);
            marcador.addEventListener("click", (event) => {
                //GENERA CUADRO DE RESERVA
                console.log("generarboxesvaaqui");
                generarBoxes.id="generarBoxes"
                generarBoxes.className="generarBoxes";
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
                let reservar1 = document.createElement("div");
                reservar1.className = "reservarPaddock";
                reservar1.innerHTML="RESERVAR"
                document.getElementById('generarBoxes').appendChild(reservar1);

                //ELIMINA RECUADRO DE RESERVA
                text1.addEventListener("click", (event) => {
                    generarBoxes.className=""
                    text1.className=""
                    text2.className=""
                    img.className=""
                    text3.className=""
                    reservar1.className=""
                    text1.innerHTML = "";
                    text2.innerHTML = "";
                    text3.innerHTML = ""
                    reservar1.innerHTML=""
                },
                );
                
            },
            );
        }
    );




    paddockscroll.addEventListener("click", (event) => {
        if(contador==0){
                contador=-1
                //GENERA CUADRO DE RESERVA
                console.log("generarboxesvaaqui");
                generarBoxes.id="generarBoxes"
                generarBoxes.className="generarBoxes";
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
                let reservar1 = document.createElement("div");
                reservar1.className = "reservarPaddock";
                reservar1.innerHTML="RESERVAR"
                document.getElementById('generarBoxes').appendChild(reservar1);

                //ELIMINA RECUADRO DE RESERVA
                text1.addEventListener("click", (event) => {
                    contador=0
                    generarBoxes.className=""
                    text1.className=""
                    text2.className=""
                    img.className=""
                    text3.className=""
                    reservar1.className=""
                    text1.innerHTML = "";
                    text2.innerHTML = "";
                    text3.innerHTML = ""
                    reservar1.innerHTML=""
                },
                );
                
            }
            },
            );
//-----------------------------------------------------------------------------------
//-----------------------------------------------------------------------------------
//------------------------------PADDOCK----------------------------------------------

