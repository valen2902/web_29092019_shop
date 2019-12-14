alert('Hello');
let basketEl = $('.basket-content');
$('basket-content-right-delete').click(function(e){
    e.preventDefault(); 
    basketEl.css('display', 'flex').hide().fadeIn(500);
});