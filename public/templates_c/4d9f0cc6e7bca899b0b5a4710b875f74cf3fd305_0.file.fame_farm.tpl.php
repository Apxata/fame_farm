<?php
/* Smarty version 3.1.32, created on 2018-08-27 18:05:47
  from 'C:\xampp\htdocs\fame_farm\public\tpls\fame_farm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b84215b762272_02847820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d9f0cc6e7bca899b0b5a4710b875f74cf3fd305' => 
    array (
      0 => 'C:\\xampp\\htdocs\\fame_farm\\public\\tpls\\fame_farm.tpl',
      1 => 1535378673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b84215b762272_02847820 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main">
    <div class="content container">
        <div class="row">
           <div class="user col-md-8 col-md-offset-1">
            <!-- USER ADD MENU -->
           <div class="">
            <form active="index.php" method="post">
              <div class="form-group">
                <input type="number" name="fame" class="form-control" placeholder="Количество фейма">
              </div>
              <button type="submit" class="btn btn-primary">Добавить опыт</button>
            </form>
           </div>  <!-- user add -->
          
        <h2>Фейм фарм</h2>
        <table class="table table-bordered">
          <tr>
            <th>id </th>
            <th>Фейм </th>
            <th>Время </th>
            <th>Продолжительность, мин </th>
            <th>Фейм за период </th>
            <th>Фейм в час </th>
          </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fames']->value, 'fame');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fame']->value) {
?> 
      <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['fame']->value['id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fame']->value['fame'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fame']->value['fame_time'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fame']->value['timespent'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fame']->value['fame_get'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['fame']->value['fame_per_hour'];?>
</td>
      </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
           </div>
            <!-- article -->
      </div>
        <!-- row  -->
    </div>
    <!-- content container -->
</div> 
    <!-- end of main  --><?php }
}
