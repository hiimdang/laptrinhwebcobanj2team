let input= document.getElementById("input_so");
input.addEventListener("keypress", function(event) {
// If the user presses the "Enter" key on the keyboard
    if (event.key === 'Enter') {
        // Cancel the default action, if needed
        event.preventDefault();
        // Trigger the button element with a click
        document.getElementById("button_push").click();
    }
});


function hien_cai_bang(){
    let so = parseFloat(document.getElementById("input_so").value)
    if(isNaN(so)){
        alert("Nhập số đi gái")
    } else{
        if(so <= 999999){
            document.getElementById("circle").style.display='block'
            document.getElementById("output").style.display='block'
            
        }
    }
    
}

// Khai báo mảng
var mang=[];
var tong=0;
var so_nho;
var mang_nguyen_to=[]
var ma_mau;
function in_ra(){

    let so = parseFloat(document.getElementById("input_so").value);
    let so_chuoi = document.getElementById("input_so").value;
    if(isNaN(so)){
        // Em có thử not isNaN mà không được, để em nghiên cứu lại sau nhưng cơ bản em chỉ kiểm tra nếu có giá trị :> nên chắc là .isInteger với .isFloat nhưng thế thì lâu quá =))
        } else {
            if(so>999999){
                alert('Nhập số lớn quá sao ra mã màu pa')
            }
            else{
                mang.push(so);
                tong=tong+so;

                // Lay ma mau
                while (so_chuoi.length < 6) {
                so_chuoi=0+so_chuoi;
                }
                ma_mau = '#' + so_chuoi;
                document.getElementById("output").innerHTML=`${ma_mau}`
                console.log(ma_mau)
                //> Het lay ma mau

                document.getElementById("output").innerHTML=`Các phần tử của mảng sau khi đã sắp xếp:`;
                xuong_dong();
                // Sort mang
                mang.sort(function(a, b){return a-b});
                for(let i=0; i<mang.length;i++){
                    document.getElementById("output").innerHTML+=mang[i] + ' ';
                }
                xuong_dong();
                document.getElementById("output").innerHTML+=`Mảng có số phần tử là: ${mang.length}.`
                xuong_dong();
                document.getElementById("output").innerHTML+=`Các phần tử chẵn của mảng là: `
                for(let i=0; i<mang.length;i++){
                if(mang[i] % 2 == 0){
                    document.getElementById("output").innerHTML+=mang[i] + ' ';
                }
                }
                xuong_dong();
                document.getElementById("output").innerHTML+=`Các phần tử lẻ của mảng là: `
                for(let i=0; i<mang.length;i++){
                if(Math.abs(mang[i]) % 2 == 1){
                    document.getElementById("output").innerHTML+=mang[i] + ' ';
                }
                }
                xuong_dong();
                document.getElementById("output").innerHTML+=`Các phần tử thập phân của mảng là: `
                for(let i=0; i<mang.length;i++){
                if((Math.abs(mang[i]) % 2 != 1) && (Math.abs(mang[i]) % 2 != 0)){
                    document.getElementById("output").innerHTML+=mang[i] + ' ';
                }
                }
                xuong_dong();
                document.getElementById("output").innerHTML+=`Các phần tử là số nguyên tố của mảng là: `
                
                let a= parseInt(Math.sqrt(so))
                let dem=0;
                    for(let i=1; i<=a; ++i ){
                        if(so % i == 0){
                            dem++;
                        }
                    }

                    if((dem<2) && (so>1) && ((so % 2==0) || (so % 2 ==1)) ) {
                        mang_nguyen_to.push(so);
                    }
                    // sort mang_nguyen_to
                    mang_nguyen_to.sort(function(a, b){return a-b});
                    for(let i=0; i<mang_nguyen_to.length;i++){
                        document.getElementById("output").innerHTML+= mang_nguyen_to[i] + ' '; 
                    }



                xuong_dong();
                document.getElementById("output").innerHTML+=`Tổng phần tử trong mảng: ${tong}`
                xuong_dong();
                let dodai= mang.length
                document.getElementById("output").innerHTML+=`Phần tử bé nhất trong mảng: ${mang[0]}`
                xuong_dong();
                document.getElementById("output").innerHTML+=`Phần tử lớn nhất trong mảng: ${mang[mang.length-1]}`
                
                document.getElementById("ma_mau_trong_circle").innerHTML=ma_mau;
                document.getElementById("circle").style.backgroundColor=ma_mau;

                // Làm rỗng input
                document.getElementById("input_so").value= '';
            }
        }
}
function xuong_dong(){
    document.getElementById("output").innerHTML+= '<br>'
}



