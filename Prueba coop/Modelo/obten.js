let tab = document.getElementById("tabla-princ");

let subtot=0, prod, aux=0,total=0;
for(let i=1, celda; i<tab.rows.length;i++){
  iva = tab.rows[i].cells[4].innerHTML;
  cant = tab.rows[i].cells[3];
  celda = tab.rows[i].cells[2];
  prod= celda.innerHTML*cant.innerHTML;
  subtot+=prod;
  aux+=Math.round(prod*(iva/100));
  total+=Math.round(prod*(iva/100));
}
total+=subtot;
console.log(subtot);

document.querySelector('.subtot').innerHTML = subtot;
document.querySelector('.total').innerHTML = total;
document.getElementById("tot").value = total;
document.getElementById("iva").value = aux;
