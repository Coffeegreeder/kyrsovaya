function oplata(e){
	var div = document.getElementById('oplata');
	if (e.value=='card') {
		div.innerHTML = '<div class="form-group field-zakaz-card"><label  class="control-label" for="zakaz-card">Номер карты</label><input required type="text" id="zakaz-card" class="" name="zakaz[card]" placeholder="1234 1234 1234 1234"><p class="help-block help-block-error"></p></div><div class="form-group field-zakaz-date"><label class="control-label" for="zakaz-date">Срок окончания действия</label><input required type="text" id="zakaz-date" class="" name="zakaz[date]" placeholder="01/20"><p class="help-block help-block-error"></p></div><div class="form-group field-zakaz-cvc"><label class="control-label" for="zakaz-cvc">CVC код</label><input required type="text" id="zakaz-cvc" class="" name="zakaz[cvc]" placeholder="3 цифры"><p class="help-block help-block-error"></p></div>';
	}else{
		div.innerHTML = '';
	} 
}