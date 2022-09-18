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
        var mang=[];

        function in_ra(){
            let so = parseFloat(document.getElementById("input_so").value)
            if(isNaN(so)){
                // Em có thử not isNaN mà không được, để em nghiên cứu lại sau nhưng cơ bản em chỉ kiểm tra nếu có giá trị :> nên chắc là .isInteger với .isFloat nhưng thế thì lâu quá =))
                } else {
                    mang=[];
                    var tong_mang=0;
                    // document.getElementById("output").innerHTML='';
                    for(let i = 0; i<so; i++){
                        mang[i]=Math.floor(Math.random() * 50) + 1;
                        tong_mang+=mang[i];
                    }
                    // sort mang cho de
                    mang.sort(function(a, b){return a-b});
                    
                    document.getElementById("output").innerHTML='Các phần tử của mảng sau khi đã sắp xếp (ngẫu nhiên từ 1-50): ';
                    xuong_dong();
                    for(let i=0; i<mang.length;i++){
                        document.getElementById("output").innerHTML+=mang[i] + ' ';
                    }
                    xuong_dong();
                    document.getElementById("output").innerHTML+=`Phần tử bé nhất của mảng là: ${mang[0]}`
                    xuong_dong();
                    document.getElementById("output").innerHTML+=`Phần tử lớn nhất của mảng là: ${mang[mang.length-1]}`
                    xuong_dong();
                    document.getElementById("output").innerHTML+=`Tổng mảng: ${tong_mang}`
                    // lam rong input
                    document.getElementById("input_so").innerHTML='';
                }
        }
        function xuong_dong(){
            document.getElementById("output").innerHTML+= '<br>'
        }
        
        

        