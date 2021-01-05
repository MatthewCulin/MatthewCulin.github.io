"use strict";

window.addEventListener('DOMContentLoaded', () => {

    const disappearingText = document.querySelector("#disappear p");
    const backgroundList = document.querySelector("#background ul");
    const multiColourText = document.querySelector("#multi p");
    const cloneText = document.querySelector("input[type=text]");
    const changeSize = document.querySelector("section button");
    const addChild = document.querySelector("#add ul");
    const listOperationEven = document.querySelectorAll("#list ul li:nth-child(even)");
    const listOperationOdd = document.querySelectorAll("#list ul li:nth-child(odd)");
    const simpleFetch = document.querySelector("#fetch h3");

    // MAKES CURSOR BE POINTER FOR ELEMENTS THAT CNA BE CLICKED
    disappearingText.classList.add("clickable");
    backgroundList.classList.add("clickable");
    multiColourText.classList.add("clickable");
    addChild.classList.add("clickable");
    simpleFetch.classList.add("clickable");

    // HIDE TEXT
    disappearingText.addEventListener("click", event => {
        disappearingText.classList.add("hidden");
    });

    // CHANGE BACKGROUND COLOUR
    backgroundList.addEventListener("click", event => {
        if(event.target.nodeName == "LI"){     
            backgroundList.style.backgroundColor = "purple";
        }   
    });

    // CHANGE TEXT COLOUR - SINGLE
    multiColourText.addEventListener("click", event => {
        multiColourText.style.color = "red";
    });

    // CHANGE TEXT COLOUR - DOUBLE
    multiColourText.addEventListener("dblclick", event => {
        multiColourText.style.color = "pink";
    });

    // CLONE TEXT
    cloneText.addEventListener("keyup", event => {
        document.querySelector("input~p").innerHTML = cloneText.value;
    });

    // CHANGE BOX SIZE
    changeSize.addEventListener("click", event => {
        const width = document.querySelector("input[name=width]");
        const height = document.querySelector("input[name=height]");
        const box = document.querySelector("section button~div");

        // IF WIDTH BOX INPUT IS NOT A NUMBER
        if(isNaN(width.value) || width.value=="")
            document.querySelector("input[name=width]~span").classList.remove("hidden");
        
        // IF WIDTH BOX INPUT IS A NUMBER
        else if(!isNaN(width.value)){
            // IF AT MAX WIDTH
            if(box.offsetWidth >= 800)
                alert("Box is already at max width");
            
            // IF AT MIN WIDTH
            else if(box.offsetWidth == 16)
                alert("Box is already at min width");

            // BOX WILL EXCEED MAX WIDTH
            else if((box.offsetWidth + (width.value*16)) >= 800)
                alert("Box will exceed max width");

            // BOX WILL EXCEED MIN WIDTH
            else if((box.offsetWidth + (width.value*16)) <= 16)
                alert("Box will exceed min width");

            // INCREASE BOX WIDTH
            else{
                box.style.width = (box.offsetWidth + (width.value*16)) + 'px';
                document.querySelector("input[name=width]~span").classList.add("hidden");
            }
        }

        // IF HEIGHT BOX INPUT IS NOT A NUMBER
        if(isNaN(height.value) || height.value=="")
            document.querySelector("input[name=height]~span").classList.remove("hidden");
        
        // IF HEIGHT BOX INPUT IS A NUMBER
        else if(!isNaN(height.value)){
            // IF AT MAX HEIGHT
            if(box.offsetHeight >= 800)
                alert("Box is already at max height");
            
            // IF AT MIN HEIGHT
            else if(box.offsetHeight == 16)
                alert("Box is already at min height");

            // BOX WILL EXCEED MAX HEIGHT
            else if((box.offsetHeight + (height.value*16)) >= 800)
                alert("Box will exceed max height");

            // BOX WILL EXCEED MIN HEIGHT
            else if((box.offsetHeight + (height.value*16)) <= 16)
                alert("Box will exceed min height");

            // INCREASE BOX HEIGHT
            else{
                box.style.height = (box.offsetHeight + (height.value*16)) + 'px';
                document.querySelector("input[name=height]~span").classList.add("hidden");
            }
        }
        
    });

    // ADD CHILD AFTER CURRENT CLICKED
    addChild.addEventListener("click", event => {
        if(event.target.nodeName == "LI"){
            let newli = document.createElement("li");
            newli.append("I'm new but you can click me as well");
            event.target.after(newli);
        }
    });
    
    // FETCH FROM ALTERNATE PAGE
    simpleFetch.addEventListener("click", events =>{
        const xhr = new XMLHttpRequest();
        xhr.open("GET", "a2new.html");
        xhr.addEventListener("load", event => {
            if(xhr.status == 200){
                simpleFetch.parentElement.innerHTML = xhr.response;
            }
            else{
                simpleFetch.parentElement.innerHTML = "<h4>Something went wrong</h4>"
            }
        });
        xhr.send();
    });


    // LIST OPERATIONS
    listOperationEven.forEach(listOperationEven =>       
        listOperationEven.addEventListener("mouseover", event =>       
            event.target.style.backgroundColor = "pink"
        ));

    listOperationEven.forEach(listOperationEven => 
        listOperationEven.addEventListener("mouseout", event =>       
            event.target.style.backgroundColor = "#F0FFFF"  
        )
    );

    listOperationOdd.forEach(listOperationOdd =>       
        listOperationOdd.addEventListener("click", event => {
            let newli = document.createElement("li");
            newli.append("I'm new here");
            event.target.after(newli);

            event.target.remove();
        }) 
    );

    // I WOULD HAVE LIKED TO DO THE LIST OPERATIONS USING EVENT DELEGATION 
    // HOWEVER, I WAS UNSURE OF HOW TO DO IT OR IF IT IS EVEN POSSIBLE
    
});