function inizializzaValidazioneEmail() {
  const campoEmail = document.getElementById('campoEmail');
  const messaggioErroreEmail = document.getElementById('messaggioErroreEmail');
  if (!campoEmail || !messaggioErroreEmail) return;
  campoEmail.addEventListener('input', () => validaEmailLive(campoEmail, messaggioErroreEmail));
  campoEmail.addEventListener('blur', () => validaEmailLive(campoEmail, messaggioErroreEmail));
}

function validaEmailLive(campoEmail, messaggioErrore) {
  const valore = campoEmail.value.trim();
  const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (valore === '') {
    messaggioErrore.textContent = '';
    campoEmail.classList.remove('email-invalida');
    campoEmail.setCustomValidity('');
    return;
  }
  if (!regexEmail.test(valore)) {
    messaggioErrore.textContent = 'Formato email non valido';
    campoEmail.classList.add('email-invalida');
    campoEmail.setCustomValidity('Email non valida');
  } else {
    messaggioErrore.textContent = '';
    campoEmail.classList.remove('email-invalida');
    campoEmail.setCustomValidity('');
  }
}

document.addEventListener('DOMContentLoaded', inizializzaValidazioneEmail);
