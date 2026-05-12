<?php
include __DIR__ ."/../ElementiCondivisi/IndicePagine.php";

class Drink
{
    private string $nome;
    private string $tipo;
    private string $immagine;
    private array $ingredienti;
    private array $preparazione;
    private array $recensione;
    private array $azioni;

    private string $difficolta;

    public function __construct(string $nome,
                                string $tipo,
                                string $immagine,
                                array $ingredienti,
                                array $preparazione,
                                array $recensione,
                                array $azioni,
                                string $difficolta){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->immagine = $immagine;
        $this->ingredienti = $ingredienti;
        $this->preparazione = $preparazione;
        $this->recensione = $recensione;
        $this->azioni = $azioni;
        $this->difficolta = $difficolta;
    }

    // GETTER
    public function getNome(): string { return $this->nome; }
    public function getTipo(): string { return $this->tipo; }
    public function getImmagine(): string { return $this->immagine; }
    public function getIngredienti(): array { return $this->ingredienti; }
    public function getPreparazione(): array { return $this->preparazione; }
    public function getRecensione(): array { return $this->recensione; }
    public function getAzioni(): array { return $this->azioni; }
    public function getDifficolta(): string { return $this->difficolta; }

    // SETTER
    public function setNome(string $nome): void { $this->nome = $nome; }
    public function setTipo(string $tipo): void { $this->tipo = $tipo; }
    public function setImmagine(string $immagine): void { $this->immagine = $immagine; }
    public function setIngredienti(array $ingredienti): void { $this->ingredienti = $ingredienti; }
    public function setPreparazione(array $preparazione): void { $this->preparazione = $preparazione; }
    public function setRecensione(array $recensione): void { $this->recensione = $recensione; }
    public function setAzioni(array $azioni): void { $this->azioni = $azioni; }
    public function setDifficolta(string $difficolta): void { $this->difficolta = $difficolta; }

    // METODO PER CREARE UN POST DI UN DRINK
    public function creaPostDrink(): string
    {
        global $pagine;
        $ingredientiHtml = '';
        foreach ($this->getIngredienti() as $ingrediente) {
            $ingredientiHtml .= '
            <li>
                <p class="nome">' . htmlspecialchars($ingrediente['nome']) . '</p>
                <p class="quantita">' . htmlspecialchars($ingrediente['quantita']) . '</p>
            </li>';
        }

        $preparazioneHtml = '';
        foreach ($this->getPreparazione() as $step) {
            $preparazioneHtml .= '<li>' . htmlspecialchars($step) . '</li>';
        }

        $azioniHtml = '';
        foreach ($this->getAzioni() as $azione) {
            $azioniHtml .= '
                <div class="azione">
                <svg viewBox="0 0 24 24" class="icon">
                    <path d="' . htmlspecialchars($azione['svg']) . '"></path>
                </svg>                    
                <span>' . htmlspecialchars($azione['numero']) . ' ' . htmlspecialchars($azione['label']) . '</span>
                </div>';
        }
        $link = htmlspecialchars($pagine['SingoloDrink']);

        return '
        <a href="'. $link .'"><div class="post">
            <div class="sezionesinistra">
                <h1>' . htmlspecialchars($this->getNome()) . '</h1>
                <div class="ImgRicetta">
                    <img src="' . htmlspecialchars($this->getImmagine()) . '" alt="' . htmlspecialchars($this->getNome()) . '" class="Drink">
                </div>
            </div>
            <div class="sezionedestra">
                <div class="sezioneGuida">
                    <div class="ingredienti-box">
                        <div class="titoletti">
                            <h3>Ingredienti</h3>
                            <span>' . htmlspecialchars($this->getTipo()) . '</span>
                        </div>
                        <ul class="ingredienti">' . $ingredientiHtml . '</ul>
                    </div>
                    <div class="preparazione-box">
                        <h3>Preparazione</h3>
                        <ol class="preparazione">' . $preparazioneHtml . '</ol>
                    </div>
                </div>
                <div class="SezRecensione">
                    <div class="sinistra">
                        <div class="profilo">
                            <img src="' . htmlspecialchars($this->getRecensione()['foto']) . '" alt="Foto profilo" class="Fotoprofilo">
                            <div class="dati">
                                <h4>' . htmlspecialchars($this->getRecensione()['nome']) . '</h4>
                                <div class="dati-tempo">
                                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                                    <span>' . htmlspecialchars($this->getRecensione()['tempo']) . '</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="centro">' . $azioniHtml . '</div>
                    <div class="difficolta">
                        <span>' . htmlspecialchars($this->getDifficolta()) . '</span>
                    </div>
                </div>
            </div>
        </div></a>';
    }


function drinkProfilo(): string{
        global $pagine;

        $link = htmlspecialchars($pagine['SingoloDrink']);

        return '
        <a href="' . $link . '" class="postDrink">
            <img src="' . htmlspecialchars($this->getImmagine()) . '" alt="' . htmlspecialchars($this->getNome()) . '">
            <p>' . htmlspecialchars($this->getNome()) . '</p>
        </a>';
    }

}