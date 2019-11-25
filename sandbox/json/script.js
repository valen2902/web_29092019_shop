let xhr = new XMLHttpRequest();
xhr.open('GET', 'handler.php');
xhr.send();

xhr.addEventListener('load', ()=>{
    // JSON.parse() - из строчки в формате JSON делает объект либо массив в обычном JS
    let data = JSON.parse(xhr.responseText);

    data.forEach((item)=>{
        console.log(item.name);
    });
});