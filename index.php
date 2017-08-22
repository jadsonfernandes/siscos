<?php
require 'config.php';

$UsuariosDAO = new UsuariosDAO();
$Usuario = new Usuario();
$usuario->setId(1);
$usuario->setNome("Jadson Fernandes dos Santos Bandeira");
$usuario->setRg("1551477572");
$usuario->setCpf("060.268.645-80");
$usuario->setSexo("Masculino");
$usuario->setEstado_civil("Solteiro");
$usuario->setData_nascimento("10/03/1995");
$usuario->setEndereco("Avenida Vereadora Ester Trindade Serra");
$usuario->setComplemento("Casa");
$usuario->setNumero(254);
$usuario->setBairro("Jardim Brasil");
$usuario->setCidade("Brumado");
$usuario->setUf("Bahia");
$usuario->setCep("46100-000");
$usuario->setEmail("jadsonbandeira16@gmail.com");
$usuario->setTelefone("(00) 0000-0000");
$usuario->setCelular("(77) 9 9944-6201");
$usuario->setLogin("admin");
$usuario->setSenha("admin");
$usuario->setPerfil("admin");

$paginasDAO->salvar($usuario);
var_dump($usuario);


//$paginas = $paginasDAO->buscar();

//echo "<pre>";
//var_dump($paginas);

//$pagina1 = $paginasDAO->buscarPorId(1);
//var_dump($pagina1);

//echo $paginasDAO->deletar(5);

/*
$paginasDAO = new PaginasDAO;
$paginasDAO->deletar(5);
echo "<br>";
$paginasDAO->buscarPorId(1);
echo "<br>";
$paginasDAO->buscar();
echo "<br>";

$pagina  = new Pagina();
$pagina->setTitulo("Meu Título");
$pagina->setConteudo("Meu Conteúdo");

$paginasDAO->salvar($pagina);

echo "<br>";
$pagina2  = new Pagina();
$pagina2->setTitulo("Meu Título");
$pagina2->setConteudo("Meu Conteúdo");
$pagina2->setId(5);

$paginasDAO->salvar($pagina2);
*/