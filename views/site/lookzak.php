<?php $this->title = "Заказы"; ?>
<div>
	<h1 style='color: #26a9e1; padding-top: 10px; font-size: 34px;font-weight: 700;margin: 0 auto 30px;text-align: center;text-transform: uppercase;position: relative;z-index: 3;'>Заказы</h1>
	<div class='zakaziadm'>
		<table>
			<tr><td><h3>Номер заказа:</h3></td>
				<td><h3>ФИО:</h3></td>
				<td><h3>Город:</h3></td>
				<td><h3>Адрес:</h3></td>
				<td><h3>Индекс:</h3></td>
				<td><h3>Метод оплаты:</h3></td>
				<td><h3>Данные карты:</h3></td>
				<td><h3>Комментарий:</h3></td>
				<td><h3>Название книги:</h3></td>
				<td><h3>Количество:</h3></td>
				<td><h3>Общая цена:</h3></td></tr>
			<? 
				foreach ($model as $key) {
					echo '<tr><td>'.$key->zakaz->id.'</td>
					<td>'.$key->zakaz->fio.'</td>
					<td>'.$key->zakaz->gorod->name.'</td>
					<td>'.$key->zakaz->adres.'</td>
					<td>'.$key->zakaz->indeks.'</td>
					<td>';
					if ($key->zakaz->oplata=='nal'){
					echo 'Наличными';
					}else echo 'По карте';
					echo '</td>
					<td>'.$key->zakaz->card.'<br>'.$key->zakaz->date.'<br>cvc: '.$key->zakaz->cvc.'</td>
					<td>'.$key->zakaz->comment.'</td>
					<td>'.$key->tovari->name.'</td>
					<td>'.$key->kolvo.'</td>
					<td>'.$key->zakaz->fullprice.'</td></tr>';
				}
			?>
		</table>
	</div>
</div>