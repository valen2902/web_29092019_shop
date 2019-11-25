/**
 * Будет 2 класса:
 * 1) Catalog - он будет заниматься задачами управления
 * 2) Product - он будет отрисовывать карточку товара в каталоге
 */

class Catalog{
    constructor(){
        this.el = document.querySelector('.catalog');
        this.preloaderEl = this.el.querySelector('.catalog-preloader');
        this.products = [];
    }
    load(){
        this.showPreloader();
        // загружает данные json по ajax из handlerCatalog.php
        // после загрузки вызывает метод renderProducts

        /**
         * В методе load сходить по ajax за даннаыми handlerCatalog.php
         * Перевести из формата JSON в обычный js
         * Вывести их в консоль
         */

        let xhr = new XMLHttpRequest();
        xhr.open('GET', '/handlers/handlerCatalog.php');
        xhr.send();

        xhr.addEventListener('load', ()=>{
            let data = JSON.parse(xhr.responseText);
            data.products.forEach((productItem)=>{
                this.products.push(new Product(
                    productItem.id,
                    productItem.name,
                    productItem.price,
                    productItem.img,
                    productItem.description
                ));
            });

            this.renderProducts();
        });
    }
    renderProducts(){
        this.hidePreloader();
        // отрисовывает карточки товара по данным
        let catalogProductsEl = this.el.querySelector('.catalog-products');

        this.products.forEach((productItem)=>{
            catalogProductsEl.appendChild( productItem.getElement() );
        });

    }
    showPreloader(){
        this.preloaderEl.classList.remove('hide');
    }
    hidePreloader(){
        this.preloaderEl.classList.add('hide');
    }
}

class Product{
    constructor(id, name, price, img, description){
        this.id = id;
        this.name = name;
        this.price = price;
        this.img = img;
        this.description = description;
    }
    getElement(){
        let productEl = document.createElement('a');
        productEl.href = `/product.php?id=${this.id}`;
        productEl.classList.add('catalog-products-item');
        productEl.innerHTML = `
            <div class='catalog-products-item-img' style='background-image: url(${this.img})'></div>
            <div class='catalog-products-item-name'>${this.name}</div> 
            <div class='catalog-products-item-price'>${this.price} руб.</div>  
        `;

        return productEl;
    }
}
let catalog = new Catalog();
catalog.load();