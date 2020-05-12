function getAjax(){
    // Creating the XMLHttpRequest object
    var request = new XMLHttpRequest();

    // Instantiating the request object
    request.open("GET", "info.txt");

    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            document.getElementById("demo").innerHTML = this.responseText;
        }
    };

    // Sending the request to the server
    request.send();
}
var i=0;

function getShow(){
    if(i%2==0){
    document.getElementById("rect1").style.display="";
    }
    else{
        document.getElementById("rect1").style.display="none";   
    }
    i++;
}