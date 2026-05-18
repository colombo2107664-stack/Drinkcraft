function inizializzaMostraPassword() {
  const bottoneMostraPassword = document.getElementById('bottoneMostraPassword');
  const campoPassword = document.getElementById('campoPassword');
  if (!bottoneMostraPassword || !campoPassword) return;
  bottoneMostraPassword.addEventListener('click', (evento) => {
    evento.preventDefault();
    alternaVisibilitaPassword(campoPassword, bottoneMostraPassword);
  });
}

function alternaVisibilitaPassword(input, bottone) {
  if (input.type === 'password') {
    input.type = 'text';
    bottone.classList.add('password-visibile');
  } else {
    input.type = 'password';
    bottone.classList.remove('password-visibile');
  }
}

document.addEventListener('DOMContentLoaded', inizializzaMostraPassword);
