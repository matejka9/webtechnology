
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="home">Reštaurácia Tutorial 3 2016</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><?= anchor('home','Domov', 'id="home" class="active"') ?></li>
        <li><?= anchor('about','O nás', 'id="about"') ?></li>
        <li><?= anchor('menu','Denné menu', 'id="menu"') ?></li>
        <li><?= anchor('reservation','Rezervácia', 'id="reservation"') ?></li>
        <li><?= anchor('contact','Kontakt', 'id="contact"') ?></li>
      </ul>
    </div>
  </div>
</nav>