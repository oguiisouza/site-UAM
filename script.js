// github.com/oguiisouza | guilhermesc.com //

const inputs = document.querySelectorAll(".input")


function focusOne(){
    let parent = this.parentNode
    parent.classList.add("focus")
}
    
function blurOne(){
    let parent = this.parentNode
    if (this.value == ""){
        parent.classList.remove("focus");
    }
}

inputs.forEach((input) =>{
    input.addEventListener("focus", focusOne)
    input.addEventListener("blur", blurOne)
})


let cpfInput = document.querySelector('#cpf');

cpfInput.addEventListener('input', event => {
  if(event.inputType !== 'deleteContentBackward') { 
    if(cpfInput.value.length == 3) cpfInput.value += '.';
    if(cpfInput.value.length == 7) cpfInput.value += '.';
    if(cpfInput.value.length == 11) cpfInput.value += '-';
  }
});

function mask(o, f) {
    setTimeout(function() {
      var v = mphone(o.value);
      if (v != o.value) {
        o.value = v;
      }
    }, 1);
  }
  
  function mphone(v) {
    var r = v.replace(/\D/g, "");
    r = r.replace(/^0/, "");
    if (r.length > 10) {
      r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
    } else if (r.length > 5) {
      r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
    } else if (r.length > 2) {
      r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
      r = r.replace(/^(\d*)/, "($1");
    }
    return r;
  }