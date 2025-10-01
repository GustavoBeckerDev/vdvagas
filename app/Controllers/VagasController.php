<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\M_Cad_Vagas;

class VagasController extends Controller
{
    public function index()
    {
        $CadVagasModel = new M_Cad_Vagas; // $produtoModel = $this->model('Produto');
        $vagas = $CadVagasModel->findAll();

        $baseUrl = '/vdvagas';

        $dataheader = [
            'title' => 'Lista de Vagas',
            'baseUrl' => $baseUrl
        ];

        $data = [
            'baseUrl' => $baseUrl,
            'vagas' => $vagas
        ];

        $this->view('layouts/header', $dataheader);
        $this->view('vagas/vagas', $data);
        $this->view('layouts/footer', $data);
    }
    public function ver($id = 0)
    {
        $CadVagasModel = $this->model('M_Cad_Vagas');
        $vaga = $CadVagasModel->find((int)$id);

        $data = [
            'title' => $vaga->nome ?? 'Vaga não encontrada',
            'vaga' => $vaga,
        ];
    }
    public function Cadastrar(){
        $this->view('layouts/header', ['titulo' => 'Cadastro de vagas']);
        $this->view('vagas/cadastrar');
    }
    public function Salvar(){

        $pes_id = $_POST['pes_id'];
        $ativa = $_POST['ativa'] == "True" ? true : false;
        $cidade_id = $_POST['cidade_id'];
        $escolaridade_id = $_POST['escolaridade_id'];
        $area_id = $_POST['area_id'];
        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $salario = $_POST['salario'];
        $inicio_divulgacao = $_POST['inicio_divulgacao'];
        $fim_divulgacao = $_POST['fim_divulgacao'];
        $descricao = $_POST['descricao'];
        $vaga_pcd = $_POST['vaga_pcd'] == "True" ? true : false;
        $vaga_estagio = $_POST['vaga_estagio'] == "True" ? true : false;
        $vaga_aprendiz = $_POST['vaga_aprendiz'] == "True" ? true : false;

        $CadVagasModel = new M_Cad_Vagas();
        $data=['pes_id'=>$pes_id,
               'ativa'=>$ativa,
               'cidade_id'=>$cidade_id,
               'escolaridade_id'=>$escolaridade_id,
               'area_id'=>$area_id,
               'nome'=>$nome,
               'funcao'=>$funcao,
               'salario'=>$salario,
               'inicio_divulgacao'=>$inicio_divulgacao,
               'fim_divulgacao'=>$fim_divulgacao,
               'descricao'=>$descricao,
               'vaga_pcd'=>$vaga_pcd,
               'vaga_estagio'=>$vaga_estagio,
               'vaga_aprendiz'=>$vaga_aprendiz];

        if (isset($_POST['id'])){
          $CadVagasModel-> update($_POST['id'], $data);    
        }
        else{
          $CadVagasModel-> create($data);
        }
        $this->redirect(url_to('/'));
    }
    public function editar($id)
    {
        $CadVagasModel = new M_Cad_Vagas();
        $data['vaga'] = $CadVagasModel->find($id);
        $this->view('layouts/header', ['titulo' => 'Alteração de vagas']);
        $this->view('vagas/cadastrar', $data);
        $this->view('layouts/footer');
    }
    public function excluir($id)
    {
        $CadVagasModel = new M_Cad_Vagas();
        if($CadVagasModel->delete($id))
        {
            echo "Excluído com sucesso!";
            $this->redirect(url_to('/vagas'));        
        }
        else
        {
            $this->redirect(url_to('/vagas'));        
        }
    }
}