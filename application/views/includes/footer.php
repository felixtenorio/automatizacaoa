	<div class="container marketing">
		<hr class="featurette-divider">
 <!-- FOOTER -->
		<footer>
			<p class="pull-right"><?php echo anchor('login', 'Acesso Restrito');?></p>
			<p>&copy; <?php echo date('Y');?> Company, Inc. &middot;</p>
		</footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>/assets/js/jquery-1.12.3.min.js"></script>
    <script>/*window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')*/</script>
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/addpedidos.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! 
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug 
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
	<script>
		$(document).ready(function(){
			var aux = 0;
			var pedidos = [];
			$('.addpedido').click(function(e){				
				
				pedidos[aux] = $(this).attr("rel");
					
				/*console.log(pedidos[aux]);*/
					
				aux++;
					
				/*console.log(pedidos.length);*/
				
				$('.carrinho').html(aux);
				
				e.preventDefault();
			});
			
			$('.carrinhol').click(function(){
				if(pedidos.length != 0)
				{
					alert("Você fez: "+aux+" Pedidos, Conclua seu pedido, confirme e aguarde. Obrigado!");
				}
			});
			
			$('#addp').click(function(){
				if(pedidos.length == 0)
				{
					alert("Sua lista de pedidos está vazia, escolha no cardápio ao menos um item!");
				} else {
					$.ajax({
						type: "POST",
						url: "<?php echo base_url()?>lanches/create/",
						data: {pedidos:pedidos},
						dataType: "json"
					});
					/*return false;					*/
					location.reload(true);
				}				
			});			
		});
	</script>
  </body>
</html>