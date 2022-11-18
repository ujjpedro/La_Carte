this.onmessage = function (message){
    if(message.data === "Iniciar"){
        setInterval(function(){
                getpedido();
        },5000)
    }
}

function getpedido() {
    xhr = new XMLHttpRequest();
    xhr.open('GET', '../../acao/acaoVerPed.php');
    xhr.addEventListener('load', (data) => {
        datajson = JSON.parse(data.target.responseText);
        console.log(datajson);
        // postMessage(datajson);
    });
    xhr.send();
}