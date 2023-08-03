<?php
session_start();
include_once("conexao.php");
error_reporting(0);
if (isset($_SESSION['login'])) {
    foreach ($_SESSION['loginA'] as $codigo) {
        $codigousu = $codigo['cod'];
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="Imagens/Logo.png" rel="icon">
    <title>DescompliCars</title>
</head>

<body>
    <!-- Abre Navbar -->
    <nav class="navbar bg-body-tertiary" aria-label="Light offcanvas navbar">
        <div class="container-fluid">
            <form action="#" method="post">
                <input type="hidden" name="Menu" value="Menu">
                <button style="border: none; background-color: transparent;" class="navbar-brand" href="#">
                    <img src="./Imagens/Logo.png" width="50px" height="50px">
                    <font size="5">Descompli<font size="5" style="color: #004aad;">Cars</font>
                    </font>
                </button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarLight" aria-controls="offcanvasNavbarLight" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarLight" aria-labelledby="offcanvasNavbarLightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLightLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <form action="#" method="post">
                                <input type="submit" value="Marcas" name="Marcas" class="ButtonMenu">
                            </form>
                        </li>
                        <li class="nav-item">
                            <form action="#" method="post">
                                <input type="submit" value="Carros" name="Veiculos" class="ButtonMenu">
                            </form>
                        </li>
                        <li>
                            <?php
                            if (!isset($_SESSION['login'])) {
                            ?>
                                <form action="#" method="post">
                                    <input type="submit" value="Entrar" name="Usuarios" class="button-6">
                                </form>
                            <?php
                            } else {
                            ?>
                                <form action="#" method="post">
                                    <input type="submit" value="Perfil" name="Perfil" class="button-6">
                                </form>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Fecha Navbar -->

    <?php
    if ($_POST['Menu']) {
        unset($_SESSION['TudoTudo']);
    ?>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" src="./Imagens/Senna.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="./Imagens/Senna.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="./Imagens/Senna.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="ModImg">
            <h1>Modelos</h1>
            <hr>
            <div class="ModQuad">
                <form action="#" method="post">
                    <input type="hidden" name="Modelos" value="Sedans">
                    <button type="submit" class="QuadMod">
                        <img src="./Imagens/Sedans.png">
                        <h3>Sedans</h3>
                    </button>
                </form>
                <form action="#" method="post">
                    <input type="hidden" name="Modelos" value="Hatchers">
                    <button type="submit" class="QuadMod">
                        <img src="./Imagens/Hatchers.png">
                        <h3>Hatchers</h3>
                    </button>
                </form>
                <form action="#" method="post">
                    <input type="hidden" name="Modelos" value="Esportivos">
                    <button type="submit" class="QuadMod">
                        <img src="./Imagens/Esportivos.png">
                        <h3>Esportivos</h3>
                    </button>
                </form>
                <form action="#" method="post">
                    <input type="hidden" name="Modelos" value="Picapes">
                    <button type="submit" class="QuadMod">
                        <img src="./Imagens/Picapes.png">
                        <h3>Picapes</h3>
                    </button>
                </form>
                <form action="#" method="post">
                    <input type="hidden" name="Modelos" value="SUVs">
                    <button type="submit" class="QuadMod">
                        <img src="./Imagens/SUVs.png">
                        <h3>SUVs</h3>
                    </button>
                </form>
                <form action="#" method="post">
                    <input type="hidden" name="Modelos" value="Eletricos">
                    <button type="submit" class="QuadMod">
                        <img src="./Imagens/Eletricos.png">
                        <h3>Eletricos</h3>
                    </button>
                </form>
            </div>
        </div>

        <div class="VisImg">
            <h1>Carros Mais Vistos</h1>
            <hr>
            <div class="VisQuad">
                <?php
                $carrosvis = "SELECT * FROM carros ORDER BY car_contagem desc LIMIT 4";
                $comando = mysqli_query($conn, $carrosvis);
                while ($row = mysqli_fetch_array($comando)) {
                    $cod = $row['car_cod'];
                    $marca = $row['car_marca'];
                    $modelo = $row['car_modelo'];
                    $tipo = $row['car_tipo'];
                    $imagem = base64_encode($row['car_image']);
                    $contagem = $row['car_contagem'];
                ?>
                    <form action="#" method="post">
                        <button class="QuadVis">
                            <input type="hidden" name="Carros" value="Carros">
                            <input type="hidden" name="CarCod" value="<?php echo "$cod"; ?>">
                            <?php echo "<img class=perfil src=data:image/jpeg;base64,$imagem>"; ?>
                            <font size='5px' color=#004aad><?php echo "$marca" . " " . "$modelo" ?></font>
                        </button>
                    </form>
                <?php
                }
                ?>

            </div>
        </div>
    <?php
    } else if ($_POST['Modelos']) {
        $Modelos = $_POST['Modelos'];
    ?>
        <div class="ModelosQuad">
            <h1><?php echo $Modelos; ?></h1>
            <hr>
            <div class="QuadModelos">
                <?php
                $CarrosModelos = "SELECT * FROM carros WHERE car_tipo like '$Modelos'";
                $ModelosSQL = mysqli_query($conn, $CarrosModelos);
                while ($row = mysqli_fetch_array($ModelosSQL)) {
                    $cod = $row['car_cod'];
                    $marca = $row['car_marca'];
                    $modelo = $row['car_modelo'];
                    $tipo = $row['car_tipo'];
                    $imagem = base64_encode($row['car_image']);
                ?>
                    <form action="#" method="post">
                        <button class="CarrosModelos">
                            <?php echo "<img src='data:image/jpeg;base64,$imagem'>" ?>
                            <font size='5px' color=#004aad><?php echo "$marca" . " " . "$modelo" ?></font>
                            <input type="hidden" name="CarCod" value="<?php echo $cod ?>">
                            <input type="hidden" name="Carros" value="Carros">
                        </button>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    } else if ($_POST['Carros'] || $_SESSION['TudoTudo'] == "Carros") {
        $cod = $_POST['CarCod'];
        $codcar = $_SESSION['codigocarro'];
        unset($_SESSION['codigocarro']);
        if ($cod != "") {
            $carro = "SELECT * FROM carros WHERE car_cod = $cod";
        } else {
            $carro = "SELECT * FROM carros WHERE car_cod = $codcar";
        }
        $comando = mysqli_query($conn, $carro);
        while ($row = mysqli_fetch_array($comando)) {
            $modelo = $row['car_modelo'];
            $opniaocarro = "SELECT * FROM opnioes WHERE opn_carro='$modelo'";
            $abobora = mysqli_query($conn, $opniaocarro);
            while ($row = mysqli_fetch_array($abobora)) {
                $avalia[] = $row['opn_avaliacao'];
            }
            if ($avalia != "") {
                $soma = 0;
                foreach ($avalia as $avalias) {
                    $soma = $soma + $avalias;
                }
                $media = $soma / count($avalia);
                $media = substr($media, 0, 1);
            } else {
                $media = 0;
            }
        }
    ?>
        <div class="CarQuad">
            <?php
            if ($cod != "") {
                $carro = "SELECT * FROM carros WHERE car_cod = $cod";
            } else {
                $carro = "SELECT * FROM carros WHERE car_cod = $codcar";
            }
            $carros = mysqli_query($conn, $carro);
            while ($row = mysqli_fetch_array($carros)) {
                $cod = $row['car_cod'];
                $marca = $row['car_marca'];
                $modelo = $row['car_modelo'];
                $contagem = $row['car_contagem'];
                if ($codigo != 0) {
                    $vistover = "SELECT * FROM car_visto WHERE carv_perfilcod = '$codigousu' AND carv_carcod = '$cod'";
                    $comando = mysqli_query($conn, $vistover);
                    if (mysqli_affected_rows($conn)) {
                    } else {
                        $visto = "INSERT INTO car_visto (carv_carcod, carv_perfilcod) values ('$cod', '$codigousu')";
                        $comando = mysqli_query($conn, $visto);
                        if (mysqli_affected_rows($conn)) {
                        } else {
                        }
                    }
                }

                $soma = 1 + $contagem;
                $contagens = "UPDATE carros SET car_contagem = '$soma' WHERE car_cod = '$cod'";
                $comando = mysqli_query($conn, $contagens);
                if (mysqli_affected_rows($conn)) {
                } else {
                }
                $imagem = base64_encode($row['car_image']);
                echo "<img src='data:image/jpeg;base64,$imagem'>";
            ?>
                <font size='5px' color=#004aad>
                    <h1><?php echo "$marca" . " " . "$modelo" ?></h1>
                </font>
                <div class="Estrelas">
                    <?php
                    if ($media == "1") {
                        echo "
                            <img src=Imagens/star1.png id=s1>
                    
                            <img src=Imagens/star0.png id=s2>
                    
                            <img src=Imagens/star0.png id=s3>
                    
                            <img src=Imagens/star0.png id=s4>
                    
                            <img src=Imagens/star0.png id=s5>";
                    } else if ($media == "2") {
                        echo "
                            <img src=Imagens/star1.png id=s1>
                    
                            <img src=Imagens/star1.png id=s2>
                    
                            <img src=Imagens/star0.png id=s3>
                    
                            <img src=Imagens/star0.png id=s4>
                    
                            <img src=Imagens/star0.png id=s5>";
                    } else if ($media == "3") {
                        echo "
                            <img src=Imagens/star1.png id=s1>
                    
                            <img src=Imagens/star1.png id=s2>
                    
                            <img src=Imagens/star1.png id=s3>
                    
                            <img src=Imagens/star0.png id=s4>
                    
                            <img src=Imagens/star0.png id=s5>";
                    } else if ($media == "4") {
                        echo "
                            <img src=Imagens/star1.png id=s1>
                    
                            <img src=Imagens/star1.png id=s2>
                    
                            <img src=Imagens/star1.png id=s3>
                    
                            <img src=Imagens/star1.png id=s4>
                    
                            <img src=Imagens/star0.png id=s5>";
                    } else if ($media == "5") {
                        echo "
                            <img src=Imagens/star1.png id=s1>
                    
                            <img src=Imagens/star1.png id=s2>
                    
                            <img src=Imagens/star1.png id=s3>
                    
                            <img src=Imagens/star1.png id=s4>
                    
                            <img src=Imagens/star1.png id=s5>";
                    }
                    ?>
                </div>
                <?php
            }
            $opniaocarro = "SELECT * FROM opnioes WHERE opn_carro='$modelo'";
            $abobora = mysqli_query($conn, $opniaocarro);
            while ($row = mysqli_fetch_array($abobora)) {
                $codigoopn = $row['opn_cod'];
                $opiniao = $row['opn_opiniao'];
                $usuario = $row['opn_pessoa'];
                $codigofoto = $row['opn_codusu'];
                $avaliacao = $row['opn_avaliacao'];
                $anomod = $row['opn_anomod'];
                $pros = $row['opn_pros'];
                $contra = $row['opn_contra'];
                $avalia[] = $row['opn_avaliacao'];
                $imagemusu = "SELECT * FROM usuarios WHERE usu_cod='$codigofoto'";
                $comando = mysqli_query($conn, $imagemusu);
                while ($row = mysqli_fetch_array($comando)) {
                    $imagemusua = base64_encode($row['usu_image']);
                ?>
                    <div class="ComenQuad">
                        <div class="ComenBar">
                            <div class="ComenEsq">
                                <?php echo "<img class=perfil src='data:image/jpeg;base64,$imagemusua'>" ?>
                                <?php echo "<h1>$usuario</h1>"; ?>
                                <div class="EstrelasComen">
                                    <?php
                                    if ($avaliacao == "1") {
                                        echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star0.png id=s2>
                                
                                        <img src=Imagens/star0.png id=s3>
                                
                                        <img src=Imagens/star0.png id=s4>
                                
                                        <img src=Imagens/star0.png id=s5>";
                                    } else if ($avaliacao == "2") {
                                        echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star1.png id=s2>
                                
                                        <img src=Imagens/star0.png id=s3>
                                
                                        <img src=Imagens/star0.png id=s4>
            
                                        <img src=Imagens/star0.png id=s5>";
                                    } else if ($avaliacao == "3") {
                                        echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star1.png id=s2>
                                
                                        <img src=Imagens/star1.png id=s3>
                                
                                        <img src=Imagens/star0.png id=s4>
            
                                        <img src=Imagens/star0.png id=s5>";
                                    } else if ($avaliacao == "4") {
                                        echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star1.png id=s2>
                                
                                        <img src=Imagens/star1.png id=s3>
            
                                        <img src=Imagens/star1.png id=s4>
                                
                                        <img src=Imagens/star0.png id=s5>";
                                    } else if ($avaliacao == "5") {
                                        echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star1.png id=s2>
                                
                                        <img src=Imagens/star1.png id=s3>
                                
                                        <img src=Imagens/star1.png id=s4>
                                
                                        <img src=Imagens/star1.png id=s5>";
                                    } else if ($avaliacao == "0") {
                                        echo "
                                        <img src=Imagens/star0.png id=s1>
                                
                                        <img src=Imagens/star0.png id=s2>
                                
                                        <img src=Imagens/star0.png id=s3>
                                
                                        <img src=Imagens/star0.png id=s4>
                                
                                        <img src=Imagens/star0.png id=s5>";
                                    }
                                    ?>
                                </div>
                                <?php
                                echo "<form action=# method=post>";
                                ?>
                                <input type="hidden" name="VerPerfil" value="VerPerfil">
                                <?php
                                echo "<input type=hidden name='cod' value='$codigofoto'>";
                                echo "<button class=button-7>Ver perfil</button>";
                                echo "</form>";
                                ?>
                            </div>
                            <div class="ComenDir">
                                <h1>Opinião</h1>
                                <?php echo "$opiniao"; ?>
                                <h1>Prós</h1>
                                <?php echo "$pros"; ?>
                                <h1>Contra</h1>
                                <?php echo "$contra"; ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <form action="tudo.php" method="post">
                <?php
                if (isset($_SESSION['login'])) {
                    echo "<input type=hidden name=codigousu value=$codigousu>";
                }
                echo "<input type=hidden name=codigocar value=$cod>";
                ?>
                <input class=button-6 type="submit" value="Cadastrar opinião" name="CadOpn">
            </form>
        </div>
    <?php
    } else if ($_POST['VerPerfil']) {
    ?>
        <div style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
            <?php
            $cod = $_POST['cod'];
            $usu = "SELECT * FROM usuarios WHERE usu_cod='$cod'";
            $abobora = mysqli_query($conn, $usu);
            while ($row = mysqli_fetch_array($abobora)) {
                $imagem = base64_encode($row['usu_image']);
                $nome = $row['usu_nome'];
                $sobrenome = $row['usu_sobrenome'];
            ?>
                <div class="top-titlea">
                    <?php echo "<img style='width:200px;height:200px;border-radius:40px;margin-top:20px;border-color:#004aad;border-style:solid;' src='data:image/jpeg;base64,$imagem'>"; ?>
                    <font color='#004aad'>
                        <h1><?php echo "$nome $sobrenome" ?></h1>
                    </font>
                    <?php
                    echo "<div style='display:flex; justify-content:center; align-items:center; flex-direction:column;'><h3>Opiniões</h3>
            <hr style='margin:0; margin-bottom:20px;'></div>";
                    ?>
                    <div style="display: flex; justify-content: center; align-items: center; width: 100%; flex-direction: column;">
                        <?php
                        $usuarios = "SELECT * FROM opnioes WHERE opn_codusu='$cod'";
                        $comando = mysqli_query($conn, $usuarios);
                        while ($row = mysqli_fetch_array($comando)) {
                            $opiniao = $row['opn_opiniao'];
                            $carro = $row['opn_carro'];
                            $marca = $row['opn_marca'];
                            $avaliacao = $row['opn_avaliacao'];
                            $anomod = $row['opn_anomod'];
                            $pros = $row['opn_pros'];
                            $contra = $row['opn_contra'];
                        ?>
                            <div class="ComenQuad">
                                <div class="ComenBar">
                                    <div class="ComenEsq">
                                        <?php echo "<h1>$marca $carro</h1>"; ?>
                                        <div class="EstrelasComen">
                                            <?php
                                            if ($avaliacao == "1") {
                                                echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star0.png id=s2>
                                
                                        <img src=Imagens/star0.png id=s3>
                                
                                        <img src=Imagens/star0.png id=s4>
                                
                                        <img src=Imagens/star0.png id=s5>";
                                            } else if ($avaliacao == "2") {
                                                echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star1.png id=s2>
                                
                                        <img src=Imagens/star0.png id=s3>
                                
                                        <img src=Imagens/star0.png id=s4>
            
                                        <img src=Imagens/star0.png id=s5>";
                                            } else if ($avaliacao == "3") {
                                                echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star1.png id=s2>
                                
                                        <img src=Imagens/star1.png id=s3>
                                
                                        <img src=Imagens/star0.png id=s4>
            
                                        <img src=Imagens/star0.png id=s5>";
                                            } else if ($avaliacao == "4") {
                                                echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star1.png id=s2>
                                
                                        <img src=Imagens/star1.png id=s3>
            
                                        <img src=Imagens/star1.png id=s4>
                                
                                        <img src=Imagens/star0.png id=s5>";
                                            } else if ($avaliacao == "5") {
                                                echo "
                                        <img src=Imagens/star1.png id=s1>
                                
                                        <img src=Imagens/star1.png id=s2>
                                
                                        <img src=Imagens/star1.png id=s3>
                                
                                        <img src=Imagens/star1.png id=s4>
                                
                                        <img src=Imagens/star1.png id=s5>";
                                            } else if ($avaliacao == "0") {
                                                echo "
                                        <img src=Imagens/star0.png id=s1>
                                
                                        <img src=Imagens/star0.png id=s2>
                                
                                        <img src=Imagens/star0.png id=s3>
                                
                                        <img src=Imagens/star0.png id=s4>
                                
                                        <img src=Imagens/star0.png id=s5>";
                                            }
                                            ?>
                                        </div>
                                        <?php
                                        echo "<form action=# method=post>";
                                        ?>
                                        <input type="hidden" name="VerPerfil" value="VerPerfil">
                                        <?php
                                        $codigocarro = "SELECT * FROM carros WHERE car_modelo = '$carro'";
                                        $codiguin = mysqli_query($conn, $codigocarro);
                                        while ($row = mysqli_fetch_array($codiguin)) {
                                            $codigos = $row['car_cod'];
                                            echo "<input type=hidden name='Carros' value='Carros'>";
                                            echo "<input type=hidden name='CarCod' value='$codigos'>";
                                            echo "<button class=button-7>Ver Carro</button>";
                                            echo "</form>";
                                        }
                                        ?>
                                    </div>
                                    <div class="ComenDir">
                                        <h1>Opinião</h1>
                                        <?php echo "$opiniao"; ?>
                                        <h1>Prós</h1>
                                        <?php echo "$pros"; ?>
                                        <h1>Contra</h1>
                                        <?php echo "$contra"; ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
    } else if ($_POST['Usuarios'] || $_SESSION['TudoTudo'] == "Usuarios") {
        unset($_SESSION['TudoTudo']);
        ?>
            <div class="MeioUsu">
                <div class="wrapper">
                    <div class="title-text">
                        <div class="title login">Login</div>
                        <div class="title signup">Cadastrar</div>
                    </div>
                    <div class="form-container">
                        <div class="slide-controls">
                            <input type="radio" name="slide" id="login" checked>
                            <input type="radio" name="slide" id="signup">
                            <label for="login" class="slide login">Login</label>
                            <label for="signup" class="slide signup">Cadastrar</label>
                            <div class="slider-tab"></div>
                        </div>
                        <div class="form-inner">
                            <form action="tudo.php" method="post" class="login">
                                <div class="field">
                                    <input type="email" placeholder="E-mail" name="email" required>
                                </div>
                                <div class="field">
                                    <input type="password" placeholder="Senha" name="senha" required>
                                </div>
                                <div style="text-align:center; margin-top:10px; margin-bottom:10px;">
                                    <?php
                                    if (isset($_SESSION['ErroUsu'])) {
                                        echo $_SESSION['ErroUsu'];
                                        unset($_SESSION['ErroUsu']);
                                    }
                                    ?>
                                </div>
                                <div class="field btn">
                                    <div class="btn-layer"></div>
                                    <input type="submit" value="Login" name="Login">
                                </div>
                                <div class="signup-link">Ainda não é um membro? <a href="">Cadastra-se Agora</a></div>
                            </form>
                            <form action="tudo.php" method="post" class="signup" enctype="multipart/form-data">
                                <div class="field">
                                    <input type="email" placeholder="E-mail" name="email" required>
                                    <input type="text" placeholder="Nome" name="nome" required>
                                    <input type="text" placeholder="Sobrenome" name="sobrenome" required>
                                </div>
                                <div class="field">
                                    <input type="text" class="phone" minlength="14" maxlength="14" placeholder="Telefone" name="tel" required>
                                    <input type="date" min="1900-01-01" max="2023-01-01" name="datanasc" required>
                                    <input type="text" class="cpf" minlength="14" maxlength="14" placeholder="CPF" name="cpf" required>
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Endereco" name="endereco" required>
                                    <input type="text" placeholder="Cidade" name="cidade" required>
                                    <input type="text" placeholder="Estado" name="estado" required>
                                </div>
                                <div class="field">
                                    <h3 style="display: flex; align-items: center; justify-content: center;">Genero:</h3><select name="genero">
                                        <option value="Feminino">Feminino</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                    <input type="password" placeholder="Senha" name="senha" required>
                                </div>
                                <div class="field">
                                    Insira sua foto<input type="file" name="imagemperfil" accept="image/*">
                                </div>
                                <div class="field btn">
                                    <div class="btn-layer"></div>
                                    <input type="submit" value="Cadastrar" name="CadastroUsu">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    } else if ($_POST['Perfil'] || $_SESSION['TudoTudo'] == "Perfil") {
        unset($_SESSION['TudoTudo']);
        ?>
            <main class="d-flex flex-nowrap">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 40%; max-width: 200px;">
                    <h2><?php
                        foreach ($_SESSION['loginA'] as $codigo) {
                            $codigo = $codigo['cod'];
                        }
                        $imagem = "SELECT * FROM usuarios WHERE usu_cod=$codigo";
                        $comando = mysqli_query($conn, $imagem);
                        while ($row = mysqli_fetch_array($comando)) {
                            if (isset($_SESSION['login'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['login'];
                            } else if (isset($_SESSION['edit'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['edit'];
                            }
                        }
                        ?>
                        <center>
                            <hr>
                        </center>
                    </h2>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Perfil" value="Perfil">
                            <button href="#" class="nav-link active" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Carros Vistos
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="EditarPer" value="EditarPer">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Editar Perfil
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Comentarios" value="Comentarios">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Comentarios
                                    </div>
                                </li>
                            </button>
                        </form>
                        <?php
                        if ($codigo == 1 || $codigo == 2) {
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="VerUsu" value="VerUsu">
                                <button href="#" class="nav-link nav-cor" aria-current="page">
                                    <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                        <div>
                                            <?php
                                            foreach ($_SESSION['loginA'] as $codigo) {
                                                $codigo = $codigo['cod'];
                                                echo "<input type=hidden name=codigo value=$codigo>";
                                            }
                                            ?>
                                            Ver Usuarios
                                        </div>
                                    </li>
                                </button>
                            </form>
                        <?php
                        } else {
                        }
                        ?>
                        <form action="tudo.php" method="post">
                            <input type="hidden" name="Sair" value="Sair">
                            <button class="nav-link nav-cor" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Sair
                                    </div>
                                </li>
                            </button>
                        </form>
                        <li>
                            <?php
                            if (isset($_SESSION['editado'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['editado'] . "</font></center>";
                                unset($_SESSION['editado']);
                            }
                            ?>
                            <?php
                            //mostrando a msg de login e senha inválidos!
                            if (isset($_SESSION['msgC'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['msgC'] . "</font></center>";
                                unset($_SESSION['msgC']);
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <?php
                if (isset($_SESSION['login'])) {
                    if ($codigo == "1" || $codigo == "2") {
                ?>
                        <div class="quadradoa">
                            <form action="#" method="post">
                                <input type="hidden" name="CadVeiculos" value="CadVeiculos">
                                <button class="quadrado">
                                    Cadastrar veiculos
                                </button>
                            </form>
                            <form action="#" method="post">
                                <input type="hidden" name="CadMarcas" value="CadMarcas">
                                <button class="quadrado">
                                    Cadastrar Marcas
                                </button>
                            </form>
                            <form action="#" method="post">
                                <input type="hidden" name="CadEspe" value="CadEspe">
                                <button class="quadrado">
                                    Cadastrar especificacoes
                                </button>
                            </form>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="LetrasCarPer">
                            <font color="#004aad">
                                <h1>Carros Vistos</h1>
                            </font>
                            <hr>
                            <?php
                            echo "<div class=CarPerQuad>";
                            $visto = "SELECT * FROM car_visto WHERE carv_perfilcod = '$codigo'";
                            $pao = mysqli_query($conn, $visto);
                            while ($batata = mysqli_fetch_array($pao)) {
                                $codusu = $batata['carv_perfilcod'];
                                $codcar = $batata['carv_carcod'];
                                $procurar = "SELECT * FROM carros WHERE car_cod = '$codcar'";
                                $comando = mysqli_query($conn, $procurar);
                                while ($row = mysqli_fetch_array($comando)) {
                                    $cod = $row['car_cod'];
                                    $marca = $row['car_marca'];
                                    $modelo = $row['car_modelo'];
                                    $tipo = $row['car_tipo'];
                                    $imagemcar = base64_encode($row['car_image']);

                                    echo "
                        <form action=# method=post>
                            <input type='hidden' name='Carros' value='Carros'>
                            <button class=QuadCarPer>
                                <img src='data:image/jpeg;base64,$imagemcar'>
                                <font color=#004aad size=5><h1>$marca $modelo</h1></font>
                                <input type=hidden name=CarCod value=$cod>
                            </button>
                        </form>";
                                }
                            }
                            ?>
                        </div>
                <?php
                    }
                }
                ?>
            </main>
        <?php
    } else if ($_POST['CadVeiculos']) {
        ?>
            <main class="d-flex flex-nowrap">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 40%; max-width: 200px;">
                    <h2><?php
                        foreach ($_SESSION['loginA'] as $codigo) {
                            $codigo = $codigo['cod'];
                        }
                        $imagem = "SELECT * FROM usuarios WHERE usu_cod=$codigo";
                        $comando = mysqli_query($conn, $imagem);
                        while ($row = mysqli_fetch_array($comando)) {
                            if (isset($_SESSION['login'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['login'];
                            } else if (isset($_SESSION['edit'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['edit'];
                            }
                        }
                        ?>
                        <center>
                            <hr>
                        </center>
                    </h2>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Perfil" value="Perfil">
                            <button href="#" class="nav-link active" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Carros Vistos
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="EditarPer" value="EditarPer">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Editar Perfil
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Comentarios" value="Comentarios">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Comentarios
                                    </div>
                                </li>
                            </button>
                        </form>
                        <?php
                        if ($codigo == 1 || $codigo == 2) {
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="VerUsu" value="VerUsu">
                                <button href="#" class="nav-link nav-cor" aria-current="page">
                                    <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                        <div>
                                            <?php
                                            foreach ($_SESSION['loginA'] as $codigo) {
                                                $codigo = $codigo['cod'];
                                                echo "<input type=hidden name=codigo value=$codigo>";
                                            }
                                            ?>
                                            Ver Usuarios
                                        </div>
                                    </li>
                                </button>
                            </form>
                        <?php
                        } else {
                        }
                        ?>
                        <form action="tudo.php" method="post">
                            <input type="hidden" name="Sair" value="Sair">
                            <button class="nav-link nav-cor" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Sair
                                    </div>
                                </li>
                            </button>
                        </form>
                        <li>
                            <?php
                            if (isset($_SESSION['editado'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['editado'] . "</font></center>";
                                unset($_SESSION['editado']);
                            }
                            ?>
                            <?php
                            //mostrando a msg de login e senha inválidos!
                            if (isset($_SESSION['msgC'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['msgC'] . "</font></center>";
                                unset($_SESSION['msgC']);
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div style="display: flex; flex-direction: column; align-items: center; text-align: center; width: 100%;">
                    <h1>Cadastre seu veiculo</h1>
                    <form method="post" action="tudo.php" enctype="multipart/form-data" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                        <input type="hidden" name="CadVeiculos" value="CadVeiculos">
                        <h2>Marca</h2>
                        <select class=marca name=marca id=marca>
                            <?php
                            echo "<option value='Escolha uma Marca'>Escolha uma Marca
                    </option>";
                            $carsa = "SELECT * FROM marcas ORDER BY mar_nome";
                            $carros = mysqli_query($conn, $carsa);
                            while ($row = mysqli_fetch_array($carros)) {
                                $cars[] = $row["mar_nome"];
                            }
                            for ($x = 0; $x < sizeof($cars); $x++) {
                                echo "<option value=$cars[$x]>
                            " . $cars[$x] . "
                            </option>";
                            }
                            ?>
                        </select>
                        <h2>Modelo</h2><input type="text" name="modelo" id="modelo" required>
                        <h2>Tipo<select name="tipo" id="">
                                <option value="SUVs">SUVs</option>
                                <option value="Hatchers">Hatchers</option>
                                <option value="Picapes">Picapes</option>
                                <option value="Eletricos">Eletricos</option>
                                <option value="Sedans">Sedans</option>
                                <option value="Esportivos">Esportivos</option>
                            </select></h2>
                        <h2>Imagem do veículo</h2>
                        <input type="file" name="imagem" accept="image/*" style="font-size: 10px;">
                        <?php
                        if (isset($_SESSION['erro'])) {
                            echo "<h3><center>" . $_SESSION['erro'] . "</center></h3>";
                            unset($_SESSION['erro']);
                        }
                        ?>
                        <div class="buttomD">
                            <button class="button-6" type="submit" style="margin-top: 20px;">Cadastrar</button>
                            <div>
                    </form>
                </div>
            </main>
        <?php
    } else if ($_POST['CadMarcas']) {
        ?>
            <main class="d-flex flex-nowrap">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 40%; max-width: 200px;">
                    <h2><?php
                        foreach ($_SESSION['loginA'] as $codigo) {
                            $codigo = $codigo['cod'];
                        }
                        $imagem = "SELECT * FROM usuarios WHERE usu_cod=$codigo";
                        $comando = mysqli_query($conn, $imagem);
                        while ($row = mysqli_fetch_array($comando)) {
                            if (isset($_SESSION['login'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['login'];
                            } else if (isset($_SESSION['edit'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['edit'];
                            }
                        }
                        ?>
                        <center>
                            <hr>
                        </center>
                    </h2>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Perfil" value="Perfil">
                            <button href="#" class="nav-link active" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Carros Vistos
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="EditarPer" value="EditarPer">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Editar Perfil
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Comentarios" value="Comentarios">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Comentarios
                                    </div>
                                </li>
                            </button>
                        </form>
                        <?php
                        if ($codigo == 1 || $codigo == 2) {
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="VerUsu" value="VerUsu">
                                <button href="#" class="nav-link nav-cor" aria-current="page">
                                    <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                        <div>
                                            <?php
                                            foreach ($_SESSION['loginA'] as $codigo) {
                                                $codigo = $codigo['cod'];
                                                echo "<input type=hidden name=codigo value=$codigo>";
                                            }
                                            ?>
                                            Ver Usuarios
                                        </div>
                                    </li>
                                </button>
                            </form>
                        <?php
                        } else {
                        }
                        ?>
                        <form action="tudo.php" method="post">
                            <input type="hidden" name="Sair" value="Sair">
                            <button class="nav-link nav-cor" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Sair
                                    </div>
                                </li>
                            </button>
                        </form>
                        <li>
                            <?php
                            if (isset($_SESSION['editado'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['editado'] . "</font></center>";
                                unset($_SESSION['editado']);
                            }
                            ?>
                            <?php
                            //mostrando a msg de login e senha inválidos!
                            if (isset($_SESSION['msgC'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['msgC'] . "</font></center>";
                                unset($_SESSION['msgC']);
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div style="width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column; text-align: center;">
                    <h1>Cadastre seu veiculo</h1>
                    <form method="post" action="tudo.php" enctype="multipart/form-data">
                        <div class=caddeita>
                            <h2>Marca</h2>
                            <select class=marca name=marca id=marca onclick='esconderMod()'>
                                <?php
                                $cars = [
                                    'Audi',
                                    'BMW',
                                    'CAOA Chery',
                                    'Chevrolet',
                                    'Citroen',
                                    'Ferrari',
                                    'Fiat',
                                    'Ford',
                                    'Honda',
                                    'Hyundai',
                                    'Jeep',
                                    'Kia',
                                    'Lamborghini',
                                    'LandRover',
                                    'Mercedes',
                                    'Mini',
                                    'Mitsubishi',
                                    'Nissan',
                                    'Peugeot',
                                    'Porche',
                                    'RAM',
                                    'Renault',
                                    'Subaru',
                                    'Suzuki',
                                    'Toyota',
                                    'Volkswagen',
                                    'Volvo'
                                ];
                                echo "<option value='Escolha uma Marca'>
                        Escolha uma Marca
                    </option>";
                                for ($x = 0; $x < sizeof($cars); $x++) {
                                    echo "<option value=$cars[$x]>
                            " . $cars[$x] . "
                        </option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="caddeita">
                            <h2>Imagem do veículo</h2>
                            <input type="file" name="imagem" accept="image/*" style="font-size: 10px;">
                        </div>
                        <div class="buttomD">
                            <input type="hidden" name="CadMarcas" value="CadMarcas">
                            <button class="button-6" type="submit" style="margin-top: 20px;">Cadastrar</button>
                            <div>
                    </form>
                </div>
            </main>
        <?php
    } else if ($_POST['CadEspe']) {
        ?>
            <main class="d-flex flex-nowrap">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 40%; max-width: 200px;">
                    <h2><?php
                        foreach ($_SESSION['loginA'] as $codigo) {
                            $codigo = $codigo['cod'];
                        }
                        $imagem = "SELECT * FROM usuarios WHERE usu_cod=$codigo";
                        $comando = mysqli_query($conn, $imagem);
                        while ($row = mysqli_fetch_array($comando)) {
                            if (isset($_SESSION['login'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['login'];
                            } else if (isset($_SESSION['edit'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['edit'];
                            }
                        }
                        ?>
                        <center>
                            <hr>
                        </center>
                    </h2>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Perfil" value="Perfil">
                            <button href="#" class="nav-link active" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Carros Vistos
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="EditarPer" value="EditarPer">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Editar Perfil
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Comentarios" value="Comentarios">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Comentarios
                                    </div>
                                </li>
                            </button>
                        </form>
                        <?php
                        if ($codigo == 1 || $codigo == 2) {
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="VerUsu" value="VerUsu">
                                <button href="#" class="nav-link nav-cor" aria-current="page">
                                    <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                        <div>
                                            <?php
                                            foreach ($_SESSION['loginA'] as $codigo) {
                                                $codigo = $codigo['cod'];
                                                echo "<input type=hidden name=codigo value=$codigo>";
                                            }
                                            ?>
                                            Ver Usuarios
                                        </div>
                                    </li>
                                </button>
                            </form>
                        <?php
                        } else {
                        }
                        ?>
                        <form action="tudo.php" method="post">
                            <input type="hidden" name="Sair" value="Sair">
                            <button class="nav-link nav-cor" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Sair
                                    </div>
                                </li>
                            </button>
                        </form>
                        <li>
                            <?php
                            if (isset($_SESSION['editado'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['editado'] . "</font></center>";
                                unset($_SESSION['editado']);
                            }
                            ?>
                            <?php
                            //mostrando a msg de login e senha inválidos!
                            if (isset($_SESSION['msgC'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['msgC'] . "</font></center>";
                                unset($_SESSION['msgC']);
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div>
                    <form action="tudo.php" method="post">
                        <input type="hidden" name="CadEsp" value="CadEsp">
                        <input type="text" name="especificacao">
                        <input type="text" name="tipo">
                        <button class="button-6" style="margin-top: 20px;">Enviar</button>
                    </form>
                </div>
            </main>
        <?php
    } else if ($_POST['VerUsu']) {
        ?>
            <main class="d-flex flex-nowrap">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 40%; max-width: 200px;">
                    <h2><?php
                        foreach ($_SESSION['loginA'] as $codigo) {
                            $codigo = $codigo['cod'];
                        }
                        $imagem = "SELECT * FROM usuarios WHERE usu_cod=$codigo";
                        $comando = mysqli_query($conn, $imagem);
                        while ($row = mysqli_fetch_array($comando)) {
                            if (isset($_SESSION['login'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['login'];
                            } else if (isset($_SESSION['edit'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['edit'];
                            }
                        }
                        ?>
                        <center>
                            <hr>
                        </center>
                    </h2>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Perfil" value="Perfil">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Carros Vistos
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="EditarPer" value="EditarPer">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Editar Perfil
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Comentarios" value="Comentarios">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Comentarios
                                    </div>
                                </li>
                            </button>
                        </form>
                        <?php
                        if ($codigo == 1 || $codigo == 2) {
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="VerUsu" value="VerUsu">
                                <button href="#" class="nav-link nav-cor active" aria-current="page">
                                    <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                        <div>
                                            <?php
                                            foreach ($_SESSION['loginA'] as $codigo) {
                                                $codigo = $codigo['cod'];
                                                echo "<input type=hidden name=codigo value=$codigo>";
                                            }
                                            ?>
                                            Ver Usuarios
                                        </div>
                                    </li>
                                </button>
                            </form>
                        <?php
                        } else {
                        }
                        ?>
                        <form action="tudo.php" method="post">
                            <input type="hidden" name="Sair" value="Sair">
                            <button class="nav-link nav-cor" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Sair
                                    </div>
                                </li>
                            </button>
                        </form>
                        <li>
                            <?php
                            if (isset($_SESSION['editado'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['editado'] . "</font></center>";
                                unset($_SESSION['editado']);
                            }
                            ?>
                            <?php
                            //mostrando a msg de login e senha inválidos!
                            if (isset($_SESSION['msgC'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['msgC'] . "</font></center>";
                                unset($_SESSION['msgC']);
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div style="width: 100%; display: flex; justify-content: center; align-items: center; text-align: center; flex-direction: column;">
                    <h3 style="margin-top: 20px;">Usuarios</h3>
                    <hr style="margin: 0; margin-bottom: 20px;">
                    <?php
                    $sql = "SELECT * FROM usuarios WHERE usu_cod >= 3 ORDER BY usu_cod";
                    $resultado = mysqli_query($conn, $sql);
                    while ($obj = mysqli_fetch_array($resultado)) {
                        $codUsu = $obj[0];
                        $email = $obj[1];
                        $nome = $obj[2];
                        $sobrenome = $obj[3];
                        $tel = $obj[5];
                        $dtnasc = $obj[6];
                        $cpf = $obj[7];
                        $endereco = $obj[8];
                        $cidade = $obj[9];
                        $estado = $obj[10];
                        $genero = $obj[11];
                    ?>
                        <div style="width: 90%; max-width: 300px; height: auto; background-color: white; border-radius: 20px; margin-bottom: 10px;">
                            <?php
                            echo "<br>Nome: $nome";
                            echo "<br>Sobrenome: $sobrenome";
                            echo "<br>Telefone: $tel";
                            echo "<br>Data de Nascimento: $dtnasc";
                            echo "<br>CPF:$cpf";
                            echo "<br>Endereco:$endereco";
                            echo "<br>Cidade:$cidade";
                            echo "<br>Estado:$estado";
                            echo "<br>Genero:$genero";
                            echo "<form method='post' action='tudo.php'>";
                            echo "<input type='hidden' name='ExcUsu' value='ExcUsu'>";
                            echo "<input type='hidden' name='codUsu' value='$codUsu'>";
                            echo "<button class='button-6' style='margin-top: 20px;'>Excluir</button>";
                            echo "</form>";
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </main>
        <?php
    } else if ($_POST['EditarPer']) {
        ?>
            <main class="d-flex flex-nowrap">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 40%; max-width: 200px;">
                    <h2><?php
                        foreach ($_SESSION['loginA'] as $codigo) {
                            $codigo = $codigo['cod'];
                        }
                        $imagem = "SELECT * FROM usuarios WHERE usu_cod=$codigo";
                        $comando = mysqli_query($conn, $imagem);
                        while ($row = mysqli_fetch_array($comando)) {
                            if (isset($_SESSION['login'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['login'];
                            } else if (isset($_SESSION['edit'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['edit'];
                            }
                        }
                        ?>
                        <center>
                            <hr>
                        </center>
                    </h2>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Perfil" value="Perfil">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Carros Vistos
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="EditarPer" value="EditarPer">
                            <button href="#" class="nav-link active" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Editar Perfil
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Comentarios" value="Comentarios">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Comentarios
                                    </div>
                                </li>
                            </button>
                        </form>
                        <?php
                        if ($codigo == 1 || $codigo == 2) {
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="VerUsu" value="VerUsu">
                                <button href="#" class="nav-link nav-cor" aria-current="page">
                                    <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                        <div>
                                            <?php
                                            foreach ($_SESSION['loginA'] as $codigo) {
                                                $codigo = $codigo['cod'];
                                                echo "<input type=hidden name=codigo value=$codigo>";
                                            }
                                            ?>
                                            Ver Usuarios
                                        </div>
                                    </li>
                                </button>
                            </form>
                        <?php
                        } else {
                        }
                        ?>
                        <form action="tudo.php" method="post">
                            <input type="hidden" name="Sair" value="Sair">
                            <button class="nav-link nav-cor" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Sair
                                    </div>
                                </li>
                            </button>
                        </form>
                        <li>
                            <?php
                            if (isset($_SESSION['editado'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['editado'] . "</font></center>";
                                unset($_SESSION['editado']);
                            }
                            ?>
                            <?php
                            //mostrando a msg de login e senha inválidos!
                            if (isset($_SESSION['msgC'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['msgC'] . "</font></center>";
                                unset($_SESSION['msgC']);
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="EdiPerQuad">
                    <div class="QuadEdiPer">
                        <div class="LetrasEdiPer">
                            <h1>Editar Perfil</h1>
                            <hr>
                        </div>
                        <form action="tudo.php" method="post">
                            <?php
                            $UsuEdi = "SELECT * FROM usuarios WHERE usu_cod=$codigo";
                            $comando = mysqli_query($conn, $UsuEdi);
                            while ($row = mysqli_fetch_array($comando)) {
                                $cod = $row['usu_cod'];
                                $Nome = $row['usu_nome'];
                                $Sobrenome = $row['usu_sobrenome'];
                                $Email = $row['usu_email'];
                                $Telefone = $row['usu_tel'];
                                $Data = $row['usu_dtnasc'];
                                $CPF = $row['usu_cpf'];
                                $Endereco = $row['usu_endereco'];
                                $Cidade = $row['usu_cidade'];
                                $Estado = $row['usu_estado'];
                                $Genero = $row['usu_genero'];
                            }
                            ?>
                            <h3>Nome: <input type="text" name="nome" value="<?php echo $Nome ?>"></h3>
                            <h3>Sobrenome: <input type="text" name="sobrenome" value="<?php echo $Sobrenome ?>"></h3>
                            <h3>Email: <input type="text" name="email" value="<?php echo $Email ?>"></h3>
                            <h3>Telefone: <input type="text" class="phone" type="text" minlength="14" maxlength="14" name="tel" value="<?php echo $Telefone ?>"></h3>
                            <h3>Data de Nascimento: <input type="date" min="1900-01-01" max="2023-01-01" name="dtnasc" value="<?php echo $Data ?>"></h3>
                            <h3>CPF: <input class="cpf" minlength="14" maxlength="14" name="cpf" value="<?php echo $CPF; ?>"></h3>
                            <h3>Endereço: <input type="text" name="endereco" value="<?php echo $Endereco ?>"></h3>
                            <h3>Cidade: <input type="text" name="cidade" value="<?php echo $Cidade ?>"></h3>
                            <h3>Estado: <input type="text" maxlength="2" name="estado" value="<?php echo $Estado ?>"></h3>
                            <h3>Genero: <select name="genero">
                                    <?php
                                    if ($Genero == "Masculino") {
                                        echo "<option value='Masculino'>Masculino</option>";
                                        echo "<option value='Feminino'>Feminino</option>";
                                        echo "<option value='Outros'>Outros</option>";
                                    } else if ($Genero == "Feminino") {
                                        echo "<option value='Feminino'>Feminino</option>";
                                        echo "<option value='Masculino'>Masculino</option>";
                                        echo "<option value='Outros'>Outros</option>";
                                    } else {
                                        echo "<option value='Outros'>Outros</option>";
                                        echo "<option value='Feminino'>Feminino</option>";
                                        echo "<option value='Masculino'>Masculino</option>";
                                    }
                                    ?>
                                </select></h3>
                            <h3>Insira sua foto<input type="file" name="imagemperfil" accept="image/*"></h3>
                            <div style="display: flex; align-items: center; justify-content: center; margin-top: 20px;">
                                <input type="hidden" name="cod" value="<?php echo $cod ?>">
                                <input type="hidden" name="EditarPer" value="EditarPer">
                                <button class="button-6">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        <?php
    } else if ($_POST['Comentarios']) {
        ?>
            <main class="d-flex flex-nowrap">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 40%; max-width: 200px;">
                    <h2><?php
                        foreach ($_SESSION['loginA'] as $codigo) {
                            $codigo = $codigo['cod'];
                        }
                        $imagem = "SELECT * FROM usuarios WHERE usu_cod=$codigo";
                        $comando = mysqli_query($conn, $imagem);
                        while ($row = mysqli_fetch_array($comando)) {
                            if (isset($_SESSION['login'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['login'];
                            } else if (isset($_SESSION['edit'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['edit'];
                            }
                        }
                        ?>
                        <center>
                            <hr>
                        </center>
                    </h2>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Perfil" value="Perfil">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Carros Vistos
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="EditarPer" value="EditarPer">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Editar Perfil
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Comentarios" value="Comentarios">
                            <button href="#" class="nav-link active" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Comentarios
                                    </div>
                                </li>
                            </button>
                        </form>
                        <?php
                        if ($codigo == 1 || $codigo == 2) {
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="VerUsu" value="VerUsu">
                                <button href="#" class="nav-link nav-cor" aria-current="page">
                                    <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                        <div>
                                            <?php
                                            foreach ($_SESSION['loginA'] as $codigo) {
                                                $codigo = $codigo['cod'];
                                                echo "<input type=hidden name=codigo value=$codigo>";
                                            }
                                            ?>
                                            Ver Usuarios
                                        </div>
                                    </li>
                                </button>
                            </form>
                        <?php
                        } else {
                        }
                        ?>
                        <form action="tudo.php" method="post">
                            <input type="hidden" name="Sair" value="Sair">
                            <button class="nav-link nav-cor" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Sair
                                    </div>
                                </li>
                            </button>
                        </form>
                        <li>
                            <?php
                            if (isset($_SESSION['editado'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['editado'] . "</font></center>";
                                unset($_SESSION['editado']);
                            }
                            ?>
                            <?php
                            //mostrando a msg de login e senha inválidos!
                            if (isset($_SESSION['msgC'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['msgC'] . "</font></center>";
                                unset($_SESSION['msgC']);
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div style="margin-bottom: 20px;" class="ComenPerQuad">
                    <div class="LetrasComenPer">
                        <h1>Opinioes</h1>
                        <hr>
                    </div>
                    <div class="ComenQuadQuad">
                        <?php
                        $opinioes = "SELECT * FROM opnioes WHERE opn_codusu = '$codigo'";
                        $abobrinha = mysqli_query($conn, $opinioes);
                        while ($row = mysqli_fetch_array($abobrinha)) {
                            $codigoopn = $row['opn_cod'];
                            $opiniao = $row['opn_opiniao'];
                            $carro = $row['opn_carro'];
                            $marca = $row['opn_marca'];
                            $anomod = $row['opn_anomod'];
                            $pros = $row['opn_pros'];
                            $contra = $row['opn_contra'];
                        ?>
                            <div class="QuadComenPer">
                                <div class="EsquerdaComen">
                                    <?php echo "<h3>$marca $carro</h3>"; ?>
                                </div>
                                <form action="#" method="post">
                                    <input type="hidden" name="EditComen" value="EditComen">
                                    <input type=hidden name=codigoopn value="<?php echo $codigoopn; ?>">
                                    <div class="DireitaComen">
                                        <h3>Opinião</h3>
                                        <?php echo "<h7>" . $opiniao . "</h7>"; ?>
                                        <h3>Prós</h3>
                                        <?php echo "<h7>" . $pros . "</h7>"; ?>
                                        <h3>Contra</h3>
                                        <?php echo "<h7>" . $contra . "</h7>"; ?>
                                        <button class="button-7" style="margin-top: 20px;">Editar Comentario</button>
                                    </div>
                                </form>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </main>
        <?php
    } else if ($_POST['EditComen']) {
        ?>
            <main class="d-flex flex-nowrap">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 40%; max-width: 200px;">
                    <h2><?php
                        foreach ($_SESSION['loginA'] as $codigo) {
                            $codigo = $codigo['cod'];
                        }
                        $imagem = "SELECT * FROM usuarios WHERE usu_cod=$codigo";
                        $comando = mysqli_query($conn, $imagem);
                        while ($row = mysqli_fetch_array($comando)) {
                            if (isset($_SESSION['login'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['login'];
                            } else if (isset($_SESSION['edit'])) {
                                $imagem = base64_encode($row['usu_image']);
                                echo "<center><img class=IMGPerfil src='data:image/jpeg;base64,$imagem'><br></center>";
                                echo $_SESSION['edit'];
                            }
                        }
                        ?>
                        <center>
                            <hr>
                        </center>
                    </h2>
                    <ul class="nav nav-pills flex-column mb-auto">
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Perfil" value="Perfil">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Carros Vistos
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="EditarPer" value="EditarPer">
                            <button href="#" class="nav-link" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Editar Perfil
                                    </div>
                                </li>
                            </button>
                        </form>
                        <form action="#" method="post" style="display: flex; justify-content: center;">
                            <input type="hidden" name="Comentarios" value="Comentarios">
                            <button href="#" class="nav-link active" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Comentarios
                                    </div>
                                </li>
                            </button>
                        </form>
                        <?php
                        if ($codigo == 1 || $codigo == 2) {
                        ?>
                            <form action="#" method="post">
                                <input type="hidden" name="VerUsu" value="VerUsu">
                                <button href="#" class="nav-link nav-cor" aria-current="page">
                                    <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                        <div>
                                            <?php
                                            foreach ($_SESSION['loginA'] as $codigo) {
                                                $codigo = $codigo['cod'];
                                                echo "<input type=hidden name=codigo value=$codigo>";
                                            }
                                            ?>
                                            Ver Usuarios
                                        </div>
                                    </li>
                                </button>
                            </form>
                        <?php
                        } else {
                        }
                        ?>
                        <form action="tudo.php" method="post">
                            <input type="hidden" name="Sair" value="Sair">
                            <button class="nav-link nav-cor" aria-current="page">
                                <li class="nav-item" style="display: flex; justify-content: center; align-items: center;">
                                    <div>
                                        <?php
                                        foreach ($_SESSION['loginA'] as $codigo) {
                                            $codigo = $codigo['cod'];
                                            echo "<input type=hidden name=codigo value=$codigo>";
                                        }
                                        ?>
                                        Sair
                                    </div>
                                </li>
                            </button>
                        </form>
                        <li>
                            <?php
                            if (isset($_SESSION['editado'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['editado'] . "</font></center>";
                                unset($_SESSION['editado']);
                            }
                            ?>
                            <?php
                            //mostrando a msg de login e senha inválidos!
                            if (isset($_SESSION['msgC'])) {
                                echo "<center><font color='#004aad'>" . $_SESSION['msgC'] . "</font></center>";
                                unset($_SESSION['msgC']);
                            }
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="EditComenQuad">
                    <?php
                    $codigoopn = $_POST['codigoopn'];
                    $opiniao = "SELECT * FROM opnioes WHERE opn_cod=$codigoopn";
                    $abobrinha = mysqli_query($conn, $opiniao);
                    while ($row = mysqli_fetch_array($abobrinha)) {
                        $usuario = $row['opn_pessoa'];
                        $codigousu = $row['opn_cod'];
                        $opnioes = $row['opn_opiniao'];
                        $carro = $row['opn_carro'];
                        $marca = $row['opn_marca'];
                        $avaliacao = $row['opn_avaliacao'];
                        $anomod = $row['opn_anomod'];
                        $pros = $row['opn_pros'];
                        $contra = $row['opn_contra'];
                    ?>
                        <div class="QuadEditComen">
                            <div class="EsquerdaEditComen">
                                <?php echo "<h1>$marca $carro</h1>" ?>
                                <div class="EstrelasEditComen">
                                    <?php
                                    if ($avaliacao == "1") {
                                        echo "<a href=javascript:void(0) onclick=Avaliar(1)>
                                            <img src=Imagens/star1.png id=s1></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(2)>
                                            <img src=Imagens/star0.png id=s2></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(3)>
                                            <img src=Imagens/star0.png id=s3></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(4)>
                                            <img src=Imagens/star0.png id=s4></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(5)>
                                            <img src=Imagens/star0.png id=s5></a>";
                                    } else if ($avaliacao == "2") {
                                        echo "<a href=javascript:void(0) onclick=Avaliar(1)>
                                            <img src=Imagens/star1.png id=s1></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(2)>
                                            <img src=Imagens/star1.png id=s2></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(3)>
                                            <img src=Imagens/star0.png id=s3></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(4)>
                                            <img src=Imagens/star0.png id=s4></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(5)>
                                            <img src=Imagens/star0.png id=s5></a>";
                                    } else if ($avaliacao == "3") {
                                        echo "<a href=javascript:void(0) onclick=Avaliar(1)>
                                            <img src=Imagens/star1.png id=s1></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(2)>
                                            <img src=Imagens/star1.png id=s2></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(3)>
                                            <img src=Imagens/star1.png id=s3></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(4)>
                                            <img src=Imagens/star0.png id=s4></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(5)>
                                            <img src=Imagens/star0.png id=s5></a>";
                                    } else if ($avaliacao == "4") {
                                        echo "<a href=javascript:void(0) onclick=Avaliar(1)>
                                            <img src=Imagens/star1.png id=s1></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(2)>
                                            <img src=Imagens/star1.png id=s2></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(3)>
                                            <img src=Imagens/star1.png id=s3></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(4)>
                                            <img src=Imagens/star1.png id=s4></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(5)>
                                            <img src=Imagens/star0.png id=s5></a>";
                                    } else if ($avaliacao == "5") {
                                        echo "<a href=javascript:void(0) onclick=Avaliar(1)>
                                            <img src=Imagens/star1.png id=s1></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(2)>
                                            <img src=Imagens/star1.png id=s2></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(3)>
                                            <img src=Imagens/star1.png id=s3></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(4)>
                                            <img src=Imagens/star1.png id=s4></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(5)>
                                            <img src=Imagens/star1.png id=s5></a>";
                                    } else if ($avaliacao == "0") {
                                        echo "<a href=javascript:void(0) onclick=Avaliar(1)>
                                            <img src=Imagens/star0.png id=s1></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(2)>
                                            <img src=Imagens/star0.png id=s2></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(3)>
                                            <img src=Imagens/star0.png id=s3></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(4)>
                                            <img src=Imagens/star0.png id=s4></a>
                                    
                                            <a href=javascript:void(0) onclick=Avaliar(5)>
                                            <img src=Imagens/star0.png id=s5></a>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <form action="tudo.php" method="post">
                                <div class="DireitaEditComen">
                                    <h1>Opinião</h1>
                                    <textarea name='opiniao' maxlength=400 class=textoperfil><?php echo "$opnioes" ?></textarea>
                                    <h1>Prós</h1>
                                    <textarea name='pros' maxlength=400 class=textoperfil><?php echo "$pros" ?></textarea>
                                    <h1>Contra</h1>
                                    <textarea name='contra' maxlength=400 class=textoperfil><?php echo "$contra" ?></textarea>
                                    <input type=hidden name=codigo value="<?php echo "$codigousu"; ?>">
                                    <input type="hidden" name="EditarComentario" value="EditarComentario">
                                    <input type=hidden name=avaliacao id=rating value="<?php echo "$avaliacao"; ?>">
                                    <button class="button-7" style="margin-top: 20px;">Editar Comentario</button>
                                </div>
                            </form>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </main>
        <?php
    } else if ($_POST['CadastroOpn'] || $_SESSION['TudoTudo'] == "CadastroOpn") {
        unset($_SESSION['TudoTudo']);
        ?>
            <div class="CadQuad">
                <div class="QuadCad" style="margin-bottom: 20px;">
                    <?php
                    $codcar = $_SESSION['codigocar'];
                    $codusu = $_SESSION['codigousu'];
                    $carro = "SELECT * FROM carros WHERE car_cod='$codcar'";
                    $comando = mysqli_query($conn, $carro);
                    while ($row = mysqli_fetch_array($comando)) {
                        $marca = $row['car_marca'];
                        $modelo = $row['car_modelo'];
                    ?>
                        <h1>Cadastro Opinião</h1>
                        <form action="tudo.php" method="post" style="display: flex; justify-content: center; flex-direction: column; align-items: center; text-align: center;">
                            <h3>Marca: <input type="text" value="<?php echo $marca ?>" name="MarcaOpn"></h3>
                            <h3>Modelo: <input type="text" value="<?php echo $modelo ?>" name="ModeloOpn"></h3>
                            <h3>Ano do Modelo: <input type="number" min="1950" max="2023" name="AnoModOpn"></h3>
                            <h3 style="display: flex; flex-direction: column; width: 100%;">Opinião: <textarea type="text" name="OpnOpn" style="width: 100%;"></textarea></h3>
                            <h3 style="display: flex; flex-direction: column; width: 100%;">Prós: <textarea type="text" name="ProOpn" style="width: 100%;"></textarea></h3>
                            <h3 style="display: flex; flex-direction: column; width: 100%;">Contra: <textarea type="text" name="ConOpn" style="width: 100%;"></textarea></h3>
                            <input type="hidden" name="codcar" value="<?php echo $codcar ?>" readonly>
                            <input type="hidden" name="codusu" value="<?php echo $codusu ?>" readonly>
                            <div class="EstrelasOpn">
                                <a href="javascript:void(0)" onclick="Avaliar(1)">
                                    <img src="Imagens/star0.png" id="s1"></a>

                                <a href="javascript:void(0)" onclick="Avaliar(2)">
                                    <img src="Imagens/star0.png" id="s2"></a>

                                <a href="javascript:void(0)" onclick="Avaliar(3)">
                                    <img src="Imagens/star0.png" id="s3"></a>

                                <a href="javascript:void(0)" onclick="Avaliar(4)">
                                    <img src="Imagens/star0.png" id="s4"></a>

                                <a href="javascript:void(0)" onclick="Avaliar(5)">
                                    <img src="Imagens/star0.png" id="s5"></a>
                            </div>
                            <input type=hidden name=avaliacao id=rating required>
                            <input type="submit" value="Cadastrar Opinião" name="CadastroOpn" class="button-6">
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
    } else if ($_POST['Marcas']) {
        ?>
            <div class="LetrasMar">
                <h3>Marcas</h3>
                <hr>
            </div>

            <div class="MarQuad">
                <?php
                $marcas = "SELECT * FROM marcas ORDER BY mar_nome";
                $comando = mysqli_query($conn, $marcas);
                while ($row = mysqli_fetch_array($comando)) {
                    $cod = $row['mar_cod'];
                    $marca = $row['mar_nome'];
                    $imagem = base64_encode($row['mar_image']);
                ?>
                    <form action="#" method="post">
                        <input type="hidden" value="MarcasCarros" name="MarcasCarros">
                        <button class="QuadMar">
                            <img src="<?php echo "data:image/jpeg;base64,$imagem"; ?>">
                            <input type="hidden" name="MarCod" value="<?php echo $cod; ?>">
                            <h1>
                                <font color=#004aad size=5><?php echo $marca; ?></font>
                            </h1>
                        </button>
                    </form>
                <?php
                }
                ?>
            </div>
            <?php
        } else if ($_POST['MarcasCarros']) {
            $MarCod = $_POST['MarCod'];
            $marcas = "SELECT * FROM marcas WHERE mar_cod = $MarCod";
            $comando = mysqli_query($conn, $marcas);
            while ($row = mysqli_fetch_array($comando)) {
                $marca = $row['mar_nome'];
                $imagem = base64_encode($row['mar_image']);
            ?>
                <div class="MarCarImg">
                    <?php
                    echo "<img src='data:image/jpeg;base64,$imagem'>";
                    echo "<h1><font color=#004aad>$marca</font></h1>";
                    ?>
                </div>
                <?php
                $teste = "SELECT * FROM carros WHERE car_marca='$marca'";
                $comando = mysqli_query($conn, $teste);
                while ($row = mysqli_fetch_array($comando)) {
                    $tipo = $row['car_tipo'];
                    if ($tipo == "Sedans") {
                ?>
                        <div class="LetrasMarCar">
                            <?php
                            echo "<h3>Sedans</h3>";
                            echo "<hr>";
                            ?>
                        </div>
                        <div class="MarCarQuad">
                            <?php
                            $carros = "SELECT * FROM carros WHERE car_marca='$marca' and car_tipo='Sedans'";
                            $comando = mysqli_query($conn, $carros);
                            while ($row = mysqli_fetch_array($comando)) {
                                $cod = $row['car_cod'];
                                $marca = $row['car_marca'];
                                $modelo = $row['car_modelo'];
                                $tipo = $row['car_tipo'];
                                $imagem = base64_encode($row['car_image']);
                            ?>
                                <form action="#" method="post" class="FormMarCar">
                                    <button class='QuadMarCar'>
                                        <img src="<?php echo "data:image/jpeg;base64,$imagem"; ?>">
                                        <font color="#004aad" size="5">
                                            <h1><?php echo "$marca" . " $modelo"; ?></h1>
                                        </font>
                                        <input type="hidden" name="Carros" value="Carros">
                                        <input type="hidden" name="CarCod" value="<?php echo "$cod"; ?>">
                                    </button>
                                </form>
                        <?php
                            }
                        }
                    }

                    $teste = "SELECT * FROM carros WHERE car_marca='$marca'";
                    $comando = mysqli_query($conn, $teste);
                    while ($row = mysqli_fetch_array($comando)) {
                        $tipo = $row['car_tipo'];
                        ?>
                        </div>
                        <?php
                        if ($tipo == "SUVs") {
                        ?>
                            <div class="LetrasMarCar">
                                <?php
                                echo "<h3>SUVs</h3>";
                                echo "<hr>";
                                ?>
                            </div>
                            <div class="MarCarQuad">
                                <?php
                                $carros = "SELECT * FROM carros WHERE car_marca='$marca' and car_tipo='SUVs'";
                                $comando = mysqli_query($conn, $carros);
                                while ($row = mysqli_fetch_array($comando)) {
                                    $cod = $row['car_cod'];
                                    $marca = $row['car_marca'];
                                    $modelo = $row['car_modelo'];
                                    $tipo = $row['car_tipo'];
                                    $imagem = base64_encode($row['car_image']);
                                ?>
                                    <form action="#" method="post" class="FormMarCar">
                                        <button class='QuadMarCar'>
                                            <img src="<?php echo "data:image/jpeg;base64,$imagem"; ?>">
                                            <font color="#004aad" size="5">
                                                <h1><?php echo "$marca" . " $modelo"; ?></h1>
                                            </font>
                                            <input type="hidden" name="Carros" value="Carros">
                                            <input type="hidden" name="CarCod" value="<?php echo "$cod"; ?>">
                                        </button>
                                    </form>
                            <?php
                                }
                            }
                            ?>
                            </div>
                        <?php
                    }

                    $teste = "SELECT * FROM carros WHERE car_marca='$marca'";
                    $comando = mysqli_query($conn, $teste);
                    while ($row = mysqli_fetch_array($comando)) {
                        $tipo = $row['car_tipo'];
                        ?>
        </div>
        <?php
                        if ($tipo == "Hatchers") {
        ?>
            <div class="LetrasMarCar">
                <?php
                            echo "<h3>Hatchers</h3>";
                            echo "<hr>";
                ?>
            </div>
            <div class="MarCarQuad">
                <?php
                            $carros = "SELECT * FROM carros WHERE car_marca='$marca' and car_tipo='Hatchers'";
                            $comando = mysqli_query($conn, $carros);
                            while ($row = mysqli_fetch_array($comando)) {
                                $cod = $row['car_cod'];
                                $marca = $row['car_marca'];
                                $modelo = $row['car_modelo'];
                                $tipo = $row['car_tipo'];
                                $imagem = base64_encode($row['car_image']);
                ?>
                    <form action="#" method="post" class="FormMarCar">
                        <button class='QuadMarCar'>
                            <img src="<?php echo "data:image/jpeg;base64,$imagem"; ?>">
                            <font color="#004aad" size="5">
                                <h1><?php echo "$marca" . " $modelo"; ?></h1>
                            </font>
                            <input type="hidden" name="Carros" value="Carros">
                            <input type="hidden" name="CarCod" value="<?php echo "$cod"; ?>">
                        </button>
                    </form>
            <?php
                            }
                        }
            ?>
            </div>
        <?php
                    }

                    $teste = "SELECT * FROM carros WHERE car_marca='$marca'";
                    $comando = mysqli_query($conn, $teste);
                    while ($row = mysqli_fetch_array($comando)) {
                        $tipo = $row['car_tipo'];
        ?>
            </div>
            <?php
                        if ($tipo == "Picapes") {
            ?>
                <div class="LetrasMarCar">
                    <?php
                            echo "<h3>Picapes</h3>";
                            echo "<hr>";
                    ?>
                </div>
                <div class="MarCarQuad">
                    <?php
                            $carros = "SELECT * FROM carros WHERE car_marca='$marca' and car_tipo='Picapes'";
                            $comando = mysqli_query($conn, $carros);
                            while ($row = mysqli_fetch_array($comando)) {
                                $cod = $row['car_cod'];
                                $marca = $row['car_marca'];
                                $modelo = $row['car_modelo'];
                                $tipo = $row['car_tipo'];
                                $imagem = base64_encode($row['car_image']);
                    ?>
                        <form action="#" method="post" class="FormMarCar">
                            <button class='QuadMarCar'>
                                <img src="<?php echo "data:image/jpeg;base64,$imagem"; ?>">
                                <font color="#004aad" size="5">
                                    <h1><?php echo "$marca" . " $modelo"; ?></h1>
                                </font>
                                <input type="hidden" name="Carros" value="Carros">
                                <input type="hidden" name="CarCod" value="<?php echo "$cod"; ?>">
                            </button>
                        </form>
                <?php
                            }
                        }
                ?>
                </div>
            <?php
                    }

                    $teste = "SELECT * FROM carros WHERE car_marca='$marca'";
                    $comando = mysqli_query($conn, $teste);
                    while ($row = mysqli_fetch_array($comando)) {
                        $tipo = $row['car_tipo'];
            ?>
                </div>
                <?php
                        if ($tipo == "Esportivos") {
                ?>
                    <div class="LetrasMarCar">
                        <?php
                            echo "<h3>Esportivos</h3>";
                            echo "<hr>";
                        ?>
                    </div>
                    <div class="MarCarQuad">
                        <?php
                            $carros = "SELECT * FROM carros WHERE car_marca='$marca' and car_tipo='Esportivos'";
                            $comando = mysqli_query($conn, $carros);
                            while ($row = mysqli_fetch_array($comando)) {
                                $cod = $row['car_cod'];
                                $marca = $row['car_marca'];
                                $modelo = $row['car_modelo'];
                                $tipo = $row['car_tipo'];
                                $imagem = base64_encode($row['car_image']);
                        ?>
                            <form action="#" method="post" class="FormMarCar">
                                <button class='QuadMarCar'>
                                    <img src="<?php echo "data:image/jpeg;base64,$imagem"; ?>">
                                    <font color="#004aad" size="5">
                                        <h1><?php echo "$marca" . " $modelo"; ?></h1>
                                    </font>
                                    <input type="hidden" name="Carros" value="Carros">
                                    <input type="hidden" name="CarCod" value="<?php echo "$cod"; ?>">
                                </button>
                            </form>
                    <?php
                            }
                        }
                    ?>
                    </div>
                <?php
                    }

                    $teste = "SELECT * FROM carros WHERE car_marca='$marca'";
                    $comando = mysqli_query($conn, $teste);
                    while ($row = mysqli_fetch_array($comando)) {
                        $tipo = $row['car_tipo'];
                ?>
                    </div>
                    <?php
                        if ($tipo == "Eletricos") {
                    ?>
                        <div class="LetrasMarCar">
                            <?php
                            echo "<h3>Eletricos</h3>";
                            echo "<hr>";
                            ?>
                        </div>
                        <div class="MarCarQuad">
                            <?php
                            $carros = "SELECT * FROM carros WHERE car_marca='$marca' and car_tipo='Eletricos'";
                            $comando = mysqli_query($conn, $carros);
                            while ($row = mysqli_fetch_array($comando)) {
                                $cod = $row['car_cod'];
                                $marca = $row['car_marca'];
                                $modelo = $row['car_modelo'];
                                $tipo = $row['car_tipo'];
                                $imagem = base64_encode($row['car_image']);
                            ?>
                                <form action="#" method="post" class="FormMarCar">
                                    <button class='QuadMarCar'>
                                        <img src="<?php echo "data:image/jpeg;base64,$imagem"; ?>">
                                        <font color="#004aad" size="5">
                                            <h1><?php echo "$marca" . " $modelo"; ?></h1>
                                        </font>
                                        <input type="hidden" name="Carros" value="Carros">
                                        <input type="hidden" name="CarCod" value="<?php echo "$cod"; ?>">
                                    </button>
                                </form>
                        <?php
                            }
                        }
                        ?>
                        </div>
                <?php
                    }
                }
                ?>
            <?php
        } else if ($_POST['Veiculos']) {
            ?>
                <div class="QuadVeiculos">
                    <div class="EsquerdaVeiculos">
                        <h3>Opcionais</h3>
                        <hr>
                        <?php
                        $opcionais = "SELECT * FROM especificacoes WHERE esp_tipo LIKE '%Opcionais%'";
                        $comando = mysqli_query($conn, $opcionais);
                        while ($row = mysqli_fetch_array($comando)) {
                            $esp = $row['esp_especificacoes'];
                            echo "<h5 style='margin-bottom:10px'><input type=checkbox value='$esp' id='$esp' onchange='addTexto()'>$esp</h5>";
                        }
                        ?>

                        <h3>Cambio</h3>
                        <hr>
                        <?php
                        $Cambio = "SELECT * FROM especificacoes WHERE esp_tipo LIKE '%Cambio%'";
                        $comando = mysqli_query($conn, $Cambio);
                        while ($row = mysqli_fetch_array($comando)) {
                            $esp = $row['esp_especificacoes'];
                            echo "<h5 style='margin-bottom:10px'><input type=checkbox value='$esp' id='$esp' onchange='addTexto()'>$esp</h5>";
                        }
                        ?>

                        <h3>Combustivel</h3>
                        <hr>
                        <?php
                        $Combustivel = "SELECT * FROM especificacoes WHERE esp_tipo LIKE '%Combustivel%'";
                        $comando = mysqli_query($conn, $Combustivel);
                        while ($row = mysqli_fetch_array($comando)) {
                            $esp = $row['esp_especificacoes'];
                            echo "<h5 style='margin-bottom:10px'><input type=checkbox value='$esp' id='$esp' onchange='addTexto()'>$esp</h5>";
                        }
                        ?>

                        <h3>Categorias</h3>
                        <hr>
                        <?php
                        $Categorias = "SELECT * FROM especificacoes WHERE esp_tipo LIKE '%Categorias%'";
                        $comando = mysqli_query($conn, $Categorias);
                        while ($row = mysqli_fetch_array($comando)) {
                            $esp = $row['esp_especificacoes'];
                            echo "<h5 style='margin-bottom:10px'><input type=checkbox value='$esp' id='$esp' onchange='addTexto()'>$esp</h5>";
                        }
                        ?>

                        <form action="#" method="post" style="margin-top: 20px;">
                            <input type="hidden" name="Veiculos" value="Veiculos">
                            <input type="hidden" name="ProcuraVeiculos" value="ProcuraVeiculos">
                            <input type="hidden" name="Tudo" id="Tudo">
                            <button style="margin-bottom: 20px;" class="button-6">Buscar</button>
                        </form>
                        <form action="#" method="post">
                            <input type="hidden" name="Veiculos" value="Veiculos">
                            <button class="button-6">Apagar Filtros</button>
                        </form>
                    </div>
                    <div class="DireitaVeiculos">
                        <?php
                        if ($_POST['ProcuraVeiculos']) {
                            $tudo = $_POST['Tudo'];
                            if ($tudo != "") {
                        ?>
                                <div class="QuadVeiculosQuad">
                                    <?php
                                    $carrosExibidos = array();
                                    $tudo = explode(",", $tudo);
                                    $procurar = "SELECT * FROM carros WHERE 1 = 1";
                                    foreach ($tudo as $valor) {
                                        $procurar .= " AND car_outros LIKE '%$valor%' = 1";
                                    }
                                    $comando = mysqli_query($conn, $procurar);
                                    while ($row = mysqli_fetch_array($comando)) {
                                        $cod = $row['car_cod'];
                                        $marca = $row['car_marca'];
                                        $modelo = $row['car_modelo'];
                                        $tipo = $row['car_tipo'];
                                        $outro = $row['car_outros'];
                                        $imagem = base64_encode($row['car_image']);
                                        if (in_array($cod, $carrosExibidos)) {
                                            continue;
                                        }
                                        $carrosExibidos[] = $cod;
                                    ?>
                                        <div style="display: flex; flex-direction: column;">
                                            <form action=# method=post>
                                                <input type="hidden" name="Carros" value="Carros">
                                                <input type="hidden" name="CarCod" value="<?php echo "$cod"; ?>">
                                                <button class="VeiQuadQuad">
                                                    <?php echo "<img src='data:image/jpeg;base64,$imagem'>"; ?>
                                                    <center>
                                                        <h5><?php echo "$marca $modelo" ?></h5>
                                                    </center>
                                                </button>
                                            </form>
                                            <?php
                                            if (isset($_SESSION['login'])) {
                                                if ($codigousu == "1" || $codigousu == "2") {
                                            ?>
                                                    <center>
                                                        <form method="post" action="tudo.php">
                                                            <input type="hidden" name="ExcVei" value="ExcVei">
                                                            <input type="hidden" name="CodVei" value="<?php echo "$cod"; ?>">
                                                            <button>Excluir</button>
                                                        </form>
                                                        <form method=post action=#>
                                                            <input type="hidden" name="EdiVei" value="EdiVei">
                                                            <input type="hidden" name="CodEdi" value="<?php echo "$cod"; ?>">
                                                            <button>Editar</button>
                                                        </form>
                                                    </center>
                                            <?php
                                                }
                                            } else {
                                                echo "";
                                            }
                                            ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <?php
                            }
                        } else {
                            $teste = "SELECT * FROM carros";
                            $comando = mysqli_query($conn, $teste);
                            while ($row = mysqli_fetch_array($comando)) {
                                $tipo = $row['car_tipo'];
                                if ($tipo == "Sedans") {
                                    echo "<h3 style='margin-top:20px;'>Sedans</h3><hr>";
                                ?>
                                    <div class="QuadVeiculosQuad">
                                        <?php
                                        $carros = "SELECT * FROM carros WHERE car_tipo='Sedans' ORDER BY car_contagem desc LIMIT 3";
                                        $comando = mysqli_query($conn, $carros);
                                        while ($row = mysqli_fetch_array($comando)) {
                                            $cod = $row['car_cod'];
                                            $marca = $row['car_marca'];
                                            $modelo = $row['car_modelo'];
                                            $tipo = $row['car_tipo'];
                                            $imagem = base64_encode($row['car_image']);
                                        ?>
                                            <div style="display: flex; flex-direction: column;">
                                                <form action=# method=post>
                                                    <input type="hidden" name="Carros" value="Carros">
                                                    <input type="hidden" name="CarCod" value="<?php echo "$cod" ?>">
                                                    <button class="VeiQuadQuad">
                                                        <?php echo "<img src='data:image/jpeg;base64,$imagem'>"; ?>
                                                        <center>
                                                            <h5>
                                                                <?php echo "$marca $modelo"; ?>
                                                            </h5>
                                                        </center>
                                                        <input type=hidden name=cod value=$cod>
                                                    </button>
                                                </form>
                                                <?php
                                                if (isset($_SESSION['login'])) {
                                                    if ($codigousu == "1" || $codigousu == "2") {
                                                ?>
                                                        <center>
                                                            <form method="post" action="tudo.php">
                                                                <input type="hidden" name="ExcVei" value="ExcVei">
                                                                <input type="hidden" name="CodVei" value="<?php echo "$cod"; ?>">
                                                                <button>Excluir</button>
                                                            </form>
                                                            <form method=post action=#>
                                                                <input type="hidden" name="EdiVei" value="EdiVei">
                                                                <input type="hidden" name="CodEdi" value="<?php echo "$cod"; ?>">
                                                                <button>Editar</button>
                                                            </form>
                                                        </center>
                                                <?php
                                                    }
                                                } else {
                                                    echo "";
                                                }
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                            }

                            $teste = "SELECT * FROM carros";
                            $comando = mysqli_query($conn, $teste);
                            while ($row = mysqli_fetch_array($comando)) {
                                $tipo = $row['car_tipo'];
                                if ($tipo == "Picapes") {
                                    echo "<h3 style='margin-top:20px;'>Picapes</h3><hr>";
                                ?>
                                    <div class="QuadVeiculosQuad">
                                        <?php
                                        $carros = "SELECT * FROM carros WHERE car_tipo='Picapes' ORDER BY car_contagem desc LIMIT 3";
                                        $comando = mysqli_query($conn, $carros);
                                        while ($row = mysqli_fetch_array($comando)) {
                                            $cod = $row['car_cod'];
                                            $marca = $row['car_marca'];
                                            $modelo = $row['car_modelo'];
                                            $tipo = $row['car_tipo'];
                                            $imagem = base64_encode($row['car_image']);
                                        ?>
                                            <div style="display: flex; flex-direction: column;">
                                                <form action=# method=post>
                                                    <input type="hidden" name="Carros" value="Carros">
                                                    <input type="hidden" name="CarCod" value="<?php echo "$cod" ?>">
                                                    <button class="VeiQuadQuad">
                                                        <?php echo "<img src='data:image/jpeg;base64,$imagem'>"; ?>
                                                        <center>
                                                            <h5>
                                                                <?php echo "$marca $modelo"; ?>
                                                            </h5>
                                                        </center>
                                                        <input type=hidden name=cod value=$cod>
                                                    </button>
                                                </form>
                                                <?php
                                                if (isset($_SESSION['login'])) {
                                                    if ($codigousu == "1" || $codigousu == "2") {
                                                ?>
                                                        <center>
                                                            <form method="post" action="tudo.php">
                                                                <input type="hidden" name="ExcVei" value="ExcVei">
                                                                <input type="hidden" name="CodVei" value="<?php echo "$cod"; ?>">
                                                                <button>Excluir</button>
                                                            </form>
                                                            <form method=post action=#>
                                                                <input type="hidden" name="EdiVei" value="EdiVei">
                                                                <input type="hidden" name="CodEdi" value="<?php echo "$cod"; ?>">
                                                                <button>Editar</button>
                                                            </form>
                                                        </center>
                                                <?php
                                                    }
                                                } else {
                                                    echo "";
                                                }
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                            }

                            $teste = "SELECT * FROM carros";
                            $comando = mysqli_query($conn, $teste);
                            while ($row = mysqli_fetch_array($comando)) {
                                $tipo = $row['car_tipo'];
                                if ($tipo == "Hatchers") {
                                    echo "<h3 style='margin-top:20px;'>Hatchers</h3><hr>";
                                ?>
                                    <div class="QuadVeiculosQuad">
                                        <?php
                                        $carros = "SELECT * FROM carros WHERE car_tipo='Hatchers' ORDER BY car_contagem desc LIMIT 3";
                                        $comando = mysqli_query($conn, $carros);
                                        while ($row = mysqli_fetch_array($comando)) {
                                            $cod = $row['car_cod'];
                                            $marca = $row['car_marca'];
                                            $modelo = $row['car_modelo'];
                                            $tipo = $row['car_tipo'];
                                            $imagem = base64_encode($row['car_image']);
                                        ?>
                                            <div style="display: flex; flex-direction: column;">
                                                <form action=# method=post>
                                                    <input type="hidden" name="Carros" value="Carros">
                                                    <input type="hidden" name="CarCod" value="<?php echo "$cod" ?>">
                                                    <button class="VeiQuadQuad">
                                                        <?php echo "<img src='data:image/jpeg;base64,$imagem'>"; ?>
                                                        <center>
                                                            <h5>
                                                                <?php echo "$marca $modelo"; ?>
                                                            </h5>
                                                        </center>
                                                        <input type=hidden name=cod value=$cod>
                                                    </button>
                                                </form>
                                                <?php
                                                if (isset($_SESSION['login'])) {
                                                    if ($codigousu == "1" || $codigousu == "2") {
                                                ?>
                                                        <center>
                                                            <form method="post" action="tudo.php">
                                                                <input type="hidden" name="ExcVei" value="ExcVei">
                                                                <input type="hidden" name="CodVei" value="<?php echo "$cod"; ?>">
                                                                <button>Excluir</button>
                                                            </form>
                                                            <form method=post action=#>
                                                                <input type="hidden" name="EdiVei" value="EdiVei">
                                                                <input type="hidden" name="CodEdi" value="<?php echo "$cod"; ?>">
                                                                <button>Editar</button>
                                                            </form>
                                                        </center>
                                                <?php
                                                    }
                                                } else {
                                                    echo "";
                                                }
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                            }

                            $teste = "SELECT * FROM carros";
                            $comando = mysqli_query($conn, $teste);
                            while ($row = mysqli_fetch_array($comando)) {
                                $tipo = $row['car_tipo'];
                                if ($tipo == "SUVs") {
                                    echo "<h3 style='margin-top:20px;'>SUVs</h3><hr>";
                                ?>
                                    <div class="QuadVeiculosQuad">
                                        <?php
                                        $carros = "SELECT * FROM carros WHERE car_tipo='SUVs' ORDER BY car_contagem desc LIMIT 3";
                                        $comando = mysqli_query($conn, $carros);
                                        while ($row = mysqli_fetch_array($comando)) {
                                            $cod = $row['car_cod'];
                                            $marca = $row['car_marca'];
                                            $modelo = $row['car_modelo'];
                                            $tipo = $row['car_tipo'];
                                            $imagem = base64_encode($row['car_image']);
                                        ?>
                                            <div style="display: flex; flex-direction: column;">
                                                <form action=# method=post>
                                                    <input type="hidden" name="Carros" value="Carros">
                                                    <input type="hidden" name="CarCod" value="<?php echo "$cod" ?>">
                                                    <button class="VeiQuadQuad">
                                                        <?php echo "<img src='data:image/jpeg;base64,$imagem'>"; ?>
                                                        <center>
                                                            <h5>
                                                                <?php echo "$marca $modelo"; ?>
                                                            </h5>
                                                        </center>
                                                        <input type=hidden name=cod value=$cod>
                                                    </button>
                                                </form>
                                                <?php
                                                if (isset($_SESSION['login'])) {
                                                    if ($codigousu == "1" || $codigousu == "2") {
                                                ?>
                                                        <center>
                                                            <form method="post" action="tudo.php">
                                                                <input type="hidden" name="ExcVei" value="ExcVei">
                                                                <input type="hidden" name="CodVei" value="<?php echo "$cod"; ?>">
                                                                <button>Excluir</button>
                                                            </form>
                                                            <form method=post action=#>
                                                                <input type="hidden" name="EdiVei" value="EdiVei">
                                                                <input type="hidden" name="CodEdi" value="<?php echo "$cod"; ?>">
                                                                <button>Editar</button>
                                                            </form>
                                                        </center>
                                                <?php
                                                    }
                                                } else {
                                                    echo "";
                                                }
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                <?php
                                }
                            }

                            $teste = "SELECT * FROM carros";
                            $comando = mysqli_query($conn, $teste);
                            while ($row = mysqli_fetch_array($comando)) {
                                $tipo = $row['car_tipo'];
                                if ($tipo == "Esportivos") {
                                    echo "<h3 style='margin-top:20px;'>Esportivos</h3><hr>";
                                ?>
                                    <div class="QuadVeiculosQuad">
                                        <?php
                                        $carros = "SELECT * FROM carros WHERE car_tipo='Esportivos' ORDER BY car_contagem desc LIMIT 3";
                                        $comando = mysqli_query($conn, $carros);
                                        while ($row = mysqli_fetch_array($comando)) {
                                            $cod = $row['car_cod'];
                                            $marca = $row['car_marca'];
                                            $modelo = $row['car_modelo'];
                                            $tipo = $row['car_tipo'];
                                            $imagem = base64_encode($row['car_image']);
                                        ?>
                                            <div style="display: flex; flex-direction: column;">
                                                <form action=# method=post>
                                                    <input type="hidden" name="Carros" value="Carros">
                                                    <input type="hidden" name="CarCod" value="<?php echo "$cod" ?>">
                                                    <button class="VeiQuadQuad">
                                                        <?php echo "<img src='data:image/jpeg;base64,$imagem'>"; ?>
                                                        <center>
                                                            <h5>
                                                                <?php echo "$marca $modelo"; ?>
                                                            </h5>
                                                        </center>
                                                        <input type=hidden name=cod value=$cod>
                                                    </button>
                                                </form>
                                                <?php
                                                if (isset($_SESSION['login'])) {
                                                    if ($codigousu == "1" || $codigousu == "2") {
                                                ?>
                                                        <center>
                                                            <form method="post" action="tudo.php">
                                                                <input type="hidden" name="ExcVei" value="ExcVei">
                                                                <input type="hidden" name="CodVei" value="<?php echo "$cod"; ?>">
                                                                <button>Excluir</button>
                                                            </form>
                                                            <form method=post action="#">
                                                                <input type="hidden" name="EdiVei" value="EdiVei">
                                                                <input type="hidden" name="CodEdi" value="<?php echo "$cod"; ?>">
                                                                <button>Editar</button>
                                                            </form>
                                                        </center>
                                                <?php
                                                    }
                                                } else {
                                                    echo "";
                                                }
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                        <?php
                                }
                            }
                            echo "<br><center style=margin-bottom:20px;><a href='index.php'><button class=button-6>Voltar</button></a></center>";
                        }
                        ?>
                    </div>
                </div>
            <?php
        } else if ($_POST['EdiVei']) {
            ?>
                <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                    <?php
                    $cod = $_POST['CodEdi'];
                    $editcar = "SELECT * FROM carros WHERE car_cod=$cod";
                    $comando = mysqli_query($conn, $editcar);
                    while ($row = mysqli_fetch_array($comando)) {
                        $marca = $row['car_marca'];
                        $modelo = $row['car_modelo'];
                        $tipo = $row['car_tipo'];
                        $imagem = base64_encode($row['car_image']);
                        echo "
                                        <form method=post action=tudo.php>
                                            <input type='hidden' name='EdiVei' value='EdiVei'>
                                            <input type=hidden name=cod value='$cod'><br>
                                            <h1>Marca <input style='font-size:20px;' type=text name=marca value='$marca'></h1><br>
                                            <h1>Modelo <input style='font-size:20px;' type=text name=modelo value='$modelo'></h1><br>
                                            <h1>Tipo<select name=tipo style='font-size:20px;'>
                                                        <option value=$tipo>$tipo</option>
                                                        <option value=SUVs>SUVs</option>
                                                        <option value=Hatchers>Hatchers</option>
                                                        <option value=Picapes>Picapes</option>
                                                        <option value=Eletricos>Eletricos</option>
                                                        <option value=Sedans>Sedans</option>
                                                    </select></h1>";
                    ?>
                        <h1 style="margin-top: 20px;">Opcionais</h1>
                        <hr>
                        <?php
                        $opcionais = "SELECT * FROM especificacoes WHERE esp_tipo LIKE '%Opcionais%'";
                        $comando = mysqli_query($conn, $opcionais);
                        while ($row = mysqli_fetch_array($comando)) {
                            $esp = $row['esp_especificacoes'];
                            echo "<h3><input style='font-size:20px;' type=checkbox id='$esp' value='$esp' onchange='addTexto()'>$esp</h3>";
                        }
                        ?>
                        <div class="cambio" style="margin-top: 20px;">
                            <h1>Cambio</h1>
                            <hr>
                            <?php
                            $Cambio = "SELECT * FROM especificacoes WHERE esp_tipo LIKE '%Cambio%'";
                            $comando = mysqli_query($conn, $Cambio);
                            while ($row = mysqli_fetch_array($comando)) {
                                $esp = $row['esp_especificacoes'];
                                echo "<h3><input style='font-size:30px;' type=checkbox id='$esp' value='$esp' onchange='addTexto()'>$esp</h3>";
                            }
                            ?>
                        </div>
                        <div class="combustivel" style="margin-top: 20px;">
                            <h1>Combustivel</h1>
                            <hr>
                            <?php
                            $Combustivel = "SELECT * FROM especificacoes WHERE esp_tipo LIKE '%Combustivel%'";
                            $comando = mysqli_query($conn, $Combustivel);
                            while ($row = mysqli_fetch_array($comando)) {
                                $esp = $row['esp_especificacoes'];
                                echo "<h3><input style='font-size:30px;' type=checkbox id='$esp' value='$esp' onchange='addTexto()'>$esp</h3>";
                            }
                            ?>
                        </div>
                        <div class="categoria" style="margin-top: 20px;">
                            <h1>Categorias</h1>
                            <hr>
                            <?php
                            $Categorias = "SELECT * FROM especificacoes WHERE esp_tipo LIKE '%Categorias%'";
                            $comando = mysqli_query($conn, $Categorias);
                            while ($row = mysqli_fetch_array($comando)) {
                                $esp = $row['esp_especificacoes'];
                                echo "<h3><input style='font-size:30px;' type=checkbox id='$esp' value='$esp' onchange='addTexto()'>$esp</h3>";
                            }
                            ?>
                            <input type="hidden" name="Tudo" id="Tudo">
                        <?php
                        echo "
            <button class=button-6>Editar</button>
            <a href='../index.php'><button type=button class=button-6 style='margin-bottom:20px;margin-top:20px;'>Voltar</button></a>
        </form>
        ";
                    }
                        ?>
                        </div>
                </div>
            <?php
        } else {
            ?>
                <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="bd-placeholder-img" src="./Imagens/Senna.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        </div>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img" src="./Imagens/Senna.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        </div>
                        <div class="carousel-item">
                            <img class="bd-placeholder-img" src="./Imagens/Senna.png" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="ModImg">
                    <h1>Modelos</h1>
                    <hr>
                    <div class="ModQuad">
                        <form action="#" method="post">
                            <input type="hidden" name="Modelos" value="Sedans">
                            <button type="submit" class="QuadMod">
                                <img src="./Imagens/Sedans.png">
                                <h3>Sedans</h3>
                            </button>
                        </form>
                        <form action="#" method="post">
                            <input type="hidden" name="Modelos" value="Hatchers">
                            <button type="submit" class="QuadMod">
                                <img src="./Imagens/Hatchers.png">
                                <h3>Hatchers</h3>
                            </button>
                        </form>
                        <form action="#" method="post">
                            <input type="hidden" name="Modelos" value="Esportivos">
                            <button type="submit" class="QuadMod">
                                <img src="./Imagens/Esportivos.png">
                                <h3>Esportivos</h3>
                            </button>
                        </form>
                        <form action="#" method="post">
                            <input type="hidden" name="Modelos" value="Picapes">
                            <button type="submit" class="QuadMod">
                                <img src="./Imagens/Picapes.png">
                                <h3>Picapes</h3>
                            </button>
                        </form>
                        <form action="#" method="post">
                            <input type="hidden" name="Modelos" value="SUVs">
                            <button type="submit" class="QuadMod">
                                <img src="./Imagens/SUVs.png">
                                <h3>SUVs</h3>
                            </button>
                        </form>
                        <form action="#" method="post">
                            <input type="hidden" name="Modelos" value="Eletricos">
                            <button type="submit" class="QuadMod">
                                <img src="./Imagens/Eletricos.png">
                                <h3>Eletricos</h3>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="VisImg">
                    <h1>Carros Mais Vistos</h1>
                    <hr>
                    <div class="VisQuad">
                        <?php
                        $carrosvis = "SELECT * FROM carros ORDER BY car_contagem desc LIMIT 4";
                        $comando = mysqli_query($conn, $carrosvis);
                        while ($row = mysqli_fetch_array($comando)) {
                            $cod = $row['car_cod'];
                            $marca = $row['car_marca'];
                            $modelo = $row['car_modelo'];
                            $tipo = $row['car_tipo'];
                            $imagem = base64_encode($row['car_image']);
                            $contagem = $row['car_contagem'];
                        ?>
                            <form action="#" method="post">
                                <button class="QuadVis">
                                    <input type="hidden" name="Carros" value="Carros">
                                    <input type="hidden" name="CarCod" value="<?php echo "$cod"; ?>">
                                    <?php echo "<img class=perfil src=data:image/jpeg;base64,$imagem>"; ?>
                                    <font size='5px' color=#004aad><?php echo "$marca" . " " . "$modelo" ?></font>
                                </button>
                            </form>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            <?php
        }
            ?>

            <svg xmlns='http://www.w3.org/2000/svg' style='display: none;'>
                <symbol id='facebook' viewBox='0 0 16 16'>
                    <path d='M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z' />
                </symbol>
                <symbol id='instagram' viewBox='0 0 16 16'>
                    <path d='M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z' />
                </symbol>
                <symbol id='twitter' viewBox='0 0 16 16'>
                    <path d='M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z' />
                </symbol>
            </svg>
            <div class='container-fluid containerarrumar'>
                <footer class='d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top'>
                    <div class='col-md-4 d-flex align-items-center'>
                        <a href='/' class='mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1'>
                            <img src='Imagens/Logo.png' style='width:100px; height:auto;'>
                        </a>
                        <span class='mb-3 mb-md-0 text-body-secondary'>&copy; 2023 Company, Inc</span>
                    </div>

                    <ul class='nav col-md-4 justify-content-end list-unstyled d-flex'>
                        <li class='ms-3'><a class='text-body-secondary' href='https://www.instagram.com/descomplicarsofc/' target='_blank'><svg class='bi' width='24' height='24'>
                                    <use xlink:href='#instagram' />
                                </svg></a></li>
                    </ul>
                </footer>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
            <script src="script.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>