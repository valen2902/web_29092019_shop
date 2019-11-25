let xhr = new XMLHttpRequest();
xhr.open('GET', 'handler.php');
xhr.send();

xhr.addEventListener('load', ()=>{

    let data = JSON.parse(xhr.responseText);

    data.forEach((item)=>{
        console.log(item.name);
    });
});