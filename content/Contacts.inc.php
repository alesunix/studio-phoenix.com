<?php
{
# Данные о странице
$title = 'Контактная информация — Phoenix Studio';
$keywords = 'Бишкек Кыргызстан Phoenix Studio Контакты Контактная информация Адрес телефон';
$description = 'Контактная информация Studio Phoenix';
$template = 'info';
$page_blocks = 'newsblock';

# Содержание страницы
$content = <<<EOF
<br><br>
<h1>Контактная информация</h1>
<div class='well'>
<div class='diwell'>
<div class="tabl">
<center>
<img src="/i/contact.png" width=100% alt="" oncontextmenu="return false;"> <br>
</center>
</div class="tabl">
<br>
<section id="message">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><span>Обратная связь</span></h2>
         <div id="contact-form">        
           <div class="controls">
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="form_email">Ваш Email *</label>
                    <input id="form_email" type="email" class="form-control" placeholder="Введите адрес электронной почты*" required="" data-error="Требуется действующее электронное письмо.">
                   <div class="help-block with-errors"></div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="form_name">Ваше имя *</label>
                    <input id="form_name" type="text" class="form-control" required="" placeholder="Как к Вам обращаться?">
                   <div class="help-block with-errors"></div>
                 </div>
               </div>
             </div>
             <div class="row">
                 <div class="col-md-12 checkbox-data">
                     <label>
                         <input type="checkbox" checked="checked" id="person_data" required="">
                         <i class="fa fa-2x icon-checkbox"></i>
                         <span>Подтверждаю согласие на обработку <a href="/personal-data-usage-terms.html" target="_blank">персональных данных</a></span>
                     </label>
                 </div>
             </div>
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                    <textarea id="form_message" name="text_comment" class="form-control" placeholder="Пожалуйста, оставьте сообщение" rows="4" required="" data-error="Пожалуйста, оставьте нам сообщение."></textarea>
                   <div class="help-block with-errors"></div>
                 </div>
                 <div class="messages"></div>
               </div>          
               <div class="col-md-12 text-center">
                  <input type="submit" name="btn_submit" id="button_contacts" value="Отправить сообщение">
               </div>
             </div>
           </div>
         </div>
        </div>
      </div>
    </div>
</section>
<div class="tabl">
<div class="tab">
<b><h5>
<br>г.Бишкек  
<br> +996 (551) 551 668  
<br> +996 (708) 608 745 
<br>studio.phoenix@mail.ru
</h7>
<br><a href="https://api.whatsapp.com/send?phone=996551551668" target="_blank"><img src="i/social/Whatsapp.svg" width="40" height="100" vspace="10" alt="WhatsApp">WhatsApp</a> 
<br><a href="https://www.instagram.com/studio.phoenix/" target="_blank"><img src="i/social/insta.svg" width="40" height="100" vspace="10" alt="instagram">Instagram</a> 
<br><a href="https://www.facebook.com/Studio.Phoenix.Design/?eid=ARDgPm_iu1ndE8d1aU266o2fAbULh3nlOjemOAdlzy8JWub5dK_BXk2vXve__LdX2tE2qQ8Oi2V4ebyo/" target="_blank"><img src="i/social/Facebook.svg" width="40" height="100" vspace="10" alt="facebook">Facebook</a> 
<br><a href="https://twitter.com/StudioPhoenix3/" target="_blank"><img src="i/social/Twitter.svg" width="40" height="100" vspace="10" alt="twitter">Twitter</a> 
</b></h3>
</div> 
<div class="tab">
<br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d187124.03596499556!2d74.45177724528106!3d42.8767896615293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x389eb7dc91b3c881%3A0x492ebaf57cdee27d!2z0JHQuNGI0LrQtdC6!5e0!3m2!1sru!2skg!4v1584341579447!5m2!1sru!2skg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>







</div>
</div class='tabl'>
</div class='well'>
EOF;
}