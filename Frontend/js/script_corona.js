var buttonOne = document.getElementById("one");
var buttonTwo = document.getElementById("two");
var iframe = document.getElementById("iframe");

buttonOne.addEventListener("click", buttonClick, false);
buttonTwo.addEventListener("click", buttonClick, false);

function buttonClick(e){
    if(e.target.id === "one"){
        iframe.src = "https://maps.mapmyindia.com/corona?lat=19.0760&lng=72.8777&zoom=10";
    }else{
        iframe.src = "https://maps.mapmyindia.com/corona/Maharashtra?state_corona_stats";
    } 
};