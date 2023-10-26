<?php

    function calcularDesconto($valor, $cat) {

        switch ($cat) {

            case 'eletrônicos';
                // 10%
                $Desc = ($valor * 10) / 100;
                $novoValor = $valor - $Desc;
                echo "seu eletrico ficou por $novoValor";
                break;
            case 'vestuario';
                $Desc = ($valor * 20) / 100;
                $novoValor = $valor - $Desc;
                echo "seu vestuario ficou por $novoValor";
                // 20%
                break;
            case 'alimento';
                $Desc = ($valor * 5) / 100;
                $novoValor = $valor - $Desc;
                echo "seu alimento ficou por $novoValor";
                // 5%
                break;
            default;
                echo "seu produto não tem desconto";
        }


    }

    calcularDesconto(230, 'alimento');

