const galleryContainer = document.querySelector('.gallery-container');
const galleryControlsContainer = document.querySelector('.gallery-controls');
const galleryControls = ['previous','next'];
const galleryItems = document.querySelectorAll('.gallery-item');

class Carousel{

    constructor(container, items, controls){
        this.carouselContainer = container;
        this.carouselControls = controls;
        this.carouselArray = [...items] ;
    }

    updateGallery(){
        this.carouselArray.forEach(el => {
            el.classList.remove('gallery-item-1');
            el.classList.remove('gallery-item-2');
            el.classList.remove('gallery-item-3');
            el.classList.remove('gallery-item-4');
            el.classList.remove('gallery-item-5');
        });

        this.carouselArray.slice(0, 5).forEach((el , i) => {
            el.classList.add(`gallery-item-${i+1}`);
        });
    }
    
    setCurrentState(direction){
        if (direction.className == 'gallery-controls-previous'){
            this.carouselArray.unshift(this.carouselArray.pop());
        }else{
            this.carouselArray.push(this.carouselArray.shift());
        }
        this.updateGallery();
    }

    setControls() {
        this.carouselControls.forEach(control => {});
    }

    useControls(){
        const triggers = [...galleryControlsContainer.childNodes];
        triggers.forEach(control => {
            control.addEventListener('click', e => {
                e.preventDefault();
                this.setCurrentState(control);
            });
        });
    }
}

const exampleCarousel = new Carousel(galleryContainer, galleryItems, galleryControls);

exampleCarousel.setControls();
exampleCarousel.useControls();

function LiveCoringa() {
    window.location.href = 'perfil-usuario.php'
}

function Trocar(){
    document.getElementById('principal').style.cssText = 'display: none;';
    document.getElementById('conteudo-tabs').style.cssText = 'display: initial;';
}


function TrocarCadastros(){
    window.location.href = 'cadastros.php'
}

function TrocarProcurar(){
    window.location.href = 'procurar.php'
}

function trocarPosicao(id){
    document.getElementsByClassName('spanAovivo')[id].style.cssText = 'position: relative; top: 25px; left: 15px';
    document.getElementsByClassName('spanEspec')[id].style.cssText = 'position: relative; bottom: 40px; left: 15px;';
    document.getElementsByClassName('img-p')[id].style.cssText = 
    'box-shadow: -5px 5px 0 1px #9a53ea; position:relative; bottom: 5px; left: 5px; transition: 0.4s;'
}

function destrocarPosicao(id){
    document.getElementsByClassName('spanAovivo')[id].style.cssText = 'position: none;';
    document.getElementsByClassName('spanEspec')[id].style.cssText = 'position: none;';
    document.getElementsByClassName('img-p')[id].style.cssText = 
    'box-shadow: none; position:none;'
}

function manter(id){
    document.getElementsByClassName('img-p')[id].style.cssText = 
    'box-shadow: -5px 5px 0 1px #9a53ea; position:relative; bottom: 5px; left: 5px; transition: 0.4s;'
    document.getElementsByClassName('spanAovivo')[id].style.cssText = 'position: relative; top: 25px; left: 15px';
    document.getElementsByClassName('spanEspec')[id].style.cssText = 'position: relative; bottom: 40px; left: 15px;';
}

function desmanter(id){
    document.getElementsByClassName('img-p')[id].style.cssText = 
    'box-shadow: none; position:none;'
    document.getElementsByClassName('spanAovivo')[id].style.cssText = 'position: none;';
    document.getElementsByClassName('spanEspec')[id].style.cssText = 'position: none;';
}

function abrirModal(){
    document.getElementById('modal').style.cssText = 'display: block;'
    document.getElementsByTagName('body')[0].style.cssText = 'overflow: hidden;'
    input = document.getElementById('usuario');
    input.focus();
}

function carregamento() {
    location.href = "tela-inicial.php"
}
const icone = document.getElementById('icone');
const password = document.getElementById('senha');
// const form = document.getElementById('formulario');

function Logar(){
    var usuario = document.getElementById('usuario').value;
    var senha = document.getElementById('senha').value;

    if(usuario === 'admin' && senha === 'admin'){
        document.getElementById('btn').style.cssText = 'display: none;'
        document.getElementsByClassName('carregando')[0].style.cssText = 'display: block;'
        setTimeout(carregamento, 1500);
    }
    else{
        // alert('Usario ou senha incorretos');
        document.getElementById('erro').style.cssText = "display: block;"
    }
}

function TrocarIcone(){
    if(password.type === 'password'){
        password.setAttribute('type','text');
        icone.classList.add('hide')
    }
    else{
        password.setAttribute('type','password');
        icone.classList.remove('hide')
    }
}

function EsconderSpan(){
    document.getElementById('erro').style.cssText = "display: none;"
}

function fecharModal(){
    document.getElementById('modal').style.cssText = 'display: none;';
    document.getElementsByTagName('body')[0].style.cssText = 'overflow: auto;'
}

