
<?php

include_once 'conexao.php';


$querySelect = $link->query("select * from cadastro");
while($registros = $querySelect->fetch_assoc()):
    $id       = $registros['id'];
    $nome     = $registros['nome'];
    $email    = $registros['email'];
    $telefone = $registros['telefone'];
    $cpf      = $registros['cpf'];

    echo "<tr>";
    echo "<td>$nome</td> <td>$email</td> <td>$telefone</td> <td>$cpf</td>";
    echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
    echo "<td><a href='#pergunta' class='modal-trigger'>

    <i class='material-icons'>delete</i></a>

<div class='modal' id='pergunta'>
    <div class='modal-content'>
        <div class='row'>
    <div class='col s12 m12'>
      <div class='card blue-grey darken-1'>
        <div class='card-content white-text'>
          <span class='card-title'>Exclusão de Cadastro</span>
          <p>Você esta prestes a excluir um cadastro, tem certeza ?</p>
        </div>
        <div class='card-action'>
          <a href='bdsql/delete.php?id=$id'>Excluir</a>
          <a href='consultas.php'>Voltar</a>
        </div>
      </div>
    </div>
  </div>  
    </div>  
</div>
    </td>";
    echo "</tr>";
endwhile;
?>