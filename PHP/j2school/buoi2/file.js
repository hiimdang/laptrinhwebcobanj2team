function kiem_tra(){
            

    let $kiem_tra_loi = false;
    // Ten
    document.getElementById("loi_ten").innerHTML="";
    let $ten = document.getElementById("input_ten").value;
    if($ten.length==0){
        $kiem_tra_loi = true;
        document.getElementById("loi_ten").innerHTML=`Tên chưa nhập kìa pà`;
    } else{
        $regex_ten= /^[A-ZÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ][a-zàáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹý]{1,6}(?: [A-ZÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ][a-zàáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹý]*)*$/
        if ($regex_ten.test($ten) == false){
            $kiem_tra_loi=true;
            document.getElementById("loi_ten").innerHTML=`Tên pà có gì đó sai sai á, kiểm tra lại đi :>`;
        }
    }
    // Email
    document.getElementById("loi_email").innerHTML="";
    let $email = document.getElementById("input_email").value;
    if($email.length==0){
        $kiem_tra_loi = true;
        document.getElementById("loi_email").innerHTML=`Email chưa nhập kìa pà`;
    }
    //Mat khau
    document.getElementById("loi_mat_khau").innerHTML="";
    let $mat_khau = document.getElementById("input_mat_khau").value;
    if($mat_khau.length==0){
        $kiem_tra_loi = true;
        document.getElementById("loi_mat_khau").innerHTML=`Mật khẩu chưa nhập kìa pà`;
    }
    //Nhap lai mat khau
    document.getElementById("loi_nl_mat_khau").innerHTML="";
    let $nl_mat_khau = document.getElementById("input_nl_mat_khau").value;
    if($nl_mat_khau.length==0){
        $kiem_tra_loi = true;
        document.getElementById("loi_nl_mat_khau").innerHTML=`Mật khẩu chưa nhập kìa pà`;
    } else {
        if($mat_khau.length != 0){
            if($mat_khau != $nl_mat_khau){
                $kiem_tra_loi=true;
                document.getElementById("loi_mat_khau").innerHTML=`Mật khẩu không trùng`;
            }
        }
    }
    //Ngay sinh
    document.getElementById("input_ngay_sinh").style.outline=`none`;
    document.getElementById("loi_ngay_sinh").innerHTML="";
    let $ngay_sinh = document.getElementById("input_ngay_sinh").value;
    if($ngay_sinh.length==0){
        $kiem_tra_loi = true;
        document.getElementById("loi_ngay_sinh").innerHTML=`Ngày sinh chưa nhập kìa pà`;
    }

    if ($kiem_tra_loi == true){
        return false;
    }
}


// Switch nl mat khau
function switch_nl_mat_khau(){
    let $x = document.getElementById("input_nl_mat_khau");
    if ($x.type == 'password'){
        document.getElementById("switch_nl_mat_khau_img").src="img/eye_hidden.png"
        document.getElementById("text_nl_mat_khau").innerHTML="Hide";
        $x.type = 'text';
    } else {
        document.getElementById("switch_nl_mat_khau_img").src="img/eye_open.png"
        document.getElementById("text_nl_mat_khau").innerHTML="Show";
        $x.type = 'password';
    }
}
//Switch mat khau
function switch_mat_khau(){
    let $x = document.getElementById("input_mat_khau");
    if ($x.type == 'password'){
        document.getElementById("switch_mat_khau_img").src="img/eye_hidden.png"
        document.getElementById("text_mat_khau").innerHTML="Hide";
        $x.type = 'text';
    } else {
        document.getElementById("switch_mat_khau_img").src="img/eye_open.png"
        document.getElementById("text_mat_khau").innerHTML="Show";
        $x.type = 'password';
    }   
}