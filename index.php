<!DOCTYPE html>
<html lang="Ru">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css" type="text/css"/>
<title>Адаптивная форма записи на замер</title>
</head>

<body>
	<!-- Блок `форма записи на замер` -->
	<div class="record-form">
		<!-- Элемент `тело блока формы` -->
		<div class="record-form__body">
		<div class="record-form__title">Запись на бесплатный замер</div>	
			<!-- Элемент `форма` -->
			<form class="record-form__form">
				<!-- Элемент `группа полей формы` -->
				<fieldset class="record-form__fieldset">
					<!-- Элемент `название формы` -->
	    			<legend>Укажите Ваши контактные данные и адрес</legend>
					    <!-- Элементы `текстовые поля ввода` -->
					    <input type="text" id="fio" placeholder="Фамилия Имя Отчество" class="record-form__input">
					    <input type="phone" id="phone" placeholder="+7(---)-- -- ---" class="record-form__input">
					    <input type="e-mail" id="e-mail" placeholder="E-mail" class="record-form__input">
					    <input type="text" id="city" placeholder="Город" class="record-form__input">
					    <input type="text" id="address" placeholder="Улица, дом, корпус, квартира" class="record-form__input">
					    <input type="text" id="floor" placeholder="Этаж" class="record-form__input">
				</fieldset>

				<!-- Элемент `поле ввода типа radiobutton` -->
				<div class="radiobuttons">
					<div class="radiobuttons__choose-question-title">
					<!-- вопрос для элемента выбора ДА/НЕТ` -->
						<p>Являетесь ли Вы юридическим лицом?</p>
					</div>
						<div class="radiobuttons_frame">
							<!-- "Блок" `радио кнопка` -->
							<div class="radio">
								<!-- Элемент `поле ввода типа radiobutton` -->
								<input type="radio" id="yes" name="yes-no" value="y" checked class="radio_input">
								<label for="yes" class="radio_label">Да</label>
							</div>
							<!-- Блок `радио кнопка` -->
							<div class="radio">
								<!-- Элемент `поле ввода типа radiobutton` -->
								<input type="radio" id="no" name="yes-no" value="n" class="radio_input">
								<label for="no" class="radio_label">Нет</label>
							</div>
						</div>
				</div>
				<!-- Элемент `кнопка` -->
				<button class="record-form__button">Далее</button>
			</form>
		</div>
	</div>
	
</body>

</html>