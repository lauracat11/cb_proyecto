var poligono = document.getElementById("poligon")
var poligono2 = document.getElementById("poligono4");
var poligono3 = document.getElementById("poligono5");
var contador=1;
console.log(poligono)
if(contador==1){
    poligono.addEventListener("click", (event) => {
        console.log("contador: "+contador)
        contador=2
    },
    );
}
console.log("contador: "+contador)

