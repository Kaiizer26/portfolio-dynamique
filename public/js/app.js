const button_technologies = document.getElementById('btn-technologies');
const button_outils = document.getElementById('btn-outils');
const technologies = document.getElementsByClassName("technologies");
const outils = document.getElementsByClassName('outils');
const h3_technologies = document.getElementById('h3-technologies');
const h3_outils = document.getElementById('h3-outils');

// Technologies -- Outils Boutons
button_outils.addEventListener("click", ()=>{
    for (let i = 0; i < outils.length; i++){
        outils[i].setAttribute('style', 'display: flex;');
    }
    for (let j = 0; j < technologies.length; j++){
        technologies[j].setAttribute('style', 'display: none;');
    }

    h3_technologies.setAttribute('style', 'color : white; opacity: 0.4');
    button_technologies.setAttribute('style', 'background-color: transparent');

    h3_outils.setAttribute('style', 'color: #fde68a; opacity: 1;');
    button_outils.setAttribute('style', 'background-color: #2a281e;');

    
    
});

button_technologies.addEventListener("click", ()=>{
    for (let i = 0; i < technologies.length; i++){
        technologies[i].setAttribute('style', 'display: flex;');
    }
    for (let j = 0; j < outils.length; j++){
        outils[j].setAttribute('style', 'display: none;');
    }

    h3_outils.setAttribute('style', 'color : white; opacity: 0.4');
    button_outils.setAttribute('style', 'background-color: transparent');

    h3_technologies.setAttribute('style', 'color: #fde68a; opacity: 1;');
    button_technologies.setAttribute('style', 'background-color: #2a281e;');
});
