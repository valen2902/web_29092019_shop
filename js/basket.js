class Products{
    constructor(){
        this.product = [];
    }
    load(){
        let xhr = new XMLHttpRequest();
        xhr.open();
        xhr.send();
        xhr.addEventListener('load', ()=>{});
    }
};