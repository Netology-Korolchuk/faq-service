<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>FAQ Service - справка</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
    <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/faq" class="brand-logo"><i class="large material-icons">thumb_up</i> FAQ Service </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/admin">Администрирование</a></li>
            <li><a href="/help.php">Справка</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="/admin">Администрирование</a></li>
            <li><a href="/help.php">Справка</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <br/>
    </nav>


	<ul class="collapsible" data-collapsible="accordion">
	    <li>
            <div class="collapsible-header">Основной раздел сервиса</div>
            	<div class="collapsible-body">
                <img class="responsive-img z-depth-5" src="img/1.jpg">
  	            <ul>
			<li>1. При нажатии на раздел "Задать вопрос" открывается форма отправки вашего вопроса.
                        </li>
			<li>2. В данном разделе представлены все темы данного сервиса. Вопрос задать можно только по представленным темам.
                        </li>
			<li>3. При нажатии на логотип происходит переход в главный раздел сервиса, из любого места.
                        </li>
			<li>4. Раздел администрирование.
                        </li>
			<li>5. Этот раздел справка.
                        </li>
			<li>6. Здесь представлены все темы и вопросы с ответами.
                        </li>
                     </ul>
	        </div>
            </li>
	    <li>
            <div class="collapsible-header">Как задать вопрос?</div>
            	<div class="collapsible-body">
		    <img class="z-depth-5" src="img/2.jpg">
  	            <ul>
			<li>1. При нажатии на раздел "Задать вопрос" открывется представленная форма.
                        </li>
			<li>2. Нужно ввести ваш адрес электронной почты (обязательно).
                        </li>
			<li>3. Нужно ввести ваше имя (обязательно).
                        </li>
			<li>4. Выбрать раздел из представленного списка.
                        </li>
			<li>5. Ввести текст вопроса (минимум 10 символов) и нажать кнопку отправить.
                        </li>
                     </ul>
	        </div>
            </li>

	    <li>
            <div class="collapsible-header">Администрирование: авторизация</div>
            	<div class="collapsible-body">
		    <img class="z-depth-5" src="img/3.jpg">
  	            <ul>
			<li>1. Ввести логин. 
                        </li>
			<li>2. Ввести пароль.
                        </li>
			<li>* При авторизации "главным администратором" станет доступен раздел "управление модераторами".
                        </li>
                     </ul>
	        </div>
            </li>
                        
	    <li>
            <div class="collapsible-header">Администрирование: управление модераторами</div>
            	<div class="collapsible-body">
		    <img class="z-depth-5" src="img/4.jpg">
  	            <ul>
			<li>1. Основная навигация администратора.
                        </li>
			<li>2. При нажатии кнопки "редактировать" откроется форма редактирования текущего модератора.
                        </li>
			<li>3. При нажатии кнопки "удалить" откроется форма подтверждения удаления текущего модератора.
                        </li>
			<li>4. При нажатии кнопки "создать" откроется форма создания нового модератора.
                        </li>
                     </ul>
	        </div>
            </li>
        
	    <li>
            <div class="collapsible-header">Администрирование: управление темами</div>
            	<div class="collapsible-body">
		    <img class="z-depth-5" src="img/5.jpg">
  	            <ul>
			<li>1. Форма добавления новой темы: вводим название и нажимаем кнопку "создать".
                        </li>
			<li>2. Названия тем: при нажатии на название происходит переход в раздел управления вопросами данной темы.
                        </li>
			<li>3. При нажатии кнопки "редактировать" открывается форма редактирования данной темы.
                        </li>
			<li>4. При нажатии кнопки "удалить" открывается форма подтверждения удаления данной темы.<br/>
			     <strong> ! При удалении темы, будут удалены все вопросы внутри этой темы. </strong>

                        </li>
			<li>5. Переход в раздел управления темами.
                        </li>
			<li>6. Переход в раздел "вопросы без ответов".
                        </li>
			<li>7. Переход в раздел "заблокированные вопросы".
                        </li>
                     </ul>
	        </div>
            </li>

	    <li>
            <div class="collapsible-header">Администрирование: управление вопросами</div>
            	<div class="collapsible-body">
		    <img class="z-depth-5" src="img/6.jpg">
  	            <ul>
			<li>1. Отображается текущий статус вопроса.
                        </li>
			<li>2. При нажатии кнопки "опубликовать/скрыть" происходит соответствующее действие.
                        </li>
			<li>3. При нажатии кнопки "редактировать" открывается форма редактирования данного вопроса. 
                        </li>
			<li>4. При нажатии кнопки "удалить" открывается форма подтверждения удаления данного вопроса. 
                        </li>
                     </ul>
	        </div>
            </li>

	    <li>
            <div class="collapsible-header">Администрирование: управление вопросами без ответов</div>
            	<div class="collapsible-body">
		    <img class="z-depth-5" src="img/7.jpg">
  	            <ul>
			<li>1. При нажатии кнопки "ответить" открывается форма ответа на вопрос (см. 4).
                        </li>
			<li>2. При нажатии кнопки "редактировать" открывается форма редактирования данного вопроса. 
                        </li>
			<li>3. При нажатии кнопки "удалить" открывается форма подтверждения удаления данного вопроса. 
                        </li>
		    <img class="z-depth-5" src="img/71.jpg">
			<li>4. Вводим текст ответа и нажимаем кнопку "добавить и закрыть". 
                        </li>
			<li>5. Если мы выставим галочку "опубликовать", то вопрос сразу будет опубликован в заданной теме.
                        </li>

                     </ul>
	        </div>
            </li>

	    <li>
            <div class="collapsible-header">Администрирование: управление заблокированными вопросами и стоп-словами</div>
            	<div class="collapsible-body">
		    <img class="z-depth-5" src="img/8.jpg">
  	            <ul>
			<li>1. При нажатии кнопки "добавить слово" откроется форма добавления нового стоп-слова.
                        </li>
			<li>2. При нажатии кнопки "показать слова" откроется форма со списком слов и возможностью их удалить.
                        </li>
			<li>3. В данном разделе отображаются заблокированные вопросы и список слов, по которым они были заблокированы. 
                        </li>
                     </ul>
	        </div>
            </li>
	</ul>

    <footer class="page-footer orange">
    <div class="footer-copyright">
        <div class="container">
	    <center>
            <a class="orange-text text-lighten-3" href="/faq">На главную</a> |
            <a class="orange-text text-lighten-3" href="/admin">Администрирование</a> |
            <a class="orange-text text-lighten-3" href="/help.php">Справка</a>
        </center>
        </div>
    </div>
    </footer>

    <!--  Scripts-->
    <script src="/js/jquery-2.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }</script>
    <script src="/js/jquery.js"></script>
    <script src="/js/prism.js"></script>
    <script src="/js/lunr.js"></script>
    <script src="/js/search.js"></script>
    <script src="/js/materialize.js"></script>
    <script src="/js/init.js"></script>

    <script>
    $(document).ready(function() {$('select').material_select();});
    $(document).ready(function() {$('.modal').modal();});
    $(document).ready(function() {$('.collapsible').collapsible();});
    </script>
</body>
</html>
