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
        document.getElementById("output").style.display='block'
    }
    
}
var dem_lan_nhap = 0;
function in_ra(){

    let so = parseFloat(document.getElementById("input_so").value)
    if(isNaN(so)){
        // Em có thử not isNaN mà không được, để em nghiên cứu lại sau nhưng cơ bản em chỉ kiểm tra nếu có giá trị :> nên chắc là .isInteger với .isFloat nhưng thế thì lâu quá =))
        } else {
            document.getElementById("output").innerHTML= '';
            if(so % 2 == 0){
                document.getElementById("output").innerHTML= `${so} là số chẵn.`;
            } else if(so % 2 == 1){
                document.getElementById("output").innerHTML= `${so} là số lẻ.`;
            } else{
                document.getElementById("output").innerHTML= `${so} là số thập phân.`;
            }
                xuong_dong();
                
            let a= parseInt(Math.sqrt(so))
            let dem=0;
            for(let i=1; i<=a; ++i ){
                if(so % i == 0){
                    dem++;
                    // document.getElementById("output").innerHTML+= `${dem}`
                    // xuong_dong()
                }
            }

            if(so<=1){
                document.getElementById("output").innerHTML+= `${so} không phải số nguyên tố.`
            } else{
                    if(dem>=2){
                    document.getElementById("output").innerHTML+= `${so} không phải số nguyên tố.`
                }else if(Number.isInteger(so)){
                    document.getElementById("output").innerHTML+= `${so} là số nguyên tố.`
                } else{
                    document.getElementById("output").innerHTML+= `${so} không phải số nguyên tố.`
                }
            }
            
            xuong_dong()
                dem_lan_nhap++;
                document.getElementById("output").innerHTML+= `Bạn đã nhập được ${dem_lan_nhap} số.`
            xuong_dong()
            
                if(so>=1){
                    document.getElementById("output").innerHTML+= `Các số nguyên từ 1 đến ${so}:`
                    xuong_dong()
                    for(let i=1;i<=so;i++){
                        document.getElementById("output").innerHTML+= i + ' ';
                    }
                } else {
                    document.getElementById("output").innerHTML+= `Các số nguyên từ ${so} đến 1:`
                    xuong_dong() 
                    for(let i=so; i<=1;i++ ){
                        document.getElementById("output").innerHTML+= i + ' ';
                    }
                }
            document.getElementById("input_so").value='';
            
        }
}
function xuong_dong(){
    document.getElementById("output").innerHTML+= '<br>'
}


