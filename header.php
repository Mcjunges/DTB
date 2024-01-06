<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header DTB</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media-query.css" />
  </head>
  <body onresize="mudouTamanho()">
    <header class="header">
        
      <section class="header-top">         
        <div class="logo">
            <a href="index.php"><img src="img/Backup.png" alt="logo do site"></a>        
        </div>

        <div class="social-icons">
          <a href="https://www.facebook.com/" target="_blank"
            ><img src="img/icon/square-facebook.jpg" alt="icon facebook"
          /></a>
          <a href="https://www.instagram.com/" target="_blank"
            ><img src="img/icon/square-instagram.jpg" alt="icon instagram"
          /></a>
          <a href="https://twitter.com/" target="_blank"
            ><img src="img/icon/square-twitter.jpg" alt="icon twitter"
          /></a>
          <a href="https://www.youtube.com/" target="_blank"
            ><img src="img/icon/square-youtube.jpg" alt="icon youtube"
          /></a>
        </div>
      </section>

      <i id="burguer" class="material-icons" onclick="clickMenu()">menu</i>
      <menu id="itens" class="main-menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="pg02.php">Página 2</a></li>
          <li><a href="pg03.php">Página 3</a></li>
          <li><a href="pg04.php">Página 4</a></li>
          <li><a href="pg05.php">Página 5</a></li>
        </ul>
      </menu>
    </header>

    <!--
    <main>
      <article>
        <h2>Testando Media Queries</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto,
          laborum numquam sapiente dolorum repellat voluptate voluptatum,
          praesentium mollitia doloribus omnis, libero repudiandae accusantium
          natus facilis deserunt velit ut tempora animi. Lorem ipsum dolor sit
          amet consectetur adipisicing elit. Sed quo beatae quae suscipit
          voluptates magni ea culpa cumque deserunt consectetur tempore nostrum
          iusto, dolores corporis. Officia corrupti exercitationem dignissimos
          excepturi.
        </p>

        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque natus
          omnis perferendis ut voluptas? Illo quisquam voluptates accusantium ab
          sequi laborum. Nulla, sit! Perspiciatis cumque accusamus deserunt
          beatae iste accusantium? Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Illum, minus? Quo voluptatem earum mollitia vitae,
          eveniet ipsam. Aliquid maxime corrupti accusamus molestiae, doloremque
          quidem et sit facilis quae animi optio.
        </p>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
          cumque, laboriosam, nemo, mollitia blanditiis culpa aliquid saepe eum
          beatae libero sed? Inventore expedita animi ratione dignissimos est
          accusantium architecto labore! Lorem ipsum dolor, sit amet consectetur
          adipisicing elit. Aliquid quas aspernatur explicabo perspiciatis
          consequuntur earum necessitatibus recusandae, fugit quod, officia
          laudantium commodi reiciendis accusantium impedit quaerat iure dolor
          omnis iste? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Ullam sed, officiis harum consequuntur eos explicabo ut laudantium
          pariatur voluptate ab iste culpa eligendi rem excepturi beatae omnis
          tempora temporibus nulla.
        </p>
      </article>
    </main>
    -->
    
    <script>
      function mudouTamanho() {
        if (window.innerWidth >= 768) {
          itens.style.display = "block";
        } else {
          itens.style.display = "none";
        }
      }

      function clickMenu() {
        if (itens.style.display == "block") {
          itens.style.display = "none";
        } else {
          itens.style.display = "block";
        }
      }
    </script>
  </body>
</html>
