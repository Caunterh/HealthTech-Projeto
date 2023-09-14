<?php
include_once('layout/head.php');
//é preciso colocar a validação do cargo e a mensagem de alerta login ou senha erradas deveria aparecer nessa pagina, mas está em processamentoLogin.php
?>

<body class="login bg-light">

    <div class="wrapper">
        <div class="form-box">
            <div class="form-box login">
                <div class="login-page bg-dark shadow rounded">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-14 offset-lg-1">
                                <div class="bg-light shadow rounded">
                                    <div class="row">
                                        <div class="col-md-7 pe-0">
                                            <div class="form-left h-100 py-5 px-5">
                                                <h2 class="mb-3">ENTRAR</h2>
                                                <form class="row g-4" action="<?= $BASE_URL ?>/../config/processamentoLogin.php" method="POST">

                                                    <div class="col-12">
                                                        <label>email<span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><ion-icon name="person"></ion-icon></div>
                                                            <input class="form-control" type="text" name="email" placeholder="digite seu email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label>senha<span class="text-danger">*</span></label>
                                                        <div class="input-group">
                                                            <div class="input-group-text"><ion-icon name="lock-closed"></ion-icon></div>
                                                            <input class="form-control" type="password" name="senha" placeholder="digite sua senha" value="<?php echo isset($_GET['senha']) ? $_GET['senha'] : ''; ?>" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="inlineFormCheck"><input class="form-check-input" type="checkbox" id="inlineFormCheck"> Lembrar-se</label>
                                                           
                                                        </div>
                                                    </div>

                                                    <div class="d-grid gap-2 my-2">
                                                        <button button type="submit" class="btn btn-dark px-4 float-end mt-4">ENTRAR</button>
                                                    </div>

                                                    <div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-sm-9">
                                                                <p>Esqueceu a senha? <a id="recover-link" href="recSenha.php" class="float-end text-primary">Recupere</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-5 ps-0 d-none bg-primary d-md-block d-flex align-items-center justify-content-center shadow rounded">
                                            <div class="form-right h-100 bg-primary text-white text-center pt-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="170" height="170" viewBox="0 0 512 512" class="mx-auto">
                                                    <path fill="white" d="M256 23c-70.045 0-132.915 30.997-175.646 80H63v22.514C37.756 162.755 23 207.67 23 256c0 48.329 14.756 93.245 40 130.486V489h386V386.486c25.244-37.241 40-82.157 40-130.486c0-48.329-14.756-93.245-40-130.486V103h-17.354C388.916 53.997 326.045 23 256 23zm0 18c58.943 0 112.296 23.66 151.113 62H104.887C143.704 64.66 197.057 41 256 41zm-152.635 80h145.201c-2.774 1.54-5.432 3.983-7.859 7.396C236.169 134.778 233 144.303 233 155s3.17 20.222 7.707 26.604c4.538 6.38 9.876 9.396 15.293 9.396s10.755-3.015 15.293-9.396C275.831 175.222 279 165.697 279 155s-3.17-20.222-7.707-26.604c-2.427-3.413-5.085-5.855-7.86-7.396h145.202l-100.436 62h36.375l85.748-52.938c.225.312.455.62.678.932V201H277.562c-6.112 4.924-13.487 8-21.562 8c-8.075 0-15.45-3.076-21.563-8H81v-70.006c.223-.312.453-.62.678-.931L167.426 183H203.8l-100.436-62zM63 161.098v189.804C48.92 322.287 41 290.08 41 256s7.92-66.287 22-94.902zm386 0c14.08 28.615 22 60.822 22 94.902s-7.92 66.287-22 94.902V161.098zM81 223h136v244.47a213.512 213.512 0 0 1-57.34-19.185l39.34-59.01v-40.08l-59.615 87.508A215.834 215.834 0 0 1 81 381.006V223zm214 0h136v158.006a215.834 215.834 0 0 1-58.385 55.697L313 349.195v40.08l39.34 59.01A213.512 213.512 0 0 1 295 467.471V223zm-48 97h18v150.799a219.11 219.11 0 0 1-9 .201c-3.016 0-6.014-.079-9-.201V320zM81 409.729c23.202 26.386 52.264 47.494 85.148 61.271H81v-61.271zm350 0V471h-85.148c32.884-13.777 61.946-34.885 85.148-61.271z" />
                                                </svg>
                                                <h2 class="fs-7 bg-primary text-white">HEALTHTECH</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('layout/footer.php'); 
    ?>