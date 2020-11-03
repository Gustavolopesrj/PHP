<?php

 $servername = "localhost";
 $username   = "root";
 $password   = "";
 $database   = "fseletrojogos";

 $conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou" .mysqli_connect_error());
}

$sql = "select * from produtos";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($rows = $result->fetch_assoc()){
        echo $rows["categoria"]
?>

<?php
    }
} else {
    echo "Nenhum produto cadastrado!";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - God Games</title>
        <link rel="stylesheet" href="CSS/produtos.css">
        <script src="js/funçoes.js"></script>
    </head>
    <body>
        
        <!-- Início do menu -->
        <?php
        include('menu.html');
        ?>
        <!-- Fim do menu -->

        <br><br>
        <h2>Produtos</h2>
        <hr>
        <br>

                <div class="categorias">
                    <h3>Categorias</h3>
                    <ul>
                        <li onclick="exibir_todos()">Todos (15)</li>
                        <li onclick="exibir_categorias('Ação')">Ação (3)</li>
                        <li onclick="exibir_categorias('Corrida')">Corrida (3)</li>
                        <li onclick="exibir_categorias('Luta')">Luta (3)</li>
                        <li onclick="exibir_categorias('Tiro')">Tiro (3)</li>
                        <li onclick="exibir_categorias('RPG')">RPG (3)</li>
                    </ul>
                </div>
                
                <div class="produtos">
                    <div class="box_produto" id="RPG" style="display: block;">
                    <img src="Imagens/thewitcher3.jpeg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">The Witcher 3 - Wild Hunt</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 200,00</strike></div>
                    <div class="preço">R$ 150,00</div>
                </div>
                </div>
                    <div class="box_produto" id="RPG" style="display: block;">
                    <img src="./Imagens/ffviii.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Final Fantasy VII - Remake</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 180,00</strike></div>
                    <div class="preço">R$ 100,00</div>
                </div>
                </div>
                    <div class="box_produto" id="RPG" style="display: block;">
                    <img src="./Imagens/persona5.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Persona 5</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 120,00</strike></div>
                    <div class="preço">R$ 80,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Tiro" style="display: block;">
                    <img src="./Imagens/wolfenstein.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Wolfenstein 2 - The New Colossus</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 100,00</strike></div>
                    <div class="preço">R$ 50,00</div>
                </div>

                </div>
                    <div class="box_produto" id="Tiro" style="display: block;">
                    <img src="./Imagens/battlefieldv.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Battlefield 5</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 150,00</strike></div>
                    <div class="preço">R$ 120,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Tiro" style="display: block;">
                    <img src="./Imagens/codmw.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Call of Duty - Modern Warfare</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 180,00</strike></div>
                    <div class="preço">R$ 120,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Corrida" style="display: block;">
                    <img src="./Imagens/nfsheat.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Need For Speed - Heat</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 100,00</strike></div>
                    <div class="preço">R$ 70,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Corrida" style="display: block;">
                    <img src="./Imagens/granturismo.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Gran Turismo Sport</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 150,00</strike></div>
                    <div class="preço">R$ 90,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Corrida" style="display: block;">
                    <img src="./Imagens/sonicracing.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Sonic Team Racing</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 90,00</strike></div>
                    <div class="preço">R$ 60,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Ação" style="display: block;">
                    <img src="./Imagens/horizon.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Horizon Zero Dawn - Complete Edition</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 150,00</strike></div>
                    <div class="preço">R$ 90,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Ação" style="display: block;">
                    <img src="./Imagens/gow.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">God of War</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 200,00</strike></div>
                    <div class="preço">R$ 150,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Ação" style="display: block;">
                    <img src="./Imagens/tombraider.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Tomb Raider - Definitive Edition</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 130,00</strike></div>
                    <div class="preço">R$ 80,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Luta" style="display: block;">
                    <img src="./Imagens/injustice2.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Injustice 2 - Legendary Edition</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 140,00</strike></div>
                    <div class="preço">R$ 100,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Luta" style="display: block;">
                    <img src="./Imagens/mkaftermath.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Mortal Kombat 11 - Aftermath</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 200,00</strike></div>
                    <div class="preço">R$ 130,00</div>
                </div>
                </div>
                    <div class="box_produto" id="Luta" style="display: block;">
                    <img src="./Imagens/samurai.jpg" width="200px" onclick="destaque(this)">
                    <br>
                    <div class="descriçao">Samurai Shodown</div>
                    <hr>
                    <div class="descriçao"><strike>R$ 200,00</strike></div>
                    <div class="preço">R$ 150,00</div>
                </div>
        <center>
            <span>
                <p id="formadepagamento"><b>Formas de pagamento:</b></p>
                <img src="Imagens/formadepagamento.jpg">
            </span>
        </center>
        <center>&copy; Todos os direitos reservados.</center>  
    </body>
</html>