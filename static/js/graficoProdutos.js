var ControleEstoque = ControleEstoque || {};

ControleEstoque.GraficoEstoquePorMes = (function() {
	
	function GraficoEstoquePorMes() {
		this.ctx = $('#graficoEstoquePorMes')[0].getContext('2d');
	}
	
	GraficoEstoquePorMes.prototype.iniciar = function() {
		$.ajax({
			url: 'repository/consulta_grafico.php',
			method: 'GET', 
			success: onDadosRecebidos.bind(this)
		});
	}
	
	function onDadosRecebidos(produtoMes) {
		var data = [];
		var valores = [];
		produtoMes.forEach(function(obj) {
			data.unshift(obj.mes);
			valores.unshift(obj.total);
		});
		
		var GraficoEstoquePorMes = new Chart(this.ctx, {
		    type: 'line',
		    data: {
		    	labels: valores,
		    	datasets: [{
		    		label: 'Quantidade Estoque por mês',
		    		backgroundColor: "rgba(26,179,148,0.5)",
	                pointBorderColor: "rgba(26,179,148,1)",
	                pointBackgroundColor: "#fff",
	                data: data
		    	}]
		    },
		});
	}
	
	return GraficoEstoquePorMes;
	
}());

/*$(function() {
	var GraficoEstoquePorMes = new ControleEstoque.GraficoEstoquePorMes();
	graficoEstoquePorMes.iniciar();
	});*/