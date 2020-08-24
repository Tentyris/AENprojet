function ajax() {
const date = document.getElementById("date");
const h = document.getElementById("horaire");
const horaire = h.options[h.selectedIndex].value;
/*const m = document.getElementById("monitor");
const monitor = m.options[m.selectedIndex].value;*/
console.log(date.value);
console.log(horaire);
    const xhr = new XMLHttpRequest()
    xhr.open('GET',`selecthorraire.php?date=${date.value}&horaire=${horaire}`);
    xhr.setRequestHeader("Content-Type", 'application/x-www-form-urlencoded; charset=UTF-8');
    xhr.onload = function() {
  if (this.status >= 200 && this.status < 400) {
    // Success!
    result = xhr.responseText
    console.log(result)
    //reply.innerHTML = result.valid;
  } else {
    console.error('ép as bon')
  }
};
    xhr.send()
}