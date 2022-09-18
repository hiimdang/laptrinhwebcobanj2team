function in_ra(){
    let luong_ban_dau = parseInt(document.getElementById("input_luong").value);
    let luong_chuan;
    let thue;
    if(luong_ban_dau<0){
        alert("Có ai làm không công mà còn phải trả tiền cho m nữa hả mă")
    } else if(isNaN(luong_ban_dau)){
        alert("Sao m không nhập? Có thể ấn mà không biết nhập à =))")
    } else{
            if(luong_ban_dau==15){
            thue = luong_ban_dau*30/100;
        } else if(luong_ban_dau >= 7 && luong_ban_dau<15){
            thue = luong_ban_dau*20/100;
        } else if(luong_ban_dau <7 && luong_ban_dau>=0){
            thue=luong_ban_dau*10/100;
        }
        luong_chuan=luong_ban_dau-thue;
            document.getElementById("ket_qua").innerHTML=`Lương ban đầu: ${luong_ban_dau} | Thuế thu nhập: ${thue} | Lương chuẩn ${luong_chuan}`
    }

}