function arrow() {
    scroll(0, 100);
}

function arrow2() {
    scroll(0, 200);
}

function arrow3() {
    scroll(0, 300);
}

function arrow4() {
    scroll(0, 400);
}

function arrow5() {
    scroll(0, 500);
}

function arrow6() {
    scroll(0, 600);
}

function arrow7() {
    scroll(0, 750);
}

document.getElementById('arrow').onclick = function () {
    setTimeout(arrow,100);
    setTimeout(arrow2,150);
    setTimeout(arrow3,200);
    setTimeout(arrow4,250);
    setTimeout(arrow5,300);
    setTimeout(arrow6,350);
    setTimeout(arrow7,400);
}