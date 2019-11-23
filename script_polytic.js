state_divs=document.getElementsByClassName("State");
for(i=0; i<state_divs.len;i++)
    state_divs[i].addEventListener("click", function(event){console.log(1);});

function clicked(e){
    var state_code=(e.getElementsByClassName("State")[0].getAttribute("title"));
    drawCharts();
}
