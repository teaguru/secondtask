
<h1><?=$cont['title'];?></h1>
<p><?=$cont['content'];?></p>
<p>
    <?php
    require "libs.php";
    $data =$_POST;
    $query = R::findAll('country');
    ?>

<table class="table table-dark" border="1" align="center">
    <tr>
        <td> № </td>
        <td> Название страны </td>
        <td> Столица</td>
            </tr>
    <?php
    foreach($query as $item): ?>

        <tr>
            <td><?=$item['id']?></td>
            <td><?=$item['county_name']?></td>
            <td><?=$item['capital_name']?></td>

            </tr>




    <?php
    endforeach;
    ?>
