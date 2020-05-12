var a;
function result(a){
    for(var i=1; i<=100; i++){
        if(a==i){
            document.getElementsByClassName('alert')[a-1].style.visibility="visible";
            break;
        }
    }


}