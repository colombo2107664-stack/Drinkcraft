function inizializzaAnimazioneErrori() {
  const formAccesso = document.getElementById('formAccesso');
  if (!formAccesso) return;
  document.addEventListener('erroreLogin', (evento) => {
    mostraMessaggioErrore(formAccesso, evento.detail.messaggio);
  });
}

function mostraMessaggioErrore(form, messaggio) {
  const elementiMessaggio = form.querySelectorAll('[data-messaggio-errore]');
  if (elementiMessaggio.length > 0) elementiMessaggio[0].setAttribute('data-messaggio-errore', messaggio);
}

function pulisciMessaggiErrore(form) { form.setAttribute('data-messaggio-errore', ''); }

document.addEventListener('DOMContentLoaded', inizializzaAnimazioneErrori);
