<?php $this->load->view('includes/header');?>
<style>
a .addpedido {display:hidden;}
</style>
<div class="container well">
	<h1>Cardápio de lanches</h1><hr/>
	<?php
		$template = array('table_open' => '<table class="table">');
		$this->table->set_template($template);
		$this->table->set_heading('Descrição', 'Ingredientes', 'Valor', 'Pedir');
		
		foreach($lanches as $row)
		{
			$add = "<a href='#' rel='$row->id' class='glyphicon glyphicon-plus addpedido' onclick='addPedidos(event)'></a>";
			$this->table->add_row($row->descricao,$row->ingredientes,$row->valor, $add);
		}
		echo $this->table->generate();
	?>
</div>
    
<?php $this->load->view('includes/footer');?>