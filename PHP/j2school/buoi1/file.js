function kiem_tra(){
    let $kiem_tra_loi = false;
    let $so = parseInt(document.getElementById("input_so").value);
    if(isNaN($so)){
        $kiem_tra_loi = true;
        document.getElementById("loi_so").innerHTML=`*Số không được để trống á pà`;
        document.getElementById("input_so").style.border="1px red solid";
        document.getElementById("input_so").focus();
    } else {
        document.getElementById("loi_so").innerHTML=``;
        document.getElementById("input_so").style.border="none";
    }
    
    if ($kiem_tra_loi == true){
        return false;
    }
}