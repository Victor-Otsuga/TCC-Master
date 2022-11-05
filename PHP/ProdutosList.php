<?php
include ('verificarLogin.php');
include ('conexao.php'); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/Menu.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css" >

    <link rel="stylesheet" type="text/css" href="../CSS/montarPedido.css">
    <title>Menu</title>
</head>

<body >

<!-- Funçao do carrinho de compra -->


<div class="car-scn" id="car-aba"  onmouseleave="fechacar()">
    
    <a href="final.php" style="text-decoration: none; color:black;"><div> <img src="../IMG/carrinho.png" class="icones" id="carrinhoPop" > <p class="txt" style="text-align: center; margin-bottom: 20px;">Abrir Venda</p></div></a>    <div class="carpop" >
       
    
        <div class="itemCar" id="cartxt">
            <t>Morango</t>
            <t><button  id="carBtn" onclick="removeqtd()">-</button> <div class="carQtd" id="qtd1"> 1 </div>  <button id="carBtn" onclick="addqtd()">+</button></t>
        </div>

        <div class="itemCar" id="cartxt">
            <t>Morango</t>
            <t><button  id="carBtn" onclick="removeqtd()">-</button> <div class="carQtd" id="qtd1"> 1 </div>  <button id="carBtn" onclick="addqtd()">+</button></t>
        </div>

        <div class="itemCar" id="cartxt">
            <t>Morango</t> 
            <t><button  id="carBtn" onclick="removeqtd()">-</button> <div class="carQtd" id="qtd1"> 1 </div>  <button id="carBtn" onclick="addqtd()">+</button></t>
        </div>

        </div>

        <div>
            <p class="total">Total: R$ 123,00</p>
        </div>
</div>


    <!--Menu Horizontal-->
    <div class="header">

        <a href="grafico.php" class="link">
        <div  class="vendidos">
            <h1 id="titulo">Mais vendidos</h1>
            <img src="../IMG/grafico.png" class="icones" alt="" id="graf">
        </div>
        </a>

        <div id="config">
            <a ><img src="../IMG/carrinho.png" class="icones" onclick="abrecar()" id="carrinho"></a>
            <img src="../IMG/conf.png" class="icones" onclick="abreconf()" id="conf">
        </div>

    </div>
    <!--Conteúdo do Site-->
    <div class="scroll">
        <div class="pesq">
            <h1 id="teste" style="border: 1px solid red;">Lista de Produtos</h1>


            <form action="Menu.php" id="pesf">
                <input type="text" placeholder="" id="pes">
                <button type="submit" id="env" ><img src="../IMG/lupa.png" alt=""></button>
                </form>
    
        </div>


      

      
            <div   style="margin-left: 10%; "  href="pedido.php">
                <table  class="table">
                    <thead>
                      <tr >
                        <th scope="col">ID</th>
                        <th scope="col">Sabor</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Tamanho</th>
                        <th scope="col">Preços</th>
                        <th scope="col">Editar</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th   scope="row">1</th>
                        <td>Morango</td>
                        <td>Massa</td>
                        <td>1L/5L</td>
                        <td>R$10,00</td>
                        <td ><Button class="btn">Editar</Button></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Pamonha</td>
                        <td>Massa</td>
                        <td>1L/5L</td>
                        <td>R$10,00</td>
                        <td ><Button class="btn">Editar</Button></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Chocolate</td>
                        <td>Massa</td>
                        <td>1L/5L</td>
                        <td>R$10,00</td>
                        <td ><Button class="btn">Editar</Button></td>
                      </tr>

                      
                    </tbody>
                  </table>
                </div>
            
            
       
     
           
                <div id="bntliscli">
                        <!-- função novoprod n existe ainda -->
                    <a id="bnt" onclick="novoprod()" href="cadastroproduto.php">  
                        <div > Cadastrar Produto</div>
                    </a>
            
                </div>
    </div>

    <!--Menu Vertical-->
    <div id="menuho">
    <div id="operador">
        <!-- <img  id="icon" alt=""> -->

        <?php 
        
        $avatar = $_SESSION['avatar_session']; 

        echo '<img id="icon" src="'.$avatar.'">';
        
        ?>
            
            <h1 id="nome">Operador: <?php
               
                $nome_oper = $_SESSION['nome_session'];           
                echo $nome_oper ?></h1>

        </div>




        <a class="sidebtn" href="MontarPedido.php"> <img class="imgbtn" src="../IMG/MP.png">
            <div class="MP"> Montar Pedido</div>
        </a>
        <a class="sidebtn" href="historico.php"> <img class="imgbtn" src="../IMG/historico.png">
            <div href="#" class="MP">Histórico de Vendas</div>
        </a>
        <a class="sidebtn" href="Menu.php"> <img class="imgbtn" src="../IMG/casinha.png">
            <div href="#" class="MP">Menu</div><p class="sairadjustment"></p>
        </a>
        <a class="sidebtn" href="listagemcli.php"> <img class="imgbtn" src="../IMG/LC.png">
            <div href="#" class="MP">Lista de
                Clientes</div>
        </a>
        <a class="sidebtn" href="logout.php"> <img class="imgbtn" src="../IMG/EX.png">
            <div href="#" class="MP">Sair</div><p id="sairadjustment"></p>
        </a>
        <img src="../IMG/trevoice.png" class="logo" alt="">

    </div>


    <!-- aba de configurações -->
 
    <div class="config-scn" id="config-aba"  onmouseleave="fechaconf()">
        <div >
            <div id="linksconf" >
                <img src="../IMG/conf.png" >
                
                <a onclick="newPopup()" id="lkc">Editar Usuário</a>
                <a href="Cadastroope.php" id="lkc" class="sidebtn">Cadastrar Operador</a>
                <a href="cadcli.php" id="lkc">Cadastro de Cliente</a>

            </div>
    </div>
</div>
    









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="../JAVASCRIPT/controle.js"></script>
</body>