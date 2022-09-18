function kiem_tra(){
    let kiem_tra_loi = false;

    // Ten
    document.getElementById("loi_ten").innerHTML=``
    let ten = document.getElementById("input_ten").value;

    if(ten.length == 0){
        kiem_tra_loi = true;
        document.getElementById("loi_ten").innerHTML=`Tên không được để trống á pà.`;
    }else{
            
            let regex_ten = /^([A-ZÀÁÃẠẢĂẮẰẲẴẶÂẤẦẨẪẬÈÉẸẺẼÊỀẾỂỄỆĐÌÍĨỈỊÒÓÕỌỎÔỐỒỔỖỘƠỚỜỞỠỢÙÚŨỤỦƯỨỪỬỮỰỲỴỶỸÝ][a-zàáãạảăắằẳẵặâấầẩẫậèéẹẻẽêềếểễệđìíĩỉịòóõọỏôốồổỗộơớờởỡợùúũụủưứừửữựỳỵỷỹý]{1,6} ?)+$/
            if (regex_ten.test(ten) == false){
                kiem_tra_loi = true;
                document.getElementById("loi_ten").innerHTML=`Tên không hợp lệ, kiểm tra lại đi pà.`;
            }
        }
     

    // Email
    document.getElementById("loi_email").innerHTML=``;
    let email = document.getElementById("input_email").value;
    if(email.length == 0){
        kiem_tra_loi=true;
        document.getElementById("loi_email").innerHTML=`Email không được để trống á pà.`;
    }

    // MK
    document.getElementById("loi_mat_khau").innerHTML=``;
    let mat_khau = document.getElementById("input_mat_khau").value;
    if(mat_khau.length == 0){
        kiem_tra_loi=true;
        document.getElementById("loi_mat_khau").innerHTML=`Mật khẩu không được để trống á pà.`;
    }

    // Nhap lai MK
    document.getElementById("loi_nhap_lai_mat_khau").innerHTML=``;
    let nhap_lai_mat_khau = document.getElementById("input_nhap_lai_mat_khau").value;
    if(nhap_lai_mat_khau.length == 0){
        kiem_tra_loi=true;
        document.getElementById("loi_nhap_lai_mat_khau").innerHTML=`Mật khẩu không được để trống á pà.`;
    } else {
        if(nhap_lai_mat_khau != mat_khau){
            kiem_tra_loi=true;
            document.getElementById("loi_nhap_lai_mat_khau").innerHTML=`Mật khẩu không trùng kìa pà.`;
        }
    }

    // Ngay sinh
    document.getElementById("loi_ngay_sinh").innerHTML=``;
    let ngay_sinh = document.getElementById("input_ngay_sinh").value;
    if(ngay_sinh.length == 0){
        kiem_tra_loi=true;
        document.getElementById("loi_ngay_sinh").innerHTML=`Ngày sinh không được để trống á pà.`
    }

    // Kiểm tra lỗi
    if(kiem_tra_loi){
        return false;
    }
}

// Show-hide password
function show_hide_password_func(){
    let x = document.getElementById("input_mat_khau");
    if (x.type === "password") {
        x.type = "text";
        document.getElementById("span_show_hide_mk").innerHTML=`Hide`
        document.getElementById("show_hide_img_mk").src="img/eye_hidden.svg"
    } else {
        x.type = "password";
        document.getElementById("span_show_hide_mk").innerHTML=`Show`
        document.getElementById("show_hide_img_mk").src="img/eye.svg"
    }
}
//Show-hide nlpassword
function show_hide_nl_password_func(){
    let x = document.getElementById("input_nhap_lai_mat_khau");
    if (x.type === "password") {
        x.type = "text";
        document.getElementById("span_show_hide_nl_mk").innerHTML=`Hide`
        document.getElementById("show_hide_img_nl_mk").src="img/eye_hidden.svg"
    } else {
        x.type = "password";
        document.getElementById("span_show_hide_nl_mk").innerHTML=`Show`
        document.getElementById("show_hide_img_nl_mk").src="img/eye.svg"
    }
}