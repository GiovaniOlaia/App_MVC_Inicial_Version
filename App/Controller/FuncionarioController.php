<?php

/**
 * Classes Controller são responsáveis por processar as requisições do usuário.
 * Isso significa que toda vez que um usuário chama uma rota, um método (função)
 * de uma classe Controller é chamado.
 * O método poderá devolver uma View (fazendo um include), acessar uma Model (para
 * buscar algo no banco de dados), redirecionar o usuário de rota, ou mesmo,
 * chamar outra Controller.
 */
class FuncionarioController 
{
    /**
     * Os métodos index serão usados para devolver uma View.
     * Para saber mais sobre métodos estáticos, leia: https://www.php.net/manual/pt_BR/language.oop5.static.php
     */
    public static function index()
    {
        // Para saber mais sobre include , leia: https://www.php.net/manual/pt_BR/function.include.php
        include 'Model/FuncionarioModel.php'; // inclusão do arquivo model.
        
        $model = new FuncionarioModel(); // Instância da Model
        $model->getAllRows(); // Obtendo todos os registros, abastecendo a propriedade $rows da model.

        include 'View/modules/Funcionario/ListaFuncionario.php'; // Include da View, propriedade $rows da Model pode ser acessada na View
    }


    /**
     * Devolve uma View contendo um formulário para o usuário.
     */
    public static function form()
    {
        include 'Model/FuncionarioModel.php'; // inclusão do arquivo model.
        $model = new FuncionarioModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/

        include 'View/modules/Funcionario/FormFuncionario.php'; // Include da View. Note que a variável $model está disponível na View.
    }


    /**
     * Preenche um Model para que seja enviado ao banco de dados para salvar.
     */
    public static function save()
    {
       include 'Model/FuncionarioModel.php'; // inclusão do arquivo model.

       // Abaixo cada propriedade do objeto sendo abastecida com os dados informados
       // pelo usuário no formulário (note o envio via POST)
       $model = new FuncionarioModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->cargo = $_POST['cargo'];

       $model->save(); // chamando o método save da model.

       header("Location: /funcionario"); // redirecionando o usuário para outra rota.
    }


    /**
     * Método para tratar a rota delete. 
     */
    public static function delete()
    {
        include 'Model/FuncionarioModel.php'; // inclusão do arquivo model.

        $model = new FuncionarioModel();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /funcionario"); // redirecionando o usuário para outra rota.
    }
}