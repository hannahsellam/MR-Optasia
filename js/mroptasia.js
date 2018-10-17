document.getElementById('mi').onclick = function () {
    var aside = document.getElementById('burger');
        aside.style.left ='0px';
        aside.style.transition='ease 0.2s';
            var opacity = document.getElementById('opacity');
                opacity.style.display='initial';
};


document.getElementById('opacity').onclick = function () {
    var aside = document.getElementById('burger');
    aside.style.left ='-200px';
    this.style.display ='none';
};