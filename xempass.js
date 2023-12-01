function check(){
    var pass = document.getElementById('mk1');
    var check = document.getElementById('check1');
    if(check.checked){
        pass.type = 'text';
    }else{
        pass.type = 'password';
    }
}
function check1(){
    var pass1 = document.getElementById('mk2');
    var check1 = document.getElementById('check2');
    if(check1.checked){
        pass1.type = 'text';
    }else{
        pass1.type = 'password';
    }
}
function huy(){
    var tk = document.getElementById('taikhoan').value;
    var mk = document.getElementById('mk1').value;
    var sdt = document.getElementById('dienthoai').value;
    var email = document.getElementById('email').value;

    tk = "";
    mk ="";
    sdt="";
    email="";
}