function openmenuhamburguer() {
  const menu = document.querySelector(".menuhamburguer");
  menu.classList.add("menuopen");
}
function closemenuhamburguer() {
  const menu = document.querySelector(".menuhamburguer");
  menu.classList.remove("menuopen");
}
function search() {
  const pesquisa = prompt("Pesquisa");
  if (pesquisa) {
    alert(`Pesquisou: ${pesquisa}`)
  }

}