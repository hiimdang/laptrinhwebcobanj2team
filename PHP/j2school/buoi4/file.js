function on_hover_logo(){
    document.getElementById('logo_nike_img').src='img/nike_logo_fade.png';
}
function off_hover_logo(){
    document.getElementById('logo_nike_img').src='img/nike_logo_normal.png'
}

//Search taskbar
var $text_id = document.getElementById("input");
var $search_button = document.getElementById("search_button");
$search_button.addEventListener('click', function() {
    $text_id.focus();
});