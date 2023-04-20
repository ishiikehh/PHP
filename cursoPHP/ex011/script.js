setInterval(function porcentar(){
var title = document.querySelector('title')
var porcento = document.getElementById('porcent')
var barra = document.getElementById('ran')

porcento.innerHTML = barra.value
title.innerHTML = `Reajustador de Preço | ${barra.value}%`
}
,50)
