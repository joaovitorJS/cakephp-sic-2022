<div class="row">
  <div class="column">
    <h1>Respostas</h1>
  </div>

  <div class="column column-offset-50">
    <?= $this->Html->link('Voltar', [
      'controller' => 'Perguntas',
      'action' => 'index'
    ], [
      'class' => 'button'
    ]) ?>
    <?= $this->Html->link('Sair', [
      'controller' => 'Usuarios',
      'action' => 'logout'
    ], [
      'class' => 'button'
    ]) ?>
  </div>
</div>

<h3><?= $pergunta->pergunta ?></h3>

<?= $this->Form->create($resposta, [
  'url' => '/respostas/add/' . $pergunta->id
]) ?>

  <?= $this->Form->control('resposta', [
    'label' => false,
    'required' => true,
    'placeholder' => 'Digite sua resposta',
    'style' => 'overflow: auto; resize: none'
  ]) ?>
  <?= $this->Form->submit('Responder') ?>
<?= $this->Form->end() ?>

<table>
  <tr>
    <th>Respostas</th>
    <th>Respondido por</th>
  </tr>

  <?php foreach($respostas as $res): ?>
    <tr>
      <td>
        <?= $res->resposta ?>
      </td>
      <td>
        <?= $res->usuario->usuario ?>
      </td>
    </tr>
  <?php endforeach; ?>
</table>