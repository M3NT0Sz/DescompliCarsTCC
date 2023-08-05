<?php
session_start();
include_once("conexao.php");

if ($_POST['CadOpn']) {
    if (isset($_SESSION['login']) || isset($_SESSION['edit'])) {
        $codigocar = $_POST['codigocar'];
        $codigousu = $_POST['codigousu'];
        $_SESSION['codigocar'] = $codigocar;
        $_SESSION['codigousu'] = $codigousu;
        header("location: index.php");
        $_SESSION['TudoTudo'] = "CadastroOpn";
    } else {
        header("location: index.php");
        $_SESSION['TudoTudo'] = "Usuarios";
    }
}

if ($_POST['Login']) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));

    $sql = "SELECT * FROM usuarios WHERE usu_email = '$email' and usu_senha = '$senha'";
    $result = mysqli_query($conn, $sql);
    $row_usuario = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) == 1) {
        if (!isset($_SESSION['loginA'])) {
            $_SESSION['loginA'] = array();
        }

        $_SESSION['loginA'][] = array(
            'cod' => $row_usuario['usu_cod'],
            'nome' => $row_usuario['usu_nome'],
            'sobrenome' => $row_usuario['usu_sobrenome']
        );
        $_SESSION['TudoTudo'] = "Perfil";
        $_SESSION['login'] = "<center>" . $row_usuario['usu_nome'] . " " . $row_usuario['usu_sobrenome'] . "</center><input type=hidden name=codigo value=" . $row_usuario['usu_cod'] . ">";
        header("Location: index.php");
    } else {
        $_SESSION['TudoTudo'] = "Usuarios";
        $_SESSION['ErroUsu'] = "<p style='color:#004aad;'>Email ou Senha incorretos!</p>";
        header("Location: index.php");
    }
}

if ($_POST['Sair']) {
    session_destroy();
    header("location: index.php");
}

if ($_POST['CadastroOpn']) {
    $codcar = $_POST['codcar'];
    $codusu = $_POST['codusu'];
    $marca = $_POST['MarcaOpn'];
    $modelo = $_POST['ModeloOpn'];
    $opiniao = $_POST['OpnOpn'];
    $avaliacao = $_POST['avaliacao'];
    $anomod = $_POST['AnoModOpn'];
    $pros = $_POST['ProOpn'];
    $contra = $_POST['ConOpn'];

    $usuario = "SELECT usu_nome, usu_sobrenome, usu_image FROM usuarios WHERE usu_cod='$codusu'";
    $comando = mysqli_query($conn, $usuario);
    while ($row = mysqli_fetch_array($comando)) {
        $nomeusu = $row['usu_nome'] . " " . $row['usu_sobrenome'];
        $sql = "INSERT INTO opnioes (opn_pessoa, opn_opiniao, opn_carro, opn_marca, opn_codusu, opn_avaliacao, opn_anomod, opn_pros, opn_contra) VALUES ('$nomeusu', '$opiniao', '$modelo', '$marca', '$codusu', '$avaliacao', '$anomod', '$pros', '$contra')";
        $comando = mysqli_query($conn, $sql);

        if (mysqli_insert_id($conn)) {
            $_SESSION['codigocarro'] = $codcar;
            header("Location: index.php");
            $_SESSION['TudoTudo'] = "Carros";
        } else {
            $_SESSION['msgC'] = "<p style='color:#004aad;'>Opinião não foi cadastrado com sucesso</p>";
            header("Location: index.php");
        }
    }
}

if ($_POST['EditarComentario']) {
    $codigoopn = $_POST['codigo'];
    $opiniao = $_POST['opiniao'];
    $avaliacao = $_POST['avaliacao'];
    $pros = $_POST['pros'];
    $contra = $_POST['contra'];
    $sql = "UPDATE opnioes SET opn_opiniao = '$opiniao', opn_pros = '$pros', opn_contra = '$contra', opn_avaliacao = '$avaliacao' WHERE opn_cod = '$codigoopn'";
    $comando = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn)) {
        $_SESSION['msgC'] = "Comentario editado com sucesso";
        $_SESSION['TudoTudo'] = "Perfil";
        header("location: index.php");
    } else {
        $_SESSION['TudoTudo'] = "Perfil";
        $_SESSION['msgC'] = "Comentario não editado";
        header("location: index.php");
    }
}

if ($_POST['EditarPer']) {
    $cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $dtnasc = filter_input(INPUT_POST, 'dtnasc', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $cid = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);

    $imagem = $_FILES['imagemperfil']['tmp_name'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (empty($imagem)) {
            $sql = "UPDATE usuarios SET usu_nome = '$nome', usu_sobrenome = '$sobrenome', usu_email = '$email', usu_dtnasc = '$dtnasc', usu_cpf = '$cpf', usu_endereco = '$endereco', usu_cidade = '$cid', usu_estado = '$estado', usu_genero = '$genero' WHERE usu_cod = '$cod'";
            $comando = mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn)) {
                $_SESSION['TudoTudo'] = "Perfil";
                $_SESSION['editado'] = "Usuario editado com sucesso";
                unset($_SESSION['login']);
                $_SESSION['login'] = "<center>" . $nome . " " . $sobrenome . "</center>";
                header("location: index.php");
            } else {
                $_SESSION['TudoTudo'] = "Perfil";
                $_SESSION['msgC'] = "Usuario não editado";
                header("location: index.php");
            }
        } else {
            $imageInfo = getimagesize($imagem);
            if ($imageInfo !== false) {
                $imagem = addslashes(file_get_contents($_FILES['imagemperfil']['tmp_name']));
                $sql = "UPDATE usuarios SET usu_nome = '$nome', usu_sobrenome = '$sobrenome', usu_email = '$email', usu_dtnasc = '$dtnasc', usu_cpf = '$cpf', usu_endereco = '$endereco', usu_cidade = '$cid', usu_estado = '$estado', usu_genero = '$genero', usu_image = '$imagem' WHERE usu_cod = '$cod'";
                $comando = mysqli_query($conn, $sql);
                if (mysqli_affected_rows($conn)) {
                    $_SESSION['TudoTudo'] = "Perfil";
                    $_SESSION['editado'] = "Usuario editado com sucesso";
                    unset($_SESSION['login']);
                    $_SESSION['login'] = "<center>" . $nome . " " . $sobrenome . "</center>";
                    header("location:../Perfil.php");
                } else {
                    $_SESSION['TudoTudo'] = "Perfil";
                    $_SESSION['msgC'] = "Usuario não editado";
                    header("location: index.php");
                }
            } else {
                $_SESSION['TudoTudo'] = "Perfil";
                $_SESSION['msgC'] = "<font color='#004aad'><h3>Por favor insira uma imagem que exista</h3></font>";
                header("Location: index.php");
            }
        }
    }
}

if ($_POST['CadVeiculos']) {
    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $versao = filter_input(INPUT_POST, 'versao', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);

    $imagem = $_FILES['imagem']['tmp_name'];

    if (empty($imagem)) {
        $_SESSION['TudoTudo'] = "Perfil";
        $_SESSION['msgC'] = "Por favor insira uma imagem";
        header("location:index.php");
    } else {
        $imagem = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
        $sql = "insert into carros (car_marca, car_modelo, car_tipo, car_image) values ('$marca', '$modelo', '$tipo', '$imagem')";
        $comando = mysqli_query($conn, $sql);

        if (mysqli_insert_id($conn)) {
            $_SESSION['TudoTudo'] = "Perfil";
            $_SESSION['msgC'] = "<p style='color:#004aad;;'>Carro cadastrado com sucesso</p>";
            header("Location: index.php");
        } else {
            $_SESSION['TudoTudo'] = "Perfil";
            $_SESSION['msgC'] = "<p style='color:#004aad;;'>Carro não foi cadastrado com sucesso</p>";
            header("Location: index.php");
        }
    }
}

if ($_POST['CadMarcas']) {
    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $imagem = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));

    $sql = "insert into marcas (mar_nome, mar_image) values ('$marca', '$imagem')";
    $comando = mysqli_query($conn, $sql);

    if (mysqli_insert_id($conn)) {
        $_SESSION['TudoTudo'] = "Perfil";
        $_SESSION['msgC'] = "<p style='color:#004aad;'>Marca cadastrado com sucesso</p>";
        header("Location: index.php");
    } else {
        $_SESSION['TudoTudo'] = "Perfil";
        $_SESSION['msgC'] = "<p style='color:#004aad;'>Marca não foi cadastrado com sucesso</p>";
        header("Location: index.php");
    }
}

if ($_POST['CadEsp']) {
    $especificacao = $_POST['especificacao'];
    $tipo = $_POST['tipo'];
    $sql = "INSERT INTO especificacoes (esp_especificacoes, esp_tipo) VALUES ('$especificacao', '$tipo')";
    $comando = mysqli_query($conn, $sql);
    $_SESSION['TudoTudo'] = "Perfil";
    header("location:index.php");
}

if ($_POST['ExcUsu']) {
    $codUsu = $_POST['codUsu'];

    $sql = "DELETE FROM usuarios WHERE usu_cod = '$codUsu'";
    $comando  = mysqli_query($conn, $sql);
    $_SESSION['TudoTudo'] = "Perfil";
    header("location: index.php");
}

if ($_POST['ExcVei']) {
    $CodVei = $_POST['CodVei'];

    $sql = "DELETE FROM carros WHERE car_cod = '$CodVei'";
    $comando  = mysqli_query($conn, $sql);
    header("location: index.php");
}

if ($_POST['EdiVei']) {
    $cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_STRING);
    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
    $tudo = filter_input(INPUT_POST, 'Tudo', FILTER_SANITIZE_STRING);

    $sql = "UPDATE carros SET car_marca = '$marca', car_modelo = '$modelo', car_tipo = '$tipo', car_outros = '$tudo' WHERE car_cod='$cod'";
    $comando = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn)) {
        $_SESSION['TudoTudo'] = "Perfil";
        $_SESSION['msgC'] = "Carro editado com sucesso";
        header("location: index.php");
    } else {
        $_SESSION['TudoTudo'] = "Perfil";
        $_SESSION['msgC'] = "Carro não editado";
        header("location: index.php");
    }
}

if ($_POST['CadastroUsu']) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $telefone = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $dtnasc = filter_input(INPUT_POST, 'datanasc', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
    $senha = md5(filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING));
    $imagem = 0;
    $imagem = $_FILES['imagemperfil']['tmp_name'];



    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        if (empty($imagem)) {
            $imagem = addslashes(file_get_contents('Imagens/perfil.png'));
            $sql = "insert into usuarios (usu_email, usu_nome, usu_sobrenome, usu_tel, usu_dtnasc, usu_cpf, usu_endereco, usu_cidade, usu_estado, usu_genero, usu_senha, usu_image) values ('$email', '$nome', '$sobrenome', '$telefone', '$dtnasc', '$cpf', '$endereco', '$cidade', '$estado', '$genero', '$senha', '$imagem')";
            $comando = mysqli_query($conn, $sql);

            if (mysqli_insert_id($conn)) {
                $_SESSION['TudoTudo'] = "Usuarios";
                $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
                header("Location: index.php");
            } else {
                $_SESSION['TudoTudo'] = "Usuarios";
                $_SESSION['msg'] = "<p style='color:red;'>Usuario não foi cadastrado com sucesso</p>";
                header("Location: index.php");
            }
        } else {
            $imageInfo = getimagesize($imagem);
            if ($imageInfo !== false) {
                $imagem = addslashes(file_get_contents($_FILES['imagemperfil']['tmp_name']));
                $sql = "insert into usuarios (usu_email, usu_nome, usu_sobrenome, usu_tel, usu_dtnasc, usu_cpf, usu_endereco, usu_cidade, usu_estado, usu_genero, usu_senha, usu_image) values ('$email', '$nome', '$sobrenome', '$telefone', '$dtnasc', '$cpf', '$endereco', '$cidade', '$estado', '$genero', '$senha', '$imagem')";
                $comando = mysqli_query($conn, $sql);

                if (mysqli_insert_id($conn)) {
                    $_SESSION['TudoTudo'] = "Usuarios";
                    $_SESSION['msg'] = "<p style='color:green;'>Usuario cadastrado com sucesso</p>";
                    header("Location: index.php");
                } else {
                    $_SESSION['TudoTudo'] = "Usuarios";
                    $_SESSION['msg'] = "<p style='color:red;'>Usuario não foi cadastrado com sucesso</p>";
                    header("Location: index.php");
                }
            } else {
                $_SESSION['TudoTudo'] = "Usuarios";
                $_SESSION['msg'] = "<font color='#004aad'><h3>Por favor insira uma imagem que exista</h3></font>";
                header("Location: index.php");
            }
        }
    } else {
        $_SESSION['TudoTudo'] = "Usuarios";
        $_SESSION['msg'] = "<font color='#004aad'><h3>Email Invalido</h3></font>s";
        header("Location: index.php");
    }
}

if ($_POST['ExcComenCar']) {
    $cod = $_POST['cod'];
    $sql = "DELETE FROM opnioes WHERE opn_cod = '$cod'";
    $comando  = mysqli_query($conn, $sql);
    $_SESSION['TudoTudo'] = "Perfil";
    header("location: index.php");
}

if ($_POST['ExcComen']) {
    $cod = $_POST['codigoopn'];

    $sql = "DELETE FROM opnioes WHERE opn_cod = '$cod'";
    $comando  = mysqli_query($conn, $sql);
    if (mysqli_insert_id($conn)) {
        $_SESSION['TudoTudo'] = "Perfil";
        $_SESSION['msgC'] = "Comentario não Excluido com Sucesso!";
        header("location: index.php");
    } else {
        $_SESSION['TudoTudo'] = "Perfil";
        $_SESSION['msgC'] = "Comentario Excluido com Sucesso!";
        header("location: index.php");
    }
}
