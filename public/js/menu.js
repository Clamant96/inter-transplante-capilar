function myFunction() {
    var x = document.getElementById("menuResposivo");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
    
}