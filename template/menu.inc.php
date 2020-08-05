<?php

# Меню в виде массивов. Добавляйте сколько угодно менюшек. Не забудьте вставить переменную в design.inc.php
# Добавлять следует в таком виде: адрес страницы, анкор ссылки (текстовая часть ссылки) и заголовок (всплывающая подсказка)
# И следите за запятой в конце элемента массива. Каждый элемент должен заканчиваться запятой, в отличие от последнего

$footmenu = array (
			array ('index', 'ГЛАВНАЯ', ''),
			array ('Interior_Design', 'ПОРТФОЛИО', ''),
			array ('Company', 'О КОМПАНИИ', ''),
			array ('Blog', 'БЛОГ', ''),
			array ('Partners', 'ПАРТНЕРЫ', ''),
			array ('Contacts', 'КОНТАКТЫ', '')
);

$mainmenu = array (
			array ('index', 'ГЛАВНАЯ', ''),
			array ('Interior_Design', '<ul class="topmenu">
		<li><a href="#" class="submenu-link">Портфолио</a>
          <ul class="submenu">
            <li><a href="/Interior_Design.html">Дизайн интерьера</a></li>
            <li><a href="/finished_work.html">Готовые работы</a></li>
          </ul>
        </li>
      </ul>', ''),
			array ('Company', 'О КОМПАНИИ', ''),
			array ('Blog', 'БЛОГ', ''),
			array ('Partners', 'ПАРТНЕРЫ', ''),
			array ('Contacts', 'КОНТАКТЫ', '')
);

