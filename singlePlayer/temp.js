function temp() {
    var clock = document.getElementById("reloj");
    var t = 60;
    var timer = setInterval(evaluar, 1000);

    function evaluar() {
        if (t == 0) {
            clearInterval(timer);
            return true;
        } else {
            t--;
            clock.innerHTML = t;
        }
    }
}
