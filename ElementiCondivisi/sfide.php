<?php
include __DIR__ . "/../ElementiCondivisi/IndicePagine.php";

class Sfida {
    private string $titolo;
    private string $descrizione;
    private string $scadenza;
    private int $partecipanti;
    private string $ricompensa;
    private string $badgeImg;
    private string $badgeAlt;
    private string $badgeNome;
    private string $immagine;
    private string $immagineAlt;
    private string $linkPartecipa;
    private string $linkProposte;

    public function __construct(
                                string $titolo,
                                string $descrizione,
                                string $scadenza,
                                int $partecipanti,
                                string $ricompensa,
                                string $badgeImg,
                                string $badgeAlt,
                                string $badgeNome,
                                string $immagine,
                                string $immagineAlt,
                                string $linkPartecipa,
                                string $linkProposte)
        {
        $this->titolo = $titolo;
        $this->descrizione = $descrizione;
        $this->scadenza = $scadenza;
        $this->partecipanti = $partecipanti;
        $this->ricompensa = $ricompensa;
        $this->badgeImg = $badgeImg;
        $this->badgeAlt = $badgeAlt;
        $this->badgeNome = $badgeNome;
        $this->immagine = $immagine;
        $this->immagineAlt = $immagineAlt;
        $this->linkPartecipa = $linkPartecipa;
        $this->linkProposte = $linkProposte;
        }

    // GETTER
    public function getTitolo(): string { return $this->titolo; }
    public function getDescrizione(): string { return $this->descrizione; }
    public function getScadenza(): string { return $this->scadenza; }
    public function getPartecipanti(): int { return $this->partecipanti; }
    public function getRicompensa(): string { return $this->ricompensa; }
    public function getBadgeImg(): string { return $this->badgeImg; }
    public function getBadgeAlt(): string { return $this->badgeAlt; }
    public function getBadgeNome(): string { return $this->badgeNome; }
    public function getImmagine(): string { return $this->immagine; }
    public function getImmagineAlt(): string { return $this->immagineAlt; }
    public function getLinkPartecipa(): string { return $this->linkPartecipa; }
    public function getLinkProposte(): string { return $this->linkProposte; }

    // SETTER
    public function setTitolo(string $titolo): void { $this->titolo = $titolo; }
    public function setDescrizione(string $descrizione): void { $this->descrizione = $descrizione; }
    public function setScadenza(string $scadenza): void { $this->scadenza = $scadenza; }
    public function setPartecipanti(int $partecipanti): void { $this->partecipanti = $partecipanti; }
    public function setRicompensa(string $ricompensa): void { $this->ricompensa = $ricompensa; }
    public function setBadgeImg(string $badgeImg): void { $this->badgeImg = $badgeImg; }
    public function setBadgeAlt(string $badgeAlt): void { $this->badgeAlt = $badgeAlt; }
    public function setBadgeNome(string $badgeNome): void { $this->badgeNome = $badgeNome; }
    public function setImmagine(string $immagine): void { $this->immagine = $immagine; }
    public function setImmagineAlt(string $immagineAlt): void { $this->immagineAlt = $immagineAlt; }
    public function setLinkPartecipa(string $linkPartecipa): void { $this->linkPartecipa = $linkPartecipa; }
    public function setLinkProposte(string $linkProposte): void { $this->linkProposte = $linkProposte; }

    // METODO PER CREARE IL POST DELLA SFIDA
    public function creaPostSfida(): string
    {
        $scadenzaCountdown = htmlspecialchars($this->getScadenza());

        return '
        <div class="postsfida" data-sfida data-scadenza="' . $scadenzaCountdown . '">
            <div class="Sezsinistra">
                <h1>' . htmlspecialchars($this->getTitolo()) . '</h1>
                <p>' . htmlspecialchars($this->getDescrizione()) . '</p>

                <div class="barra-sfida">
                    <div class="oggetto-barra">
                        <svg class= "img-tonda" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                        <div class="scritte">
                            <h4 class="Titolo">Scadenza</h4>
                            <span class="valore">' . htmlspecialchars($this->getScadenza()) . '</span>
                            <span class="countdown-sfida" data-countdown-sfida></span>
                        </div>
                    </div>

                    <div class="oggetto-barra">
                        <svg class= "img-tonda" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
                        <div class="scritte">
                            <h4 class="Titolo">Partecipanti</h4>
                            <span class="valore">' . htmlspecialchars((string)$this->getPartecipanti()) . '</span>
                        </div>
                    </div>

                    <div class="oggetto-barra">
                        <svg class= "img-tonda" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-medal-icon lucide-medal"><path d="M7.21 15 2.66 7.14a2 2 0 0 1 .13-2.2L4.4 2.8A2 2 0 0 1 6 2h12a2 2 0 0 1 1.6.8l1.6 2.14a2 2 0 0 1 .14 2.2L16.79 15"/><path d="M11 12 5.12 2.2"/><path d="m13 12 5.88-9.8"/><path d="M8 7h8"/><circle cx="12" cy="17" r="5"/><path d="M12 18v-2h-.5"/></svg>
                        <div class="scritte">
                            <h4 class="Titolo">Ricompensa</h4>
                            <span class="valore">' . htmlspecialchars($this->getRicompensa()) . '</span>
                        </div>
                    </div>
                </div>

                <div class="finale">
                    <div class="badge">
                        <img src="' . htmlspecialchars($this->getBadgeImg()) . '" alt="' . htmlspecialchars($this->getBadgeAlt()) . '" class="img-badge">
                        <h4 class="titbadge">' . htmlspecialchars($this->getBadgeNome()) . '</h4>
                    </div>
                    <div class="bottoni">
                        <a href="' . htmlspecialchars($this->getLinkPartecipa()) . '">
                            <button class="bottoniF">Partecipa Ora</button>
                        </a>
                        <a href="' . htmlspecialchars($this->getLinkProposte()) . '">
                            <button class="bottoniF">Vedi Proposte</button>
                        </a>
                    </div>
                </div>
            </div>

            <div class="Sezdestra">
                <img src="' . htmlspecialchars($this->getImmagine()) . '" alt="' . htmlspecialchars($this->getImmagineAlt()) . '" class="imgsfida">
            </div>
        </div>';
    }

    // METODO PER CREARE IL POST DELLA SFIDA
    public function creaPremioOttenuto(): string{
        return 
                '<div class="singoloPremio"> <img class="immPremio" src="' . htmlspecialchars($this->getBadgeImg()). '"> <div class="testoPremio"> ' . htmlspecialchars($this->getBadgeNome()). '</div></div>';
                
                        
}
}
?>
