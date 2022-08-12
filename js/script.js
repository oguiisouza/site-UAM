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

  //CEP teste
  function valida_cep(){

    if(document.getElementById('cep').value == ""){

        document.getElementById('resposta').innerHTML= `<i><b>CEP Obrigatorio...</b></i>`;
        document.getElementById("cep").style.borderBottom="red 3px solid";
        document.getElementById("cep").focus();
        return false

    }else{
        document.getElementById("cep").style.borderBottom="teal 3px solid";
        document.getElementById('resposta').innerHTML= "";
        return true
    }
}
  
    //Apos enviar esta função limpa o formulario de contatos
    function limpa_formulário_cep() {
      //Limpa valores do formulário de cep.
      document.getElementById('rua').value=("");
      document.getElementById('bairro').value=("");
      document.getElementById('cidade').value=("");
      document.getElementById('estado').value=("");
}

function meu_callback(conteudo) {
  if (!("erro" in conteudo)) {
      //Atualiza os campos com os valores.
      document.getElementById('rua').value=(conteudo.logradouro);
      document.getElementById('bairro').value=(conteudo.bairro);
      document.getElementById('cidade').value=(conteudo.localidade);
      document.getElementById('estado').value=(conteudo.uf);
  } //end if.
  else {
      //CEP não Encontrado.
      limpa_formulário_cep();
      alert("CEP não encontrado.");
  }
}
  
function pesquisacep(valor) {

  //Nova variável "cep" somente com dígitos.
  var cep = valor.replace(/\D/g, '');

  //Verifica se campo cep possui valor informado.
  if (cep != "") {

      //Expressão regular para validar o CEP.
      var validacep = /^[0-9]{8}$/;

      //Valida o formato do CEP.
      if(validacep.test(cep)) {

          //Preenche os campos com "..." enquanto consulta webservice.
          document.getElementById('rua').value="...";
          document.getElementById('bairro').value="...";
          document.getElementById('cidade').value="...";
          document.getElementById('estado').value="...";

          //Cria um elemento javascript.
          var script = document.createElement('script');

          //Sincroniza com o callback.
          script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

          //Insere script no documento e carrega o conteúdo.
          document.body.appendChild(script);

      } //end if.
      else {
          //cep é inválido.
          limpa_formulário_cep();
          alert("Formato de CEP inválido.");
      }
  } //end if.
  else {
      //cep sem valor, limpa formulário.
      limpa_formulário_cep();
  }
};
