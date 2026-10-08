<?php
require_once "Aluno.php";

if (isset($_POST['enviar'])) {

    $nome = ($_POST['nome'] ?? "");
    $idade = (floatval($_POST['idade'] ?? ""));
    $curso = ($_POST['curso'] ?? "");

    $aluno = new Aluno($nome, $idade, $curso);

}


?>

<html>
    <form action="" method="post">
        <input type="text" id="nome" name="nome" placeholder="Digite o nome do aluno" > 
        <br><br>
        <input type="text" id="idade" name="idade" placeholder="Digite a idade do aluno" >  
        <br><br>
        <input type="int" id="curso" name="curso" placeholder="Digite o curso do aluno">  
        <br><br>
        <input type="submit" value="enviar" name="enviar">

        <div class="interface">
            <?php if(isset($_POST['enviar'])):?>
            <h3><?php echo $aluno->apresentar(); ?></h3>
            <?php endif; ?>
        </div>
    </form>

</html>