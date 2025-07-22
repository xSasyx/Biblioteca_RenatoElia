# ITI Renato Elia School Library Project

##  Introduction

This project is a **Web Application** for managing the library of the "ITI Renato Elia" school, developed as a project for the final high school exam (Esame di Maturità). The main objective was to create a functional and robust software system capable of handling user registration, book cataloging, and loan operations.

Although the user interface (UI) was intentionally kept simple and minimal, great emphasis was placed on the **technical and security aspects** of development to ensure a stable and secure application.

***

##  Core Features

The system is divided into two main areas with distinct features: the User Area and the Admin Area.

###  User Features
* **Registration and Login**: Students can create their own account by providing their personal details and an email. The login system authenticates them to access reserved features.
* **Catalog Browse**: Once logged in, the user can view the complete list of books or browse through different literary genres.
* **Book Loans**: A user can borrow an available book. The system implements a key rule: **each user can have a maximum of two books** on loan at the same time.
* **Email Receipt**: When a book is booked, the system is set up to send a **confirmation email** to the user's address, serving as a receipt for the loan (as seen in `booking.php` which includes `email/email.php`).

###  Admin Features
* **Reserved Control Panel**: The administrator has separate and protected access, which redirects them to a dedicated dashboard (`indexadmin.php`).
* **Add Books**: The admin is the only user authorized to enrich the library's catalog. Through a specific form (`addbook.php`), they can add new volumes with full details: title, author, ISBN, publisher, genre, etc..

***

##  Technical Implementation

The application was developed using a classic web stack based on PHP and MySQL.

* **Backend**: **PHP** was used as the server-side scripting language to handle all application logic: database interaction, user authentication, and session management.
* **Database**: **MySQL** is the DBMS of choice for data persistence. The database is structured to contain tables for `users`, `books`, and `booking` (loans). The connection is managed by the `conessione.php` file.
* **Frontend**: The interface is built with **HTML** and **CSS**, kept simple to focus development on the backend functionalities.

***

##  Security: A Fundamental Aspect

Security was a pillar in the project's development. Although no application is 100% secure, several measures have been implemented to protect the system and user data.

### Session Management and Access Control

The most important security mechanism is based on **PHP session management**.
1.  **Secure Login**: Upon login (`index.php`), if the credentials are correct, a unique session is created for the user, and variables such as `$_SESSION['user_id']` and the role (`$_SESSION['admin']`) are stored.
2.  **Page Protection**: Every restricted page (e.g., `booking.php`, `addbook.php`, `indexuser.php`, `indexadmin.php`) includes a control block at the beginning that verifies the existence and validity of the session. If an unauthenticated user or a user with the wrong role attempts to access one of these pages via a direct URL, **they are immediately redirected to the login page**. This mechanism prevents unauthorized access to features and sensitive data.

### Prevention of Common Attacks

* **SQL Injection**: For the most critical operations such as user registration (`signup.php`), login (`index.php`), and adding new books (`add.php`), **Prepared Statements** with `bind_param` have been used. This approach separates data from SQL queries, making the application resistant to SQL Injection attacks in these key areas.
* **Cross-Site Scripting (XSS)**: All data sent by users through forms is processed by the `test_input()` function, which uses `htmlspecialchars()`. This function converts special characters into HTML entities, preventing the injection of malicious scripts into web pages.

### Security Conclusions

The project demonstrates a solid understanding of basic web security principles. The combined use of session-based access control and data sanitization/parameterization techniques provides a robust defense against the most common threats, ensuring a good level of reliability for an application of this type.

------------------------------------------------ITALINO---------------------------------------------------------------------------

# Progetto Biblioteca Scolastica "ITI Renato Elia"

##  Introduzione

Questo progetto è una **Web Application** per la gestione della biblioteca dell'istituto scolastico "ITI Renato Elia", sviluppato come elaborato per l'Esame di Maturità. L'obiettivo principale era la creazione di un sistema software funzionale e robusto, in grado di gestire le operazioni di registrazione utenti, catalogazione dei libri e prestiti.

Sebbene l'interfaccia utente (UI) sia stata mantenuta volutamente semplice e minimale, è stata posta grande enfasi sullo sviluppo del **lato tecnico e della sicurezza**, per garantire un'applicazione stabile e sicura.

***

##  Funzionalità Principali

Il sistema è diviso in due aree principali con funzionalità distinte: l'Area Utente e l'Area Amministratore.

###  Funzionalità Utente
* **Registrazione e Login**: Gli studenti possono creare un proprio account fornendo i dati anagrafici e una email. Il sistema di login li autentica per accedere alle funzionalità riservate.
* **Consultazione Catalogo**: Una volta effettuato l'accesso, l'utente può visualizzare l'elenco completo dei libri o navigare tra i diversi generi letterari.
* **Prestito Libri**: Un utente può prendere in prestito un libro disponibile. Il sistema implementa una regola fondamentale: **ogni utente può avere un massimo di due libri** in prestito contemporaneamente.
* **Ricevuta via Email**: Al momento della prenotazione di un libro, il sistema è predisposto per inviare una **email di conferma** all'indirizzo dell'utente, attestando l'avvenuto prestito (come visibile in `booking.php` che include `email/email.php`).

###  Funzionalità Amministratore
* **Pannello di Controllo Riservato**: L'amministratore ha un accesso separato e protetto, che lo reindirizza a una dashboard dedicata (`indexadmin.php`).
* **Aggiunta Libri**: L'admin è l'unico utente autorizzato ad arricchire il catalogo della biblioteca. Attraverso un apposito modulo (`addbook.php`), può inserire nuovi volumi completi di ogni dettaglio: titolo, autore, ISBN, casa editrice, genere, etc..

***

##  Implementazione Tecnica

L'applicazione è stata sviluppata utilizzando un classico stack web basato su PHP e MySQL.

* **Backend**: **PHP** è stato utilizzato come linguaggio di scripting lato server per gestire tutta la logica applicativa: l'interazione con il database, l'autenticazione degli utenti e la gestione delle sessioni.
* **Database**: **MySQL** è il DBMS scelto per la persistenza dei dati. Il database è strutturato per contenere tabelle relative a `users`, `books` e `booking` (prestiti). La connessione è gestita tramite il file `conessione.php`.
* **Frontend**: L'interfaccia è realizzata con **HTML** e **CSS**, mantenuta semplice per focalizzare lo sviluppo sulle funzionalità del backend.

***

##  Sicurezza: Un Aspetto Fondamentale

La sicurezza è stata un pilastro nello sviluppo del progetto. Sebbene un'applicazione non sia mai sicura al 100%, sono state implementate diverse misure per proteggere il sistema e i dati degli utenti.

### Gestione delle Sessioni e Controllo degli Accessi

Il meccanismo di sicurezza più importante è basato sulla **gestione delle sessioni PHP**.
1.  **Login Sicuro**: Al momento del login (`index.php`), se le credenziali sono corrette, viene creata una sessione univoca per l'utente e vengono memorizzate variabili come `$_SESSION['user_id']` e il ruolo (`$_SESSION['admin']`).
2.  **Protezione delle Pagine**: Ogni pagina riservata (es. `booking.php`, `addbook.php`, `indexuser.php`, `indexadmin.php`) include all'inizio un blocco di controllo che verifica l'esistenza e la validità della sessione. Se un utente non autenticato o con un ruolo non corretto tenta di accedere a una di queste pagine tramite URL diretto, **viene immediatamente reindirizzato alla pagina di login**. Questo meccanismo impedisce l'accesso non autorizzato a funzionalità e dati sensibili.

### Prevenzione da Attacchi Comuni

* **SQL Injection**: Per le operazioni più critiche come la registrazione (`signup.php`), il login (`index.php`) e l'aggiunta di nuovi libri (`add.php`), sono stati utilizzati i **Prepared Statements** con `bind_param`. Questo approccio separa i dati dalle query SQL, rendendo l'applicazione resistente agli attacchi di tipo SQL Injection in queste aree nevralgiche.
* **Cross-Site Scripting (XSS)**: Tutti i dati inviati dagli utenti tramite i moduli vengono processati dalla funzione `test_input()`, che utilizza `htmlspecialchars()`. Questa funzione converte i caratteri speciali in entità HTML, impedendo l'iniezione di script dannosi nelle pagine web.

### Conclusioni sulla Sicurezza

Il progetto dimostra una solida comprensione dei principi di sicurezza web di base. L'uso combinato del controllo degli accessi tramite sessioni e delle tecniche di sanificazione e parametrizzazione dei dati costituisce una robusta difesa contro le minacce più comuni, garantendo un buon livello di affidabilità per un'applicazione di questo tipo.
