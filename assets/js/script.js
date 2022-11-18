window.addEventListener("load",function(event) {
    if (window.Worker) {
        iniciar();
    }else{
        alert("Não suporta webworker");
    }
});

function iniciar() {
    if (typeof(Worker)!= "undefined") {
        if (typeof(w)== "undefined") {
            w = new Worker("../assets/js/Worker.js");
            w.onmessage = function (event) {
                console.log(event.data);
            }
            w.postMessage('Iniciar');
        }
    }else{
        console.log("Erro");
    }
}