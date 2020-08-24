document.addEventListener("DOMContentLoaded", function(event) {
    const selectElement = document.querySelector('.js-service');
    selectElement.addEventListener('change', (event) => {
        const selectResult = selectElement.value;


        switch (selectResult) {

            case  "lecon" :
                teaching();
                break;
            case "atterissage":
                landing();
                break;

            case "parking":
                parking() ;
                break;
            case "bapteme" :
                firstTime();
                break;
            case "carburant" :
                carbu();
                break;
            case "ulm" :
                ulm();
                break;
            case "nettoyage" :
                cleaning();
                break;
            case "parachute" :
                jumping();
                break;

        }



    });
});



function teaching() {

    let form = document.getElementById('formresa');

    form.setAttribute("action","resaLecon.php");


    let input = document.createElement('input');

    document.getElementById('formresa').appendChild(input);
    input.setAttribute("type","text");
    input.setAttribute("name","name");
    input.setAttribute("placeholder","Votre nom");



    let input2 = document.createElement('input');

    document.getElementById('formresa').appendChild(input2);
    input2.setAttribute("type","text");
    input2.setAttribute("name","firstname");
    input2.setAttribute("placeholder","Votre prénom");



    let input3 = document.createElement('input');

    document.getElementById('formresa').appendChild(input3);
    input3.setAttribute("type","Date");
    input3.setAttribute("name","day");


    let input4 = document.createElement('input');

    document.getElementById('formresa').appendChild(input4);
    input4.setAttribute("type","time");
    input4.setAttribute("name","hour");
    input4.setAttribute("step","2");

    let submit = document.createElement('input');
    document.getElementById('formresa').appendChild(submit);
    submit.setAttribute("type","submit");
    submit.setAttribute("value","Réserver");


}

function landing() {
    let form = document.getElementById('formresa');
    form.setAttribute("action","resaAtterissage.php");

    let input = document.createElement('input');
    document.getElementById('formresa').appendChild(input);
    input.setAttribute("type","text");
    input.setAttribute("name","name");
    input.setAttribute("placeholder","Votre nom");

    let input2 = document.createElement('input');

    document.getElementById('formresa').appendChild(input2);
    input2.setAttribute("type","text");
    input2.setAttribute("name","firstname");
    input2.setAttribute("placeholder","Votre Prénom");


    let input3 = document.createElement('input');

    document.getElementById('formresa').appendChild(input3);
    input3.setAttribute("type","Date");
    input3.setAttribute("name","day");

    let input4 = document.createElement('input');

    document.getElementById('formresa').appendChild(input4);
    input4.setAttribute("type","time");
    input4.setAttribute("name","hour");
    input4.setAttribute("step","2");

    let input5 = document.createElement('input');

    document.getElementById('formresa').appendChild(input5);
    input5.setAttribute("type","text");
    input5.setAttribute("name","ga");
    input5.setAttribute("placeholder","Groupe accoustique");

    let input6 = document.createElement('input');

    document.getElementById('formresa').appendChild(input6);
    input6.setAttribute("type","text");
    input6.setAttribute("name","typePlane");
    input6.setAttribute("placeholder","Type d'avion");



    let submit = document.createElement('input');
    document.getElementById('formresa').appendChild(submit);
    submit.setAttribute("type","submit");
    submit.setAttribute("value","Réserver");



}

function parking() {
    let form = document.getElementById('formresa');
    form.setAttribute("action","resaParking.php");

    let input = document.createElement('input');
    document.getElementById('formresa').appendChild(input);
    input.setAttribute("type","text");
    input.setAttribute("name","name");
    input.setAttribute("placeholder","Votre nom");

    let input2 = document.createElement('input');

    document.getElementById('formresa').appendChild(input2);
    input2.setAttribute("type","text");
    input2.setAttribute("name","firstname");
    input2.setAttribute("placeholder","Votre prénom");

    let input3 = document.createElement('input');

    document.getElementById('formresa').appendChild(input3);
    input3.setAttribute("type","Date");
    input3.setAttribute("name","day");

    let input4 = document.createElement('input');

    document.getElementById('formresa').appendChild(input4);
    input4.setAttribute("type","time");
    input4.setAttribute("name","hour");
    input4.setAttribute("step","2");

    let input5 = document.createElement('input');

    document.getElementById('formresa').appendChild(input5);
    input5.setAttribute("type","number");
    input5.setAttribute("name","longueur");
    input5.setAttribute("placeholder","Longueur d'avion");

    let input6 = document.createElement('input');

    document.getElementById('formresa').appendChild(input6);
    input6.setAttribute("type","number");
    input6.setAttribute("name","envergure");
    input6.setAttribute("placeholder","Envergure d'avion");

    let input7 = document.createElement('input');

    document.getElementById('formresa').appendChild(input7);
    input7.setAttribute("type","number");
    input7.setAttribute("name","masse");
    input7.setAttribute("placeholder","Masse d'avion");




    let submit = document.createElement('input');
    document.getElementById('formresa').appendChild(submit);
    submit.setAttribute("type","submit");
    submit.setAttribute("value","Réserver");

}

function firstTime() {

    let form = document.getElementById('formresa');

    form.setAttribute("action","resaBaptem.php");
    form.setAttribute("method","post");


    let input = document.createElement('input');

    document.getElementById('formresa').appendChild(input);
    input.setAttribute("type","text");
    input.setAttribute("name","name");
    input.setAttribute("placeholder","Votre nom");

    let input2 = document.createElement('input');

    document.getElementById('formresa').appendChild(input2);
    input2.setAttribute("type","text");
    input2.setAttribute("name","firstname");
    input2.setAttribute("placeholder","Votre prénom");
    let input3 = document.createElement('input');

    document.getElementById('formresa').appendChild(input3);
    input3.setAttribute("type","Date");
    input3.setAttribute("name","day");


    let input4 = document.createElement('input');

    document.getElementById('formresa').appendChild(input4);
    input4.setAttribute("type","time");
    input4.setAttribute("name","hour");
    input4.setAttribute("step","2");

    let submit = document.createElement('input');
    document.getElementById('formresa').appendChild(submit);
    submit.setAttribute("type","submit");
    submit.setAttribute("value","Réserver");
}

function carbu() {

    let form = document.getElementById('formresa');

    form.setAttribute("action","resaCarbu.php");

    let input = document.createElement('input');
    document.getElementById('formresa').appendChild(input);
    input.setAttribute("type","text");
    input.setAttribute("name","name");
    input.setAttribute("placeholder","Votre nom");

    let input2 = document.createElement('input');

    document.getElementById('formresa').appendChild(input2);
    input2.setAttribute("type","text");
    input2.setAttribute("name","lastname");
    input2.setAttribute("placeholder","Votre prénom");



    let input3 = document.createElement('input');

    document.getElementById('formresa').appendChild(input3);
    input3.setAttribute("type","Date");
    input3.setAttribute("name","day");
    let input4 = document.createElement('input');

    document.getElementById('formresa').appendChild(input4);
    input4.setAttribute("type","time");
    input4.setAttribute("name","hour");
    input4.setAttribute("step","2");


    let input5 = document.createElement('input');

    document.getElementById('formresa').appendChild(input5);
    input5.setAttribute("type","text");
    input5.setAttribute("name","carbuType");
    input5.setAttribute("placeholder","type de carburant");

    let submit = document.createElement('input');
    document.getElementById('formresa').appendChild(submit);
    submit.setAttribute("type","submit");
    submit.setAttribute("value","Réserver");


}

function ulm() {
    let form = document.getElementById('formresa');

    form.setAttribute("action","resaUlm.php");


    let input = document.createElement('input');

    document.getElementById('formresa').appendChild(input);
    input.setAttribute("type","text");
    input.setAttribute("name","name");

    let input2 = document.createElement('input');

    document.getElementById('formresa').appendChild(input2);
    input2.setAttribute("type","text");
    input2.setAttribute("name","lastname");

    let inputNb = document.createElement('input');

    document.getElementById('formresa').appendChild(inputNb);
    inputNb.setAttribute("type","number");
    inputNb.setAttribute("name","nb");

    let input3 = document.createElement('input');

    document.getElementById('formresa').appendChild(input3);
    input3.setAttribute("type","Date");
    input3.setAttribute("name","day");

    let input4 = document.createElement('input');

    document.getElementById('formresa').appendChild(input4);
    input4.setAttribute("type","time");
    input4.setAttribute("name","hour");
    input4.setAttribute("step","2");

    let submit = document.createElement('input');
    document.getElementById('formresa').appendChild(submit);
    submit.setAttribute("type","submit");
    submit.setAttribute("value","Réserver");

}

function cleaning() {
    let form = document.getElementById('formresa');

    form.setAttribute("action","resaCleaning.php");

    let input = document.createElement('input');
    document.getElementById('formresa').appendChild(input);
    input.setAttribute("type","text");
    input.setAttribute("name","name");

    let input2 = document.createElement('input');

    document.getElementById('formresa').appendChild(input2);
    input2.setAttribute("type","text");
    input2.setAttribute("name","lastname");

    let input3 = document.createElement('input');

    document.getElementById('formresa').appendChild(input3);
    input3.setAttribute("type","Date");
    input3.setAttribute("name","day");

    let input4 = document.createElement('input');

    document.getElementById('formresa').appendChild(input4);
    input4.setAttribute("type","time");
    input4.setAttribute("name","hour");
    input4.setAttribute("step","2");

    let input5 = document.createElement('input');

    document.getElementById('formresa').appendChild(input5);
    input5.setAttribute("type","number");
    input5.setAttribute("name","size");

}

function jumping() {

}