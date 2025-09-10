<?php

require_once './config.php';


$message = '';
$message_type = '';

$ok = "";
$error = ""; 


if(isset($_GET['delete'])){

    $user = (int) $_GET['delete']; 

    $sql = "DELETE FROM usuarios WHERE usuario = $user"; 
    $res = pg_query($con, $sql);

    if(strlen(pg_last_error($con))>0){
        $error = "Falha ao deletar usuário"; 
    }else{
        $ok = "Usuário excluído com sucesso.";
    }
}

$sql = "SELECT * from usuarios ";
$res = pg_query($con, $sql);



?>

<?php if ($message): ?>
    <div class="alert alert-<?php echo $message_type; ?>">
        <?php echo $message; ?>
    </div>
<?php endif; ?>

<div class="row justify-content-center">
    <div class="col-md-12 col-lg-10 col-xl-9">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                
                <div class="text-center mb-4">
                    <i class="bi bi-person-plus-fill" style="font-size: 3rem;"></i>
                    <h3 class="card-title mt-2">Usuários Cadastrados</h3>
                </div>
                     <div>
                    <?= $error . $ok ?>
                </div>
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ativo</th>
                    <th scope="col" colspan=2>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($a=0; $a<pg_num_rows($res); $a++){ 
                        $user  =  pg_fetch_result($res, $a, 'usuario');
                        $name  =  pg_fetch_result($res, $a, 'nome');
                        $email  =  pg_fetch_result($res, $a, 'email');
                        $ativo  =  pg_fetch_result($res, $a, 'ativo');    
                    ?>
                        <tr>
                            <td>2</td>
                            <td><?=$name?></td>
                            <td><?=$email?></td>
                            <td><?= ($ativo == true) ? "Sim" : "Não";  ?></td>
                            <td>
                                <a href="?page=cadastro&edit=<?=$user?>"><i class="bi bi-pencil-fill"></i></a>
                            </td>
                            <td>
                                
                                <a href="#" onclick="if(confirm('Confirmar excluir o usuário <?=$name?>?')){ window.location='?page=lista_usuario&delete=<?=$user?>'; } return false;"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
                </table>

                <hr class="my-4">

                <div class="text-center">
                    <p class="text-muted small">Já tem uma conta? <a href="index.php?page=login">Entre aqui</a></p>
                </div>

            </div>
        </div>
    </div>
</div>