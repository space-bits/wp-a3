
function updateTotal() {
	var rows = document.getElementsByClassName('ticket-row');
	var total = 0;
	for (var i = 0; i <rows.length; i++) {
		row = rows[i];
		var price = parseInt(row.getElementsByClassName('price')[0].textContent);
		var quantity = parseInt(row.getElementsByClassName('quantity')[0].value);
		var subtotal = price * quantity;
		total += subtotal;
		row.getElementsByClassName('subtotal')[0].textContent = subtotal;
	}
	document.getElementById('total').setAttribute('value', '$ ' + total + '.00');
}