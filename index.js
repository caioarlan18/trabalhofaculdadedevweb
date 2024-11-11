function openmenuhamburguer() {
  const menu = document.querySelector(".menuhamburguer");
  menu.classList.add("menuopen");
}
function closemenuhamburguer() {
  const menu = document.querySelector(".menuhamburguer");
  menu.classList.remove("menuopen");
}
function search() {
  const pesquisa = prompt("Área secreta");
  if (pesquisa === 'painel' || pesquisa === 'PAINEL') {
    window.location.href = './painel.php';
  }

}


function email(nome, email) {
  const params = {
    name: nome,
    email: email
  };
  emailjs.send("service_3l5cogi", "template_ar0v5zo", params).then(() => {
    alert('Email enviado com sucesso');
  });
}

