<?php

namespace App\Controller;

class PerguntasController extends AppController {
  public function index() {
    $perguntas = $this->Perguntas
      ->find()
      ->contain(['Usuarios', 'Respostas']);
    
    $this->paginate = [
      'contain' => ['Usuarios', 'Respostas']
    ];

    $perguntas = $this->paginate($this->Perguntas);

    $this->set('perguntas', $perguntas);

    $pergunta = $this->Perguntas->newEmptyEntity();

    $this->set('pergunta', $pergunta);
  }

  public function add() {
    $pergunta = $this->Perguntas->newEmptyEntity();

    if ($this->request->is('post')) {
      $pergunta = $this->Perguntas->patchEntity($pergunta, $this->request->getData());
      
      $usuarioLogado = $this->Authentication->getIdentity();

      $pergunta["usuario_id"] = $usuarioLogado->id;

      if ($this->Perguntas->save($pergunta)) {
        $this->Flash->success("Pergunta criada!");
        return $this->redirect(['action' => 'index']);
      }

      $this->Flash->error("Erro ao criar pergunta");
    }

    $this->set('pergunta', $pergunta);

    return $this->redirect(['action' => 'index']);
  }
}