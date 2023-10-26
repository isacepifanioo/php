<?php

    include "backend.php";

?> 

<h1>Ola <? echo $nome;?></h1>
<p>primeiro paragrafo código</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, corporis placeat doloremque ea exercitationem dolorem. Mollitia dolore earum nihil vero ipsam repellat inventore sed quasi. Nesciunt eos suscipit velit fuga.</p>
<p>lista abaixo</p>
<ul>
    <? foreach($listas as $lista): ?>
    <li><?print_r($lista)?></li>
    <? endforeach?>
</ul>