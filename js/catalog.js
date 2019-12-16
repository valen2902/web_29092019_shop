class Catalog{
    constructor(){
        this.el = document.querySelector('.catalog');
        this.preloaderEl = this.el.querySelector('.catalog-preloader');
        this.products = [];
        this.categoryId = this.el.getAttribute('data-catalog-id');
    }
    load(now = 1){
        this.showPreloader();
        let xhr = new XMLHttpRequest();
        xhr.open('GET', '/handlers/handlerCatalog.php?catalog_id=' + this.categoryId + '&now=' + now);
        xhr.send();

        xhr.addEventListener('load', ()=>{
            this.removeAll();
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
            this.renderPagination(data.pagination);
        });
    }
    renderPagination(pagInfo){
        // console.log(pagInfo);
        let paginationEl = this.el.querySelector('.catalog-pagination');

        for(let i = 0; i < pagInfo.count; i++){
            // console.log(i);
            let div = document.createElement('div');
            div.classList.add('catalog-pagination-item');

            if( pagInfo.now == i + 1 ){
                div.classList.add('active');
            }
            div.innerHTML = (i+1);

            div.addEventListener('click', (e)=>{
                let now = e.target.innerHTML;
                console.log(e.target);
                this.load(now);
            });

            paginationEl.appendChild(div);
        }
    }
    removeAll(){
        this.el.querySelector('.catalog-products').innerHTML= '';
        this.el.querySelector('.catalog-pagination').innerHTML= '';
        this.products = [];
    }
    renderProducts(){
        this.hidePreloader();
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

let boxEl = $('.catalog-header-filter-category-openbox nav');
let categoryEl = $('.catalog-header-filter-category');

categoryEl.click(function(){
    boxEl.toggleClass('open');
});

let boxSizeEl = $('.catalog-header-filter-size-openbox nav');
let sizeEl = $('.catalog-header-filter-size');

sizeEl.click(function(){
    boxSizeEl.toggleClass('open');
});

let boxPriceEl = $('.catalog-header-filter-price-openbox nav');
let priceEl = $('.catalog-header-filter-price');

priceEl.click(function(){
    boxPriceEl.toggleClass('open');
});

