function retangulo() {
    var base = document.getElementById("retangulo_b").value;
    var altura = document.getElementById("retangulo_h").value;
    var r = (parseFloat(base) + parseFloat(altura));
    alert("Perímetro do Retângulo = " + (r * 2));
}

function quadrado() {
    var lado = document.getElementById("quadrado_l").value;
    alert("Perímetro do Quadrado = " + (lado * 4));
}

function paralelograma() {
    var base = document.getElementById("paralelograma_b").value;
    var altura = document.getElementById("paralelograma_a").value;
    var r = (parseFloat(base) + parseFloat(altura));
    alert("Perímetro do Paralelogramo = " + (r * 2));
}

function trapezio() {
    var l1 = document.getElementById("trapezio_l1").value;
    var l2 = document.getElementById("trapezio_l2").value;
    var l3 = document.getElementById("trapezio_l3").value;
    var l4 = document.getElementById("trapezio_l4").value;
    var r = (parseFloat(l1) + parseFloat(l2) + parseFloat(l3) + parseFloat(l4));
    alert("Perímetro do Trapézio = " + r);
}