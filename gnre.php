<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/public_html/css/StyleGeneri.css" rel="stylesheet">
        <link href="/public_html/css/styleAddb.css" rel="stylesheet">
        
    </head>
    <body>    
    
    <?php include("function/menuuser.html");?>
<main class="page-content">
  
  <div class="card">
    <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Rosa o Romance</h2>
      <p class="copy">L’elemento centrale della trama è una storia d’amore, rigorosamente a lieto fine.</p>
      <button class="btn">View Books</button>
      <input type="hidden" id="Genere" name="genere" value="Romance">
      </form>
    </div>
  </div>
  <div class="card">
    <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Romanzo storico</h2>
      <p class="copy">Nel romanzo storico, invece, le vicende sono inserite in un contesto storico ben preciso e dettagliato.</p>
      <button class="btn">View Books</button>
      <input type="hidden" id="Genere" name="genere" value="Historical Novel">
      </form>
    </div>
  </div>
  <div class="card">
    <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Fantascienza</h2>
      <p class="copy">I romanzi che appartengono a questo genere hanno come elemento centrale una tecnologia, reale o fittizia, con un forte impatto sulla vita dell’uomo. </p>
      <button class="btn">Book Now</button>
      <input type="hidden" id="Genere" name="genere" value="Fantascienza">
      </form>
    </div>
  </div>
  <div class="card">
    <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Fantasy</h2>
      <p class="copy">In questo genere letterario a prevalere sono gli elementi fantastici, non spiegabili razionalmente.</p>
      <button class="btn">Book Now</button>
      <input type="hidden" id="Genere" name="genere" value="Fantasy">
      </form>
    </div> 
  </div>
  <div class="card">
    <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Scienza</h2>
      <p class="copy">Check out all of these gorgeous mountain trips with beautiful views of, you guessed it, the mountains</p>
      <button class="btn">View Trips</button>
      <input type="hidden" id="Genere" name="genere" value="Scienza">
      </form>
    </div>
  </div>
  <div class="card">
    <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Thriller</h2>
      <p class="copy">Tengono sempre il lettore con il fiato sospeso, in uno stato costante di tensione, creata appositamente tramite i procedimenti narrativi del climax e della suspense.</p>
      <button class="btn">View Trips</button>
      <input type="hidden" id="Genere" name="genere" value="Thriller">
      </form>
    </div>
  </div>
  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Young Adult</h2>
      <p class="copy">Si tratta di un genere piuttosto nuovo, o almeno lo è la sua definizione. È dedicato a un pubblico giovane e tratta tematiche come l’amicizia, le relazioni affettive e familiari.</p>
      <button class="btn">Book Now</button>
      <input type="hidden" id="Genere" name="genere" value="Young Adult">
      </form>
    </div>
  </div>
  
  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">New adult</h2>
      <p class="copy">Seriously, straight up, just blast off into outer space today</p>
      <button class="btn">Book Now</button>
      <input type="hidden" id="Genere" name="genere" value="New adult">
      </form>
    </div>
    
  </div>
  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Horror</h2>
      <p class="copy">I romanzi horror sfruttano le paure innate dei lettori per creare una trama terrifica, macabra e coinvolgente.</p>
      <button class="btn">View Trips</button>
      <input type="hidden" id="Genere" name="genere" value="Horror">
      </form>
    </div>
  </div>
  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Giallo</h2>
      <p class="copy">La trama ruota intorno a un crimine e alle indagini che portano alla soluzione del caso.</p>
      <button class="btn">View Trips</button>
      <input type="hidden" id="Genere" name="genere" value="Giallo">
      </form>
    </div>
  </div>
  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Umoristico</h2>
      <p class="copy"> Lo scrittore ha come scopo quello di far ridere il lettore, spesso attraverso la parodia della realtà o la sua enfasi.</p>
      <button class="btn">Book Now</button>
      <input type="hidden" id="Genere" name="genere" value="Umoristico">
      </form>
    </div>
  </div>
  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Avventura e Azione</h2>
      <p class="copy">Come dice già il nome, l’elemento centrale di questo genere è l’azione.</p>
      <button class="btn">Book Now</button>
      <input type="hidden" id="Genere" name="genere" value="Avventura e Azione">
      </form>
    </div>
    
  </div>
  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title"> Romanzo di formazione   </h2>
      <p class="copy">I romanzi di questo genere raccontano la maturazione del protagonista verso l’età adulta.</p>
      <button class="btn">View Trips</button>
      <input type="hidden" id="Genere" name="genere" value="Romanzo di formazione ">
      </form>
    </div>
  </div>

  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Distopia </h2>
      <p class="copy">E' la rappresentazione di una realtà alternativa rispetto a quella attuale </p>
      <button class="btn">View Trips</button>
      <input type="hidden" id="Genere" name="genere" value="Distopia">
      </form>
    </div>
  </div>

  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Biografia e autobiografia</h2>
      <p class="copy">Si tratta di generi in cui il nucleo del romanzo è rappresentato dalla vita del protagonista.</p>
      <button class="btn">Book Now</button>
      <input type="hidden" id="Genere" name="genere" value="Biografia e autobiografia">
      </form>
    </div>
  </div>
  <div class="card">
  <form action="/public_html/function/view.php" method="get">
    <div class="content">
      <h2 class="title">Fumetti/Manga</h2>
      <p class="copy">Il fumetto è un tipo di medium con un proprio linguaggio formato da più codici, costituiti principalmente da immagini e testo che insieme generano la narrazione. </p>
      <button class="btn">Book Now</button>
      <input type="hidden" id="Genere" name="genere" value="Fumetti/Manga">
      </form> 
    </div>
    
  </div>
</main>
<!-- partial -->
  
    </body>
</html>

