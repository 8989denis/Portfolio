var licznik=true,licznik2=true;
function funkcja(){
    alert();
}
function licencje(){
    if(licznik==false){
        document.querySelector('footer>span>p:first-child').innerHTML='Licencje';
        licznik = true;
    }else{
        let zmienna = '<div style="font-family: sans-serif;"><p>Font license info</p><p> ## Font Awesome</p><p> Copyright (C) 2016 by Dave Gandy</p><p> Author:    Dave Gandy</p><p> License:   SIL ()</p><p> Homepage:  http://fortawesome.github.com/Font-Awesome/</p></div>';
        document.querySelector('footer>span>p:first-child').innerHTML=zmienna;
        licznik=false;
    }
}
function toogleKontakt(){
    if(licznik2==false){
        document.querySelector('body>form').style.display="none";
        licznik2 = true;
    }else{
        document.querySelector('body>form').style.display="block";
        licznik2=false;
    }
}