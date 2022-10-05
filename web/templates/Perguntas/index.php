
<div class="row">
  <div class="column">
    <h1>Peguntas</h1>
  </div>

  <div class="column  column-offset-50  ">  
    <?= $this->Html->link("Sair", ['controller' => 'Usuarios', 'action' => 'logout'], ['class' => 'button']) ?>
  </div>
</div>

<?= $this->Form->create($pergunta, [
  'url' => '/perguntas/add'
]) ?>
  <?= $this->Form->control('pergunta', [
    'label' => "Faça sua pergunta", 
    'required' => true, 
    "placeholder" => "Digite sua pergunta",
    "style" => "overflow:auto;resize:none"
    ]) ?>
<?= $this->Form->submit(__('Perguntar')); ?>
<?= $this->Form->end() ?>


<table>
    <tr>
        <th>Pergunta</th>
        <th>Qtd. de respostas</th>
        <th>Criado por</th>
        <th>Ação</th>
    </tr>

    <?php foreach ($perguntas as $pergunta): ?>
    <tr>
        <td>
            <?= $pergunta->pergunta ?>
        </td>
        <td>
          <?= count($pergunta->respostas) ?>
        </td>
        <td>
            <?= $pergunta->usuario->usuario ?>
        </td>
        <td>
        <?= $this->Html->link("Responder", ['controller' => 'Respostas', 'action' => 'add', $pergunta->id], ['class' => 'button button-outline']) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>        