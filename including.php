<?php
            
            if (isset($_SESSION['uzivatel']) && isset($_SESSION['heslo'])) {
              ?>
              <nav>
    <ul class="horizontal" style="background-color: gold;">
      <div id="rightside">
      <li class="horizontal-item"><a href="vk.php">VOLEBNÍ KALKULAČKA</a></li>
      <li class="horizontal-item"><a href="lubomír.php">VOLNÝ BLOK</a></li>
      <li class="horizontal-item"><a href="contact.php">ODS</a></li>
      <li class="horizontal-item"><a href="babis.php">ANO</a></li>
      <li class="horizontal-item"><a href="tomio.php">SPD</a></li>
    </div>

    <div id="rightside2">
      <li class="horizontal-item active" ><a href="vk.php">KALKULAČKA</a></li>
      <li class="horizontal-item">
        <div  class="horizontal-item dropdown">
          <button class="mainmenubtn">...</button>
        <div  class="horizontal-item dropdown-child">
          <a href="lubomír.php">VOLNÝ BLOK</a>
          <a href="tomio.php">SPD</a>
          <a href="#">ODS</a>
          <a href="babis.php">ANO</a>
        </div>
        </div>
      </li>
    </div>
      

      <li class="horizontal-item" id="posr2">
      <div  class="horizontal-item dropdown">
        <button class="mainmenubtn">
          Přihlášen
        </button>
        <div  class="horizontal-item dropdown-child">
          <a href="logout.php">Odhlásit se</a>
          <a>profil</a>
        </div>
      </div>
      </li>

    </ul>
  </nav>
  <center><h1>POLITIKA ČR</h1></center>

        <div class="left">
          <center>
            <h3 class="first">Reklama</h3>
            <img  
            src="https://i.ytimg.com/vi/GI8_MFweRCc/maxresdefault.jpg">

            <iframe width="100%" src="https://www.youtube.com/embed/rsRx5RDjobw" title="Tomio Okamura: Volební spot SPD" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


            <img  
            src="https://kaufland.media.schwarz/is/image/schwarz/hit-chytra-domacnost-cena-zena-muz-nakupni-tasky-kaufland-potraviny?JGstbGVnYWN5LW9uc2l0ZS00JA==">


            <img  
            src="https://www.betarena.cz/obrazek/5d026956796a9/fortuna---copa-america-s-bonusem-1000-kc_590x250.jpg">


            <img  
            src="https://www.mediaguru.cz/media/4334/pilsnerurquell_2018_ooh.png">


            <img  
            src="https://www.top09.cz/cache/413-0-1622654237--data-home-top09-www-www-files-generated-img-pdf-files-soubory-spolu-dame-cesko-dohromady-volebni-program-2021-koalice-ods-kdu-csl-top-09-2006-pdf-ed86dd5f41452b8eccd28cb00d84936b-w413-h0-m1621430219.jpg"style="width:100%;height:auto;" </>


            <iframe width="100%" src="https://www.youtube.com/embed/dDK5MVuara0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            <iframe width="100%" src="https://www.youtube.com/embed/vgKDMXljy_8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              
            <img src="https://1884403144.rsc.cdn77.org/foto/kostelec-babis-parek/Zml0LWluLzk5OXg5OTkvZmlsdGVyczpxdWFsaXR5KDg1KTpub191cHNjYWxlKCkvaW1n/3150211.jpg?v=0&st=3tBfjq8sQlM9fPGNsswY-kyKZL4FD-KA8H_pDPiQDgU&ts=1600812000&e=0">

            <img src="https://i.ytimg.com/vi/k_oKu9V3g0o/maxresdefault.jpg">

            <iframe width="100%" src="https://www.youtube.com/embed/tI-P0tWhsEI" title="Jiří Hynek - prezidentský spot" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </center>
        </div>


<?php
            } else {
              ?>
              <nav>
    <ul class="horizontal">
      <div id="rightside">
      <li class="horizontal-item"><a href="vk.php">VOLEBNÍ KALKULAČKA</a></li>
      <li class="horizontal-item"><a href="lubomír.php">VOLNÝ BLOK</a></li>
      <li class="horizontal-item"><a href="contact.php">ODS</a></li>
      <li class="horizontal-item"><a href="babis.php">ANO</a></li>
      <li class="horizontal-item"><a href="tomio.php">SPD</a></li>
    </div>

    <div id="rightside2">
      <li class="horizontal-item active" ><a href="vk.php">KALKULAČKA</a></li>
      <li class="horizontal-item">
        <div  class="horizontal-item dropdown">
          <button class="mainmenubtn">...</button>
        <div  class="horizontal-item dropdown-child">
          <a href="lubomír.php">VOLNÝ BLOK</a>
          <a href="tomio.php">SPD</a>
          <a href="#">ODS</a>
          <a href="babis.php">ANO</a>
        </div>
        </div>
      </li>
    </div>
      <li class="horizontal-item" id="posr2">
      <div  class="horizontal-item dropdown">
        <button class="mainmenubtn">ÚČET</button>
        <div  class="horizontal-item dropdown-child">
          <a href="prihlaseni.php">Přihlášení</a>
          <a href="login.php">registrace</a>
          <a>VIP</a>
        </div>
      </div>
      </li>

    


    </ul>
  </nav>
  <center><h1>POLITIKA ČR</h1></center>

        <div class="left">
          <center>
            <h3 class="first">Reklama</h3>
            <img  
            src="https://i.ytimg.com/vi/GI8_MFweRCc/maxresdefault.jpg">

            <iframe width="100%" src="https://www.youtube.com/embed/rsRx5RDjobw" title="Tomio Okamura: Volební spot SPD" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


            <img  
            src="https://kaufland.media.schwarz/is/image/schwarz/hit-chytra-domacnost-cena-zena-muz-nakupni-tasky-kaufland-potraviny?JGstbGVnYWN5LW9uc2l0ZS00JA==">


            <img  
            src="https://www.betarena.cz/obrazek/5d026956796a9/fortuna---copa-america-s-bonusem-1000-kc_590x250.jpg">


            <img  
            src="https://www.mediaguru.cz/media/4334/pilsnerurquell_2018_ooh.png">


            <img  
            src="https://www.top09.cz/cache/413-0-1622654237--data-home-top09-www-www-files-generated-img-pdf-files-soubory-spolu-dame-cesko-dohromady-volebni-program-2021-koalice-ods-kdu-csl-top-09-2006-pdf-ed86dd5f41452b8eccd28cb00d84936b-w413-h0-m1621430219.jpg"style="width:100%;height:auto;" </>


            <iframe width="100%" src="https://www.youtube.com/embed/dDK5MVuara0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            <iframe width="100%" src="https://www.youtube.com/embed/vgKDMXljy_8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              
            <img src="https://1884403144.rsc.cdn77.org/foto/kostelec-babis-parek/Zml0LWluLzk5OXg5OTkvZmlsdGVyczpxdWFsaXR5KDg1KTpub191cHNjYWxlKCkvaW1n/3150211.jpg?v=0&st=3tBfjq8sQlM9fPGNsswY-kyKZL4FD-KA8H_pDPiQDgU&ts=1600812000&e=0">

            <img src="https://i.ytimg.com/vi/k_oKu9V3g0o/maxresdefault.jpg">

            <iframe width="100%" src="https://www.youtube.com/embed/tI-P0tWhsEI" title="Jiří Hynek - prezidentský spot" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </center>
        </div>
            <?php 
            }
?>


          





        

       
