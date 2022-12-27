<?php

// * Sessão para mensagem do resultado do calculo ao usuário
    if(isset($_SESSION['resultado'])){ ?>
        <div class="alert alert-result">
            <h6 class="msg-title">
                <?php echo $_SESSION['resultado'];?>
            </h6>
        </div> 
<?php unset($_SESSION['resultado']);}


//* Sessão para mensagem de erro ao usuário
if(isset($_SESSION['msg'])){ ?>
    <div class="alert alert-error">
        <h6 class="msg-title">
            <?php echo $_SESSION['msg'];?>
        </h6>
    </div> 
<?php unset($_SESSION['msg']);} ?>