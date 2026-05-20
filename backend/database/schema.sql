/*Gestione account e profili.*/
CREATE TABLE utenti (
    id SERIAL PRIMARY KEY,

    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,

    nome VARCHAR(50),
    cognome VARCHAR(50),

    bio TEXT,

    immagine_profilo TEXT,

    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/*Post o ricette drink.*/
CREATE TABLE drink (
    id SERIAL PRIMARY KEY,

    utente_id INTEGER NOT NULL,

    nome VARCHAR(100) NOT NULL,

    descrizione TEXT,

    ingredienti TEXT,

    preparazione TEXT,

    immagine TEXT,

    categoria VARCHAR(50),

    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_drink_utente
        FOREIGN KEY (utente_id)
        REFERENCES utenti(id)
        ON DELETE CASCADE
);


/*Commenti ai drink.*/
CREATE TABLE commenti (
    id SERIAL PRIMARY KEY,

    drink_id INTEGER NOT NULL,
    utente_id INTEGER NOT NULL,

    testo TEXT NOT NULL,

    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_commento_drink
        FOREIGN KEY (drink_id)
        REFERENCES drink(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_commento_utente
        FOREIGN KEY (utente_id)
        REFERENCES utenti(id)
        ON DELETE CASCADE
);

/*Like ai drink.*/

CREATE TABLE likes (
    id SERIAL PRIMARY KEY,

    utente_id INTEGER NOT NULL,
    drink_id INTEGER NOT NULL,

    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_like_utente
        FOREIGN KEY (utente_id)
        REFERENCES utenti(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_like_drink
        FOREIGN KEY (drink_id)
        REFERENCES drink(id)
        ON DELETE CASCADE
);


/*Drink salvati/favoriti.*/
CREATE TABLE salvati (
    id SERIAL PRIMARY KEY,

    utente_id INTEGER NOT NULL,
    drink_id INTEGER NOT NULL,

    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_salvati_utente
        FOREIGN KEY (utente_id)
        REFERENCES utenti(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_salvati_drink
        FOREIGN KEY (drink_id)
        REFERENCES drink(id)
        ON DELETE CASCADE
);

/*Sistema follow utenti.*/
CREATE TABLE followers (
    id SERIAL PRIMARY KEY,

    follower_id INTEGER NOT NULL,
    seguito_id INTEGER NOT NULL,

    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_follower
        FOREIGN KEY (follower_id)
        REFERENCES utenti(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_seguito
        FOREIGN KEY (seguito_id)
        REFERENCES utenti(id)
        ON DELETE CASCADE
);

/*Challenge del sito.*/
CREATE TABLE sfide (
    id SERIAL PRIMARY KEY,

    titolo VARCHAR(100) NOT NULL,

    descrizione TEXT,

    immagine TEXT,

    data_inizio DATE,

    data_fine DATE,

    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/*Drink partecipanti alle challenge.*/
CREATE TABLE partecipazioni_sfide (
    id SERIAL PRIMARY KEY,

    sfida_id INTEGER NOT NULL,
    drink_id INTEGER NOT NULL,
    utente_id INTEGER NOT NULL,

    data_creazione TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    CONSTRAINT fk_sfida
        FOREIGN KEY (sfida_id)
        REFERENCES sfide(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_drink_sfida
        FOREIGN KEY (drink_id)
        REFERENCES drink(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_utente_sfida
        FOREIGN KEY (utente_id)
        REFERENCES utenti(id)
        ON DELETE CASCADE
);

/*Categorie/tag drink.*/
CREATE TABLE tags (
    id SERIAL PRIMARY KEY,

    nome VARCHAR(50) UNIQUE NOT NULL
);


/*Relazione drink-tag.*/
CREATE TABLE drink_tags (
    id SERIAL PRIMARY KEY,

    drink_id INTEGER NOT NULL,
    tag_id INTEGER NOT NULL,

    CONSTRAINT fk_tag_drink
        FOREIGN KEY (drink_id)
        REFERENCES drink(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_tag
        FOREIGN KEY (tag_id)
        REFERENCES tags(id)
        ON DELETE CASCADE
);