<?php
class ControlPanel {
// Устанавливаем значения по умолчанию
var $default_settings = array(
 'phone' => '495 122-12-12',
 'email' => 'info@site.ru',
 'adress' => 'info@site.ru'
 );
 var $options;

 function ControlPanel() {
 add_action('admin_menu', array(&$this, 'add_menu'));
 if (!is_array(get_option('themadmin')))
 add_option('themadmin', $this->default_settings);
 $this->options = get_option('themadmin');
 }

 function add_menu() {
 add_theme_page('WP Theme Options', 'Contacts', 8, "themadmin", array(&$this, 'optionsmenu'));
 }

 // Сохраняем значения формы с настройками 
 function optionsmenu() {
 if ($_POST['ss_action'] == 'save') {
 $this->options["phone"] = $_POST['cp_phone'];
 $this->options["email"] = $_POST['cp_email'];
 $this->options["adress"] = $_POST['cp_adress'];
 $this->options["facebook"] = $_POST['cp_facebook'];
 $this->options["youtube"] = $_POST['cp_youtube'];
 $this->options["twitter"] = $_POST['cp_twitter'];
 $this->options["instagram"] = $_POST['cp_instagram'];
 
 $this->options["copy"] = $_POST['cp_copy'];
 $this->options["metrika"] = $_POST['cp_metrika'];
 update_option('themadmin', $this->options);
 echo '<div class="updated fade" id="message" style="background-color: rgb(255, 251, 204); width: 400px; margin-left: 17px; margin-top: 17px;"><p>Ваши изменения <strong>сохранены</strong>.</p></div>';
 }
 // Создаем форму для настроек
 echo '<form action="" method="post" class="themeform">';
 echo '<input type="hidden" id="ss_action" name="ss_action" value="save">';

 print '<div class="cptab"><br />
 <b>Настройки темы</b>
 <br />
 <h3>Контакты</h3>
 <p><input placeholder="Телефон" style="width:300px;" name="cp_phone" id="cp_phone" value="'.$this->options["phone"].'"><label> - телефон</label></p>
 <p><input placeholder="Email" style="width:300px;" name="cp_email" id="cp_email" value="'.$this->options["email"].'"><label> - email</label></p>
  <p><input placeholder="Adress" style="width:300px;" name="cp_adress" id="cp_adress" value="'.$this->options["adress"].'"><label> - adress</label></p>
 <h3>Социальные сети</h3>
 <p><input placeholder="Ссылка на страницу facebook" style="width:300px;" name="cp_facebook" id="cp_facebook" value="'.$this->options["facebook"].'"><label> - facebook</label></p>
 <p><input placeholder="Ссылка на страницу youtube" style="width:300px;" name="cp_youtube" id="cp_youtube" value="'.$this->options["youtube"].'"><label> - youtube</label></p>
 <p><input placeholder="Ссылка на страницу twitter" style="width:300px;" name="cp_twitter" id="cp_twitter" value="'.$this->options["twitter"].'"><label> - twitter</label></p>
  <p><input placeholder="Ссылка на страницу instagram" style="width:300px;" name="cp_instagram" id="cp_instagram" value="'.$this->options["instagram"].'"><label> - instagram</label></p>
<h3> Информация Copy </h3>
 <p><input placeholder="Copyright" style="width:300px;" name="cp_copy" id="cp_copy" value="'.$this->options["copy"].'"><label> - Copy</label></p>
 <h3>Код в footer.php</h3>
 <p><textarea placeholder="Здесь можно прописать коды счетчиков или дополнительных скриптов" style="width:300px;" name="cp_metrika" id="cp_metrika">'.stripslashes($this->options["metrika"]).'</textarea><label> - здесь можно прописать коды счетчиков или дополнительных скриптов</label></p>

 </div><br />';
 echo '<input type="submit" value="Сохранить" name="cp_save" class="dochanges" />';
 echo '</form>';
 }
}
$cpanel = new ControlPanel();
$mytheme = get_option('themadmin');
?>