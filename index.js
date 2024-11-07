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
  const assunto = "Promoções Imperdíveis do Elizangela Schinaider Studio!";

  // Corpo do email com formatação (em texto simples, já que o mailto não suporta HTML)
  const corpo = `
    Olá ${nome},\n\n
    Esperamos que você esteja bem! Aqui estão algumas promoções imperdíveis para você aproveitar no nosso Studio de Beleza:

    -------------------------------------------------------------
    SERVIÇOS EXCLUSIVOS PARA VOCÊ:
    -------------------------------------------------------------
    1. Manicure e Pedicure: 20% OFF - **R$ 50,00**
    2. Depilação a Laser: 10% OFF - **R$ 150,00**
    3. Design de Sobrancelhas: **Grátis** na Primeira Sessão - **R$ 80,00**
    4. Tratamento Capilar: 10% OFF - **R$ 120,00**
    
    -------------------------------------------------------------
    **Agende seu horário conosco e aproveite essas promoções especiais!**
    
    Atenciosamente,
    Elizangela Schinaider Studio
    -------------------------------------------------------------
    www.elizangelastudio.com.br
  `;

  const gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1&to=${email}&su=${encodeURIComponent(assunto)}&body=${encodeURIComponent(corpo)}`;

  window.open(gmailUrl, '_blank');
}

