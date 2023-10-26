<?php

    $lista = ["Carro" => 70000, "Carteira" => 50, "Sofa" => 1000];

    function preçoProduto($arr) {

        $nomeList = ["Carro","Carteira","Sofa"];

        for ($i = 0; $i < count($nomeList); $i++) {

            if ($arr[$nomeList[$i]] > 10) {
                
                echo $nomeList[$i] . ' custa  R$' . $arr[$nomeList[$i]] . '<br>';

            }
        }


    }

    $resu = preçoProduto($lista);
    echo $resu;

    // caso eu não saiba fazer isso olha a aula 158.

    function produto($prod) {

        $arrCaros = [];

        foreach ($prod as $produto => $caros) {

            if ($caros > 10 ) {
                array_push($arrCaros, $produto);
            }

        }

        return $arrCaros;

    }

    $va = produto($lista);

    print_r($va);

    print