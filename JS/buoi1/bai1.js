function in_ra(){
    let thang = parseInt(document.getElementById("input_thang").value);
    let nam = parseInt(document.getElementById("input_nam").value);
    let ngay;

    if(thang >12 || thang <1){
        alert("Tháng nhập bị sai kìa gái")
    } else if(nam<0){
        alert("Không biết là công thức có hoạt động với năm âm không nhưng cứ thế này cho chắc")
    } else if(isNaN(thang)){
        alert("Tháng không được để trống")
    } else if(isNaN(nam)){
        alert("Năm không được để trống")
    } else{
    switch(thang){
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            ngay=31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            ngay='30';
            break;
        case 2:
            if(nam % 400 == 0 || (nam % 4 == 0 && nam % 100 != 0)){
                ngay = 29;
            } else {
                ngay = 28;
            }
            break;
    }
    

    document.getElementById("ket_qua").innerHTML = `Số ngày của tháng ${thang} năm ${nam} là ${ngay}`
    
    }
}