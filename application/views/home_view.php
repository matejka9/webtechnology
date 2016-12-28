<link href="<?= base_url()?>assets/css/style-home-low.css" rel="stylesheet" media="only screen and (max-width: 500px)">
<link href="<?= base_url()?>assets/css/style-home-medium.css" rel="stylesheet" media="only screen and (min-width: 501px) and (max-width: 1000px)">
<link href="<?= base_url()?>assets/css/style-home-big.css" rel="stylesheet" media="only screen and (min-width: 1001px)">


<script type="text/javascript">
$(function(){
   $(".nav").find(".active").removeClass("active");
   $("#home").parent().addClass("active");
});
</script>

<h1>Domov</h1>

<article class="home_page">
  <h3>Vitajte na stránkach reštaurácie Tutorial 3 2016 </h3>
  <p>Tešíme sa z Vašeho záujmu a očakávame Vás v našich priestoroch kde Vás obslúži náš profesionálny tým a jedľa Vám budú pripravované pod osobným dozorom svetoznámeho šéfkuchára Dušana Zagyho.</p>
  <p>V reštaurácií Tutorial 3 2016 používame iba ingrediencie najväčšej kvality a čerstvosti na zostrojenie Vašeho perfektného jedla. V prípade záujmu pozrite si naše denné menu a pokiaľ Vás naša ponuka zaujme, môžete si rovno zarezervovať stôl z pohodlia Vášho domova na pár klikov.</p>
  <p>Ak si prídete sadnúť len kvôli nápojom, nebudeme Vás súdiť - naopak sme hrdý na náš výber kokteilov , vín, pív, či džúsov podľa Vášho výberu</p>
 </article>

 <div class="round-div button button-nav box reservbut" onclick="window.location.href='/webtechnology/index.php/reservation'"  id="back">  
      <span>
          Rezervácia
      </span>
</div>

<article class="home_page">
  <h2>Spokojní zákazníci</h2>
  
  <section>
    <figure class='centerer space'>
  	 <img class="centerer food_picture img-responsive" src="<?= base_url()?>assets/images/businessman.jpg" alt="podnikatel">
     <figcaption class='centerer'>
        Zákaznik: Podnikateľ Jožo
      </figcaption>
    </figure>
    <p class='space'>
      Podnikateľ Jožo je naším každodenným zákaznikom už od otvorenia. Vídame ho tu pravidelne od pondelka do piatku počas našich obedových hodín. Naša reštaurácia sa nachádza v centre mesta a denne nás navštevujú podnikatelia, ktorým ponúkame rýchlu a zdravú alternatívu fastfood-ových reštarácii. 
    </p>
    <p class='cit centerer'>
      <q>Pokým som nepoznal reštauráciu Tutorial 3 2016, moje stravovacie náviky boli veľmi nezdravé. Vďaka ich jednoduchej a rýchlej rezervácii dostanem kvalitné jedlo bez čakania.</q>
    </p>
  </section>

  <section>
    <figure class='centerer space'>
      <img class="centerer food_picture img-responsive" src="<?= base_url()?>assets/images/vegangirl.jpg" alt="veganka">
      <figcaption class='centerer'>
        Zákaznik: Vegánka Janka
      </figcaption>
    </figure>
    <p class='space'>
      Naša reštaurácia uľahodí aj najkomplikovanejším stravovacím požiadavkám naších zákaznikov. Denne ponúkame štyri možnosti obedového menu, z ktorého aspoň jedna vyhovuje aj vegánskym zákaznikom.
    </p>
    <p class='cit centerer'>
      <q>Moja životná voľba mi prináša časté problémi pri stravovaní. Reštauráciu Tutorial 3 2016 je ako darom z nebies. Každý deň ponúkajú vegánsku alternatívu obeda.</q>
    </p>
  </section>
</article>

