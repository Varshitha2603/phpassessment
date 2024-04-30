"use strict";

function search_bar() {
    let Search = document.getElementById("search");
    Search = Search.toLowerCase();
    let vale = document.getElementById("product");
    for (var i=0; i<vale.length; i++){
        if (!vale[i].innerHTML.toLowerCase().includes(Search)){
            vale[i].style.display ="none";
        }
        else {
            vale[i].style.display = "block";
        }
    }
}