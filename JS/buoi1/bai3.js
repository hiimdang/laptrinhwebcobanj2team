function in_ra(){
    let nam=parseInt(document.getElementById("input_nam").value)
    if(nam<0){
        alert("Không rõ công thức có áp dụng cho năm âm không nhưng cứ giới hạn cho chắc =))")
    } else{
            let can=(nam - 3) % 10;
            let chi=(nam - 3) % 12;
            let ten1;
            let ten2;
            switch(can){
                case 0:
                    ten1='Quý';
                    break;
                case 1:
                    ten1='Giáp';
                    break;
                case 2:
                    ten1='Ất';
                    break;
                case 3:
                    ten1='Bính';
                    break;
                case 4:
                    ten1='Đinh';
                    break;
                case 5:
                    ten1='Mậu';
                    break;
                case 6:
                    ten1='Kỷ';
                    break;
                case 7:
                    ten1='Canh';
                    break;
                case 8:
                    ten1='Tân';
                    break;
                case 9:
                    ten1='Nhâm';
            }
            switch(chi){
                case 0:
                    ten2='Hợi';
                    break;
                case 1:
                    ten2='Tý';
                    break;
                case 2:
                    ten2='Sửu';
                    break;
                case 3:
                    ten2='Dần';
                    break;
                case 4:
                    ten2='Mão';
                    break;
                case 5:
                    ten2='Thìn';
                    break;
                case 6:
                    ten2='Tỵ';
                    break;
                case 7:
                    ten2='Ngọ';
                    break;
                case 8:
                    ten2='Mùi';
                    break;
                case 9:
                    ten2='Thân';
                    break;
                case 10:
                    ten2='Dậu';
                    break;
                case 11:
                    ten2='Tuất';
            }
            let nam_am_lich=ten1 + ' ' + ten2;
            document.getElementById("ket_qua").innerHTML=`Năm ${nam} dương lịch  là năm ${nam_am_lich} âm lịch.`
        }
    }