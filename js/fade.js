// Função para definir a distancia da box em relação ao topo do documento HTML.
function boxTop(idBox) {
	var boxOffset = $(idBox).offset();
	return boxOffset.top;
}

// A animação acontece aqui.
// Primeiro adicionamento a função .scroll ao documento, assim toda vez que o usuário utilizar o scroll a função é ativada.
$(document).scroll(function() {
	// Adiciona o valor total do Scroll a variável documentTop
	
	var documentTop = $(this).scrollTop();
	
	// Verifica se o documentTop é maior que o Topo da box #azul menos 120px. Esses 120px é para que a função seja ativada um pouco antes da box chegar ao topo.
  // Se for maior ele adiciona a classe animar.
  // Caso contrário ele remove a classe animar.
	if (documentTop > boxTop('#azul') - 120) {
		$('#azul').addClass('animar');
	} else {
		$('#azul').removeClass('animar');
	}
	
	if (documentTop > boxTop('#verde') - 120) {
		$('#verde').addClass('animar');
	} else {
		$('#verde').removeClass('animar');
	}
	
	if (documentTop > boxTop('#roxo') - 120) {
		$('#roxo').addClass('animar');
	} else {
		$('#roxo').removeClass('animar');
	}	
});

// Adiciona o valor retornado da boxTop a cada div
$('#azul').html('<p>' + boxTop('#azul') + 'px </p>');
$('#verde').html('<p>' + boxTop('#verde') + 'px </p>');
$('#roxo').html('<p>' + boxTop('#roxo') + 'px </p>');

// Esse código poderia ser mais otimizado, para não precisarmos adicionar o ID da box em todas as funções. Porém criei dessa maneira para ficar mais claro.
