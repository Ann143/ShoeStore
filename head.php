<div class="bs-example">
    <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
<?php
    $counter = 1;
    while($row = mysql_fetch_array($result)){
?>
            <div class="item<?php if($counter <= 1){echo " active"; } ?>">
                <a href="">
                    <img data-src="holder.js/900x800/auto/#777:#777" style="height: 400px; width: 400px;" alt="First slide image" src="<?php echo $row['MachineImagePath'] ?>"/>
                    <img data-src="holder.js/900x800/auto/#777:#777" style="height: 400px; width: 400px;" alt="First slide image" src="<?php echo $row['MachineImagePath'] ?>"/>
                    <img data-src="holder.js/900x800/auto/#777:#777" style="height: 400px; width: 400px;" alt="First slide image" src="<?php echo $row['MachineImagePath'] ?>"/>
                </a>
                <div class="finlay-carousel-caption">
                    <h3><?php echo $row['MachineName']?></h3>
                    <p>Click the link above for more details about <?php echo $row['MachineName']>; ?></p>
                </div>
            </div>
<?php
    $counter++;
    }
    mysql_close($connection);
?>

        <ol class="carousel-indicators">
           <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
           <li data-target="#carousel-example-captions" data-slide-to="1"></li>
           <li data-target="#carousel-example-captions" data-slide-to="2"></li>
        </ol>
    </div>
</div>