<!DOCTYPE html>
<html lang="Ru">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<!-- Элемент `выбор ДА/НЕТ` -->
				<div class="record-form__choose">
					<!-- Элемент `вопрос для элемента выбора ДА/НЕТ` -->
					<div class="record-form__choose-question-title">
						<p>Являетесь ли Вы юридическим лицом?</p>
					</div>
					<!-- Элемент `поле ввода типа radiobutton` -->
					<p><input type="radio" name="yes-no" value="y" checked>Да</p>
					<!-- Элемент `поле ввода типа radiobutton` -->
					<p><input type="radio" name="yes-no" value="n" checked>Нет</p>
				</div>
				<!-- Элемент `кнопка` -->
				<button class="record-form__button">Далее</button>
			</form>
		</div>
	</div>
</body>

</html>