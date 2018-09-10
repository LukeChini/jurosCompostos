<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




     <div class="form">
     <form action="jurosteste.php" method="post">
     <table>
     <tr>
     <td>Insira valor final desejado:</td><td><input type="number" name="valor_final"  ></input></td>
     </tr>
     <tr>
     <td>Insira idade inicial:</td><td><input type="number" name="idade_inicial" ></input></td>
     </tr>
     <tr>
     <td>Insira idade final:</td><td><input type="number" name="idade_final" ></input></td>
     </tr>
     <tr>
     <td>Taxa de juros ao ano (%):</td><td><input type="number" name="taxa_ano" min='1' ></input><td>
     <input type="submit" name="enviar" value="Calcular">
     </tr>
     </table>
     </form>
     </div>

     <?php
 // number_format($num, 2, ',', '.')

      $cor_coluna_grafico = 'rgb(0,162,232)';
      $tag_fechamento_ini = '/*';
      $tag_fechamento_fin = '*/';

      $valor_final = $_POST['valor_final']+1-1;
      $idade_inicial =$_POST['idade_inicial']+1-1;
      $idade_final = $_POST['idade_final']+1-1;
      $taxa_ano = $_POST['taxa_ano']/100+1-1;

      $taxa_mes =  pow(($taxa_ano+1),(1/12))-1;
      $taxa_mes_mais1 = ($taxa_mes) + 1;
      $diferenca_idade = $idade_final - $idade_inicial;

      if ($diferenca_idade < 10)
      {
        $diferenca_idade = $diferenca_idade;
      }
      else
      {
        $diferenca_idade = 10;
      }

      echo '<hr />';
      echo "Abaixo o quanto você deve poupar ao mês para ter o valor final desejado: ";
      echo '<br />';
      echo '<br />';
      echo "Valor final desejado: ".number_format($valor_final, 2, ',', '.').'<br />';
      echo "Idade final: ".$idade_final.'<br />';
      echo "Taxa de juros ao ano: ".$taxa_ano*100 .'% <br />';
      echo '<hr />';

      $ano_intervalo = floor(($idade_final - $idade_inicial) / 10);

      $mes_poupando10 = ($idade_final - $idade_inicial)*12;

      if ($diferenca_idade<1)
          {$mes_poupando9 = 0;}
          elseif($ano_intervalo<1){$mes_poupando9 = ($diferenca_idade-1)*12;}
      else{$mes_poupando9 = (($idade_final -(1*$ano_intervalo)) - $idade_inicial)*12;}

      if ($diferenca_idade<2)
          {$mes_poupando8 = 0;}
          elseif($ano_intervalo<1){$mes_poupando8 = ($diferenca_idade-2)*12;}
      else{$mes_poupando8 = (($idade_final -(2*$ano_intervalo)) - $idade_inicial)*12;}

      if ($diferenca_idade<3)
          {$mes_poupando7 = 0;}
          elseif($ano_intervalo<1){$mes_poupando7 = ($diferenca_idade-3)*12;}
      else{$mes_poupando7 = (($idade_final -(3*$ano_intervalo)) - $idade_inicial)*12;}

      if ($diferenca_idade<4)
          {$mes_poupando6 = 0;}
          elseif($ano_intervalo<1){$mes_poupando6 = ($diferenca_idade-4)*12;}
      else{$mes_poupando6 = (($idade_final -(4*$ano_intervalo)) - $idade_inicial)*12;}

      if ($diferenca_idade<5)
          {$mes_poupando5 = 0;}
          elseif($ano_intervalo<1){$mes_poupando5 = ($diferenca_idade-5)*12;}
      else{$mes_poupando5 = (($idade_final -(5*$ano_intervalo)) - $idade_inicial)*12;}

      if ($diferenca_idade<6)
          {$mes_poupando4 = 0;}
          elseif($ano_intervalo<1){$mes_poupando4 = ($diferenca_idade-6)*12;}
      else{$mes_poupando4 = (($idade_final -(6*$ano_intervalo)) - $idade_inicial)*12;}

      if ($diferenca_idade<7)
          {$mes_poupando3 = 0;}
          elseif($ano_intervalo<1){$mes_poupando3 = ($diferenca_idade-7)*12;}
      else{$mes_poupando3 = (($idade_final -(7*$ano_intervalo)) - $idade_inicial)*12;}

      if ($diferenca_idade<8)
          {$mes_poupando2 = 0;}
          elseif($ano_intervalo<1){$mes_poupando2 = ($diferenca_idade-8)*12;}
      else{$mes_poupando2 = (($idade_final -(8*$ano_intervalo)) - $idade_inicial)*12;}

      if ($diferenca_idade<9)
          {$mes_poupando1 = 0;}
          elseif($ano_intervalo<1){$mes_poupando1 = ($diferenca_idade-9)*12;}
      else{$mes_poupando1 = (($idade_final -(9*$ano_intervalo)) - $idade_inicial)*12;}


      if ($diferenca_idade >= 9)
          {$idade_inicial1 = $idade_inicial + (0*$ano_intervalo);}
      else{$idade_inicial1 = $idade_inicial + (0);}

      if ($diferenca_idade >= 9)
          {$idade_inicial2 = $idade_inicial + (1*$ano_intervalo);}
      else{$idade_inicial2 = $idade_inicial + (1);}

      if ($diferenca_idade >= 9)
          {$idade_inicial3 = $idade_inicial + (2*$ano_intervalo);}
      else{$idade_inicial3 = $idade_inicial + (2);}

      if ($diferenca_idade >= 9)
          {$idade_inicial4 = $idade_inicial + (3*$ano_intervalo);}
      else{$idade_inicial4 = $idade_inicial + (3);}

      if ($diferenca_idade >= 9)
          {$idade_inicial5 = $idade_inicial + (4*$ano_intervalo);}
      else{$idade_inicial5 = $idade_inicial + (4);}

      if ($diferenca_idade >= 9)
          {$idade_inicial6 = $idade_inicial + (5*$ano_intervalo);}
      else{$idade_inicial6 = $idade_inicial + (5);}

      if ($diferenca_idade >= 9)
          {$idade_inicial7 = $idade_inicial + (6*$ano_intervalo);}
      else{$idade_inicial7 = $idade_inicial + (6);}

      if ($diferenca_idade >= 9)
          {$idade_inicial8 = $idade_inicial + (7*$ano_intervalo);}
      else{$idade_inicial8 = $idade_inicial + (7);}

      if ($diferenca_idade >= 9)
          {$idade_inicial9 = $idade_inicial + (8*$ano_intervalo);}
      else{$idade_inicial9 = $idade_inicial + (8);}

      if ($diferenca_idade >= 9)
          {$idade_inicial10 = $idade_inicial + (9*$ano_intervalo);}
      else{$idade_inicial10= $idade_inicial + (9);}






      $crm_10 = ((pow(($taxa_mes_mais1),$mes_poupando10)) -1)/($taxa_mes);
      $crm_9 = ((pow(($taxa_mes_mais1),$mes_poupando9)) -1)/($taxa_mes);
      $crm_8 = ((pow(($taxa_mes_mais1),$mes_poupando8)) -1)/($taxa_mes);
      $crm_7 = ((pow(($taxa_mes_mais1),$mes_poupando7)) -1)/($taxa_mes);
      $crm_6 = ((pow(($taxa_mes_mais1),$mes_poupando6)) -1)/($taxa_mes);
      $crm_5 = ((pow(($taxa_mes_mais1),$mes_poupando5)) -1)/($taxa_mes);
      $crm_4 = ((pow(($taxa_mes_mais1),$mes_poupando4)) -1)/($taxa_mes);
      $crm_3 = ((pow(($taxa_mes_mais1),$mes_poupando3)) -1)/($taxa_mes);
      $crm_2 = ((pow(($taxa_mes_mais1),$mes_poupando2)) -1)/($taxa_mes);
      $crm_1 = ((pow(($taxa_mes_mais1),$mes_poupando1)) -1)/($taxa_mes);

      if($crm_10==0){$crm_10=1;}
      if($crm_9==0){$crm_9=1;}
      if($crm_8==0){$crm_8=1;}
      if($crm_7==0){$crm_7=1;}
      if($crm_6==0){$crm_6=1;}
      if($crm_5==0){$crm_5=1;}
      if($crm_4==0){$crm_4=1;}
      if($crm_3==0){$crm_3=1;}
      if($crm_2==0){$crm_2=1;}
      if($crm_1==0){$crm_1=1;}


      $valor_ano10 = $valor_final/$crm_10;
      $valor_ano9 = $valor_final/$crm_9;
      $valor_ano8 = $valor_final/$crm_8;
      $valor_ano7 = $valor_final/$crm_7;
      $valor_ano6 = $valor_final/$crm_6;
      $valor_ano5 = $valor_final/$crm_5;
      $valor_ano4 = $valor_final/$crm_4;
      $valor_ano3 = $valor_final/$crm_3;
      $valor_ano2 = $valor_final/$crm_2;
      $valor_ano1 = $valor_final/$crm_1;

      if($crm_10==1){$valor_ano10=0;}
      if($crm_9==1){$valor_ano9=0;}
      if($crm_8==1){$valor_ano8=0;}
      if($crm_7==1){$valor_ano7=0;}
      if($crm_6==1){$valor_ano6=0;}
      if($crm_5==1){$valor_ano5=0;}
      if($crm_4==1){$valor_ano4=0;}
      if($crm_3==1){$valor_ano3=0;}
      if($crm_2==1){$valor_ano2=0;}
      if($crm_1==1){$valor_ano1=0;}



      $valor_ano_maior = max(array($valor_ano1,$valor_ano2,$valor_ano3,$valor_ano4,$valor_ano5,$valor_ano6,$valor_ano7,$valor_ano8,$valor_ano9,$valor_ano10));


      $percentual_coluna_grafico1 = ($valor_ano1/$valor_ano_maior)*100;
      $percentual_coluna_grafico2 = ($valor_ano2/$valor_ano_maior)*100;
      $percentual_coluna_grafico3 = ($valor_ano3/$valor_ano_maior)*100;
      $percentual_coluna_grafico4 = ($valor_ano4/$valor_ano_maior)*100;
      $percentual_coluna_grafico5 = ($valor_ano5/$valor_ano_maior)*100;
      $percentual_coluna_grafico6 = ($valor_ano6/$valor_ano_maior)*100;
      $percentual_coluna_grafico7 = ($valor_ano7/$valor_ano_maior)*100;
      $percentual_coluna_grafico8 = ($valor_ano8/$valor_ano_maior)*100;
      $percentual_coluna_grafico9 = ($valor_ano9/$valor_ano_maior)*100;
      $percentual_coluna_grafico10 = ($valor_ano10/$valor_ano_maior)*100;




      echo $idade_inicial1.' - R$ '.number_format($valor_ano10, 2, ',', '.').'/mês<br/>';
      echo $idade_inicial2.' - R$ '.number_format($valor_ano9, 2, ',', '.').'/mês<br/>';
      echo $idade_inicial3.' - R$ '.number_format($valor_ano8, 2, ',', '.').'/mês<br/>';
      echo $idade_inicial4.' - R$ '.number_format($valor_ano7, 2, ',', '.').'/mês<br/>';
      echo $idade_inicial5.' - R$ '.number_format($valor_ano6, 2, ',', '.').'/mês<br/>';
      echo $idade_inicial6.' - R$ '.number_format($valor_ano5, 2, ',', '.').'/mês<br/>';
      echo $idade_inicial7.' - R$ '.number_format($valor_ano4, 2, ',', '.').'/mês<br/>';
      echo $idade_inicial8.' - R$ '.number_format($valor_ano3, 2, ',', '.').'/mês<br/>';
      echo $idade_inicial9.' - R$ '.number_format($valor_ano2, 2, ',', '.').'/mês<br/>';
      echo $idade_inicial10.' - R$ '.number_format($valor_ano1, 2, ',', '.').'/mês<br/>';

      echo '<hr />';





      ?>

      <style>

      .conteiner
      {
        width: 100%;
      }

      .grafico
      {
        width: 90%;
        height: 400px;
        background-color: rgb(243,243,243);
        margin: 0 auto;
        transform: rotate(180deg);
        /* display: none; */
      }

      .ano_1
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico1 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;


      }

      .ano_2
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico2 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;
      }


      .ano_3
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico3 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;
      }


      .ano_4
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico4 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;
      }

      .ano_5
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico5 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;
      }


      .ano_6
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico6 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;
      }


      .ano_7
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico7 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;
      }


      .ano_8
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico8 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;
      }


      .ano_9
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico9 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;
      }


      .ano_10
      {
        width: 4%;
        height: <?php echo $percentual_coluna_grafico10 ?>%;
        background-color: <?php echo $cor_coluna_grafico ?>;
        margin-left: 3%;
        margin-right: 3%;
        float: left;
      }




      </style>

      <div class="conteiner">


      <div class="grafico">
      <div class="ano_1"></div>
      <div class="ano_2"></div>
      <div class="ano_3"></div>
      <div class="ano_4"></div>
      <div class="ano_5"></div>
      <div class="ano_6"></div>
      <div class="ano_7"></div>
      <div class="ano_8"></div>
      <div class="ano_9"></div>
      <div class="ano_10"></div>
      </div>

      </div>


  </body>
</html>
