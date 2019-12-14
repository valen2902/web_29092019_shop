let buttonEl = document.querySelector('.product-add-to-card');
buttonEl.addEventListener('click', function(){
    let productId = this.getAttribute('data-product-id');
    // console.log(productId);

    let xhr = new XMLHttpRequest();
    xhr.open('GET', '/handlers/handlerAddToBasket.php?id=' + productId);
    xhr.send();
    xhr.addEventListener('load', ()=>{
        console.log(xhr.responseText);
    });
});