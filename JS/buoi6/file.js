let input= document.getElementById("input_link");
input.addEventListener("keypress", function(event) {
// If the user presses the "Enter" key on the keyboard
    if (event.key === 'Enter') {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("check_button").click();
    }
});
// getElementsByClassName
var kiem_tra_box = true;
function tat_box(){
    document.getElementsByClassName("box")[0].className="hidden";
    kiem_tra_box=false;
    if(kiem_tra_box == false){
        document.getElementById('cuu_tinh').style.display='block';
        kiem_tra_box=true;
    }
}
function kiem_tra(){
    let link = document.getElementById("input_link").value;
    var mang;
    var kq;
    let regexlink= /^(?:(?:https|http):\/\/www\.)?(?:www\.)?(?:facebook\.com|fb\.com)\/[A-Za-z0-9\.?=]*(?:\/[A-Za-z0-9\.?=]*)*\/?$/
    if (regexlink.test(link)){
        if(link[link.length-1]=='/'){
            link=link.slice(0,-1);
        }
        mang=link.split("/");
        kq = mang[mang.length-1];
        let chuoi_kiem_tra='profile.php?id='
        if(kq.includes('profile.php?id=')){
            kq = kq.slice(chuoi_kiem_tra.length,kq.length-1);
            console.log(kq);
        }
        alert(kq);
    } else {
        alert('Link có gì đó bị sai á cậu :>');
    }
}
function hien_cai_bang(){
    window.location.reload();
}
