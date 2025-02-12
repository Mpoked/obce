<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav me-auto">
    <a href="<?= base_url("/"); ?>" class="nav-link">Hlavní Stránka</a> </li>
    <?php
    
        foreach($okresy as $okres) {
            echo "<li class='nav-item'>";
            echo "<a class='nav-link' href='".base_url("okres/".$okres->kod)."/perPage/10'>".$okres->nazev."</a>";
            echo "</li>";
                       
        }?>
        <li class="nav-item">
          

    </ul>
  </div>
</nav>