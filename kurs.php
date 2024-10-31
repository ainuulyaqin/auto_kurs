<?php 
include('lib/kurs.php');
?>
<style>
table {
  width: 100%;
  table-layout: fixed;
  border-collapse: collapse;
}
/* see me */
td {
  border: 1px solid #ddd;
}

</style>
<table class="table table-bordered" id="table_suku_bunga">
    <tbody>
    <?php 
        $row = "SAR,SGD,MYR,USD,JPY,EUR,CNY";
        $row_value = explode(',' ,$row);
        //echo count($row_value);	
        $hitung_row = count($row_value);	
        for ($j=0;$j<$hitung_row;$j++){  
        ?>
        <tr>
            <td rowspan="2"><strong>VALAS</strong>
            </td>
                <?php 
                $string = $row_value[$j];
                $layer_value = explode(',' ,$string);
                $hitung = count($layer_value);	
                for ($i=0;$i<$hitung;$i++){  
                ?>
            <td>
            <strong><?php echo $layer_value[$i]; ?></strong>
            </td>
            <?php }  ?>
        </tr>
        <tr>
            <?php 
            $string = $row_value[$j];
            $layer_value = explode(',' ,$string);
            $hitung = count($layer_value);	
            for ($i=0;$i<$hitung;$i++){  
            ?>
            <td>
            <strong><?php 
                $jml_rupiah = getRupiah($layer_value[$i]); 
                echo $jml_rupiah; 
                ?></strong>
            </td>
            <?php }  ?>
        </tr>
        <tr>
            <td><strong>Jual</strong>
            </td>
                <?php 
                $string = $row_value[$j];
                $layer_value = explode(',' ,$string);
                $hitung = count($layer_value);	
                for ($i=0;$i<$hitung;$i++){  
                ?>
            <td>
            <strong><?php 
                $jml_beli = getKursBeli($layer_value[$i]); 
                echo $jml_beli; 
                ?></strong>
            </td>
            <?php }  ?>
        </tr>
        <tr>
            <td><strong>Beli</strong>
            </td>
            <?php 
                $string = $row_value[$j];
                $layer_value = explode(',' ,$string);
                $hitung = count($layer_value);	
                for ($i=0;$i<$hitung;$i++){  
                ?>
            <td>
            <strong><?php 
                $jml_jual = getKursJual($layer_value[$i]);
                echo $jml_jual; ?></strong>
            </td>
            <?php }  ?>
        </tr>
        <?php $i++;}  ?>
    </tbody>
</table>