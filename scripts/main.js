var licznik=1;
function funkcja(){
    alert();
}
function licencje(){
    if(licznik>=2){
        document.querySelector('footer>span>p:first-child').innerHTML='Licencje';
        licznik = 1;
    }else{
        let zmienna = '<div style="font-family: sans-serif;"><p>Font license info</p><p> ## Font Awesome</p><p> Copyright (C) 2016 by Dave Gandy</p><p> Author:    Dave Gandy</p><p> License:   SIL ()</p><p> Homepage:  http://fortawesome.github.com/Font-Awesome/</p></div>';
        document.querySelector('footer>span>p:first-child').innerHTML=zmienna;
        licznik++;
    }
}