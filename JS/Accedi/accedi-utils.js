function aggiungiClasseTemporanea(elemento, nomeClasse, durata) {
  elemento.classList.add(nomeClasse);
  setTimeout(() => elemento.classList.remove(nomeClasse), durata);
}

function emettiEvento(nomeEvento, dettagli = {}) {
  const evento = new CustomEvent(nomeEvento, { detail: dettagli });
  document.dispatchEvent(evento);
}

function attendiFinAnimazione(elemento) {
  return new Promise((risolvi) => {
    const gestore = () => {
      elemento.removeEventListener('animationend', gestore);
      risolvi();
    };
    elemento.addEventListener('animationend', gestore);
  });
}
