<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav me-auto">
    <?php
        foreach($okresy as $okres) {
            echo "<li class='nav-item'>";
            echo "<a class='nav-link' href='".base_url("okres/".$okres->kod)."'>".$okres->nazev."</a>";
            echo "</li>";
                       
        }?>
 
    </ul>
  </div>
</nav>