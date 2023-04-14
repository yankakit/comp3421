const left_btn=document.getElementsByClassName('left');
const right_btn=document.getElementsByClassName('right');
const img=document.getElementsByClassName('main');
const simg=document.getElementsByClassName('smain');
var counter=0

function imagechange(){
    if(this.className=="left"){
        if(counter==0){
            img[0].style.display="none"
            simg[0].style.border=""
            counter=--img.length;
        }else{
            img[counter].style.display="none"
            simg[counter].style.border=""
            counter--;
        }
        img[counter].style.display="flex"
        simg[counter].style.border="5px solid black"
    }else{
        if(counter==--img.length){
            img[--img.length].style.display="none"
            simg[--img.length].style.border=""
            counter=0;
        }else{
            img[counter].style.display="none"
            simg[counter].style.border=""
            counter++;
        }
        img[counter].style.display="flex"
        simg[counter].style.border="5px solid black"
    }

}

left_btn[0].addEventListener("click", imagechange);
right_btn[0].addEventListener("click", imagechange);