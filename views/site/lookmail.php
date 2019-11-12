<?php $this->title = "Письма"; ?>
<div>
	<h1 style='color: #FE980F;font-size: 34px;font-weight: 700;margin: 0 auto 30px;text-align: center;text-transform: uppercase;position: relative;z-index: 3;'>Письма</h1>
	<div class='mailview'>
		<table>
			<tr><td><h3>ID:</h3></td>
				<td><h3>Имя:</h3></td>
				<td><h3>Почта:</h3></td>
				<td><h3>Сообщение:</h3></td></tr>
			<? 
				foreach ($mail as $key) {
					echo '<tr><td>'.$key->id.'</td>
					<td>'.$key->name.'</td>
					<td>'.$key->email.'</td>
					<td>'.$key->message.'</td></tr>';
				}
			?>
		</table>
	</div>
</div>