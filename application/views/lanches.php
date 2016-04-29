<?php $this->load->view('includes/header');?>

<div class="container well">
	<h1>Cardápio de lanches</h1><hr/>
	<?php
		$template = array('table_open' => '<table class="table">');
		$this->table->set_template($template);
		$this->table->set_heading('Descrição', 'Ingredientes', 'Valor');
		
		foreach($lanches as $row)
		{
			$this->table->add_row($row->descricao,$row->ingredientes,$row->valor);		
		}
		echo $this->table->generate();
	?>
</div>
    
<?php $this->load->view('includes/footer');?>