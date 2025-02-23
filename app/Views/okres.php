<?= $this->extend("layout/template") ?>
<?= $this->section("content") ?>
<h1>Seznam obcí v okrese</h1>
<div class="row pt-3">
    <div class="col-6">
        <?php
        $table = new \CodeIgniter\View\Table();
        $table->setHeading("pořadí", "název", "adresní místa");
        

        foreach($obce as $key=>$row) {
            $poradi = ($pager->getCurrentPage()-1)*$perPage+$key+1;
            $table->addRow($poradi, $row->nazev, $row->pocet);
        }

        $template = array(
            'table_open'=> '<table class="table table-bordered">',
            'thead_open'=> '<thead>',
            'thead_close'=> '</thead>',
            'heading_row_start'=> '<tr>',
            'heading_row_end'=>' </tr>',
            'heading_cell_start'=> '<th>',
            'heading_cell_end' => '</th>',
            'tbody_open' => '<tbody>',
            'tbody_close' => '</tbody>',
            'row_start' => '<tr>',
            'row_end'  => '</tr>',
            'cell_start' => '<td>',
            'cell_end' => '</td>',
            'row_alt_start' => '<tr>',
            'row_alt_end' => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end' => '</td>',
            'table_close' => '</table>'
            );
            
        $table->setTemplate($template);

        echo $table->generate();
        ?>
    </div>
</div>

<div class="justify-content-center">
<?= $pager->links(); ?>
<?php echo anchor("okres/".$kod."/perPage/5", "5", ['class' => 'btn btn-primary']); ?>
<?php echo anchor("okres/".$kod."/perPage/10", "10", ['class' => 'btn btn-primary']); ?>
<?php echo anchor("okres/".$kod."/perPage/20", "20", ['class' => 'btn btn-primary']); ?>
<?php echo anchor("okres/".$kod."/perPage/30", "30", ['class' => 'btn btn-primary']); ?>



</div>
</div>
<?= $this->endSection() ?>