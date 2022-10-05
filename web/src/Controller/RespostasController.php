<?php

namespace App\Controller;

class RespostasController extends AppController {
  public function initialize(): void {
    parent::initialize();

    $this->loadModel('Perguntas');
  }

  public function add($pergunta_id) {
    $respostas = $this->Respostas
      ->find()
      ->where(['pergunta_id' => $pergunta_id])
      ->contain(['Usuarios', 'Perguntas'])
      ->all();
    
    $this->set('respostas', $respostas);
    
    $resposta = $this->Respostas->newEmptyEntity();

    $this->set('resposta', $resposta);

    $pergunta = $this->Perguntas->get($pergunta_id);

    $this->set('pergunta', $pergunta);

    if ($this->request->is('post')) {
      $resposta = $this->Respostas->patchEntity($resposta, $this->request->getData());
      
      $usuarioLogado = $this->Authentication->getIdentity();
      // $resposta['usuario_id'] = $usuarioLogado->id;
      $resposta->usuario_id = $usuarioLogado->id;
      $resposta->pergunta_id = $pergunta_id;

      if ($this->Respostas->save($resposta)) {
        $this->Flash->success('Resposta criada!');
        return $this->redirect(['action' => 'add', $pergunta_id]);
      }

      $this->Flash->error('Resposta não foi criada!');
    }

    return $this->render("index");
  }
}