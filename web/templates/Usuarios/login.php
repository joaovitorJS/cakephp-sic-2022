<div class="form">
  <?= $this->Flash->render() ?>
  <h3>Login</h3>
  <?= $this->Form->create() ?>
  <fieldset>
    <legend>Entre com seu login</legend>
    <?= $this->Form->control('usuario', ['label' => "Usuário", 'required'=> true, 'placeholder' => "Digite seu usuário"]); ?>
    <?= $this->Form->control('senha', [
      'label' => 'Senha',
      'required' => true,
      'type' => 'password',
      'placeholder' => 'Digite sua senha'
    ]); ?>
    <?= $this->Form->submit("Login"); ?>
    <?= $this->Html->link("Criar conta", ["action" => "add"]) ?>
    <?= $this->Form->end() ?>
  </fieldset>
</div>