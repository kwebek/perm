<!DOCTYPE html>
<html lang="Ru">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css" type="text/css"/>
<title>Адаптивная форма записи на замер</title>
</head>

<body>
<!-- НАЧАЛО ФОРМЫ № 1 -->
<div class="page-1">
	<!-- Блок `форма записи на замер` -->
	<div class="record-form">
		<!-- Элемент `тело блока формы` -->
		<div class="record-form__body">
					<!-- Элемент `рамка формы` -->
					<div class="record-form__frame">
						<!-- Элемент `заголовок формы` -->
						<div class="record-form__title">Запись на бесплатный замер</div>
						<!-- Элемент `форма` -->
						<form class="record-form__form">
							<!-- Элемент `название формы` -->
				    		<div class="record-form__subtitle">Укажите Ваши контактные данные и адрес</div>
							<!-- Элемент `группа полей формы` -->
							<fieldset class="record-form__fieldset">
								<!-- Элементы `текстовые поля ввода` -->
								<div class="grid-item">
									<input type="text" id="fio" placeholder="Фамилия Имя Отчество" class="record-form__input"> <div class="require">*</div>
								</div>
								<div class="grid-item">
									<input type="phone" id="phone" placeholder="+7(---)-- -- ---" class="record-form__input"><div class="require">*</div>
								</div>
								<div class="grid-item">
									<input type="e-mail" id="e-mail" placeholder="E-mail" class="record-form__input"><div class="require">*</div>
								</div>
								<div class="grid-item">
									<input type="text" id="city" placeholder="Город" class="record-form__input"><div class="require">*</div>
								</div>
								<div class="grid-item">
									<input type="text" id="address" placeholder="Улица, дом, корпус, квартира" class="record-form__input"><div class="require">*</div>
								</div>
								<div class="grid-item">
									<input type="text" id="floor" placeholder="Этаж" class="record-form__input"><div class="require">*</div>
								</div>
							</fieldset>

							<!-- БЛОК `поле ввода типа radiobutton` -->
							<div class="radiobuttons">
								<div class="radiobuttons__wrapper">
									<div class="radiobuttons__choose-question-title">
								<!-- вопрос для элемента выбора ДА/НЕТ` -->
									<p>Являетесь ли Вы юридическим лицом?</p>
									</div>
									<div class="radiobuttons__frame">
										<div class="radiobuttons__frame-wrapper">
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
								</div>
								
							</div>
							<!-- БЛОК `разделитель с чертой` -->
							<div class="divider">
								<p></p>
							</div>
							<div class="policy">
								<div class="policy__wrapper">
								<!-- Блок `checkbox` -->
								<div class="checkbox">
									<!-- Элемент `поле ввода типа checkbox` -->
									<input type="checkbox" id="check" name="policy-accept" value="y" class="checkbox__checkbox_input" checked>
									<label for="check" class="checkbox_label"></label>
									<div class="policy__text">Я согласен на обработку и передачу персональных данных &nbsp; <a href="#" onclick="myFunction();return false;">Конфиденциальность</a>&nbsp;</div>
								</div>
								<div class="policy__button">
									<!-- Элемент `кнопка` -->
									<button class="button">Далее</button>
									</div>
								</div>
							</div>
					<div class="require-text" id="require-text-1">* Поля обязательные к заполнению</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- КОНЕЦ ФОРМЫ № 1 -->
</body>

</html>