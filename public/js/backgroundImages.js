window.onload = function() {

}


function changeBackground()
{
    var n = Math.floor((Math.random() * 3) + 1);

    document.getElementsByClassName("content-wrapper")[0].style.backgroundImage = "url('../img/summer"+n+".jpg')"; 
    location.reload();
}