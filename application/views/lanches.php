<?php $this->load->view('includes/header');?>

<div class="container well">
	<h1>Cardápio de lanches</h1><hr/>
	<?php
		$template = array('table_open' => '<table class="table">');
		$this->table->set_template($template);
		$this->table->set_heading('Descrição', 'Ingredientes', 'Valor', 'Pedir');
		
		foreach($lanches as $row)
		{
			$add = "<a href='#' rel='$row->id' class='glyphicon glyphicon-plus addpedido'></a>";
			$this->table->add_row($row->descricao,$row->ingredientes,$row->valor, $add);
		}
		echo $this->table->generate();
	?>
	<button id="addp" class="btn btn-warning">Fazer Pedido!</button>
	<div>
		<?php
			if($this->session->flashdata('pedidos'))
			{
				$pedidos = $this->session->flashdata('pedidos');
				
				echo "<br/><p class='alert alert-success'>$pedidos</p>";
			}
		?>
	</div>
</div>
    
<?php $this->load->view('includes/footer');?>