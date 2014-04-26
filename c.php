<?
class YandexCW
{
public static $api_key = 'cw.1.1.20140421T145635Z.d19f90c37a1c98e1.ab9fa7f513c579b2fbbf8ce578790881c4780804';
const check_data_url = 'http://cleanweb-api.yandex.ru/1.0/check-spam';
const get_captcha_url = 'http://cleanweb-api.yandex.ru/1.0/get-captcha';
const check_captcha_url = 'http://cleanweb-api.yandex.ru/1.0/check-captcha';

public function xml_query($url, $parameters = array(), $post = false){
if (!isset($parameters['key'])) $parameters['key'] = self::$api_key;
$parameters_query = http_build_query($parameters);
if ($post) {
$http_options = array(
"http" => array (
"method" => "POST",
"content" => $parameters_query )
);
$context = stream_context_create($http_options);
$contents = file_get_contents($url, false, $context);
} else $contents = file_get_contents($url.'?'.$parameters_query);
if (!$contents) return false;
$xml_data = new SimpleXMLElement($contents);
return $xml_data;
}

/* Получение CAPTCHA */
public function get_captcha($id = null) {
$response = self::xml_query(self::get_captcha_url, array('id' => $id));
if (!$response || !isset($response->captcha)) return false;
return array('captcha_id' => $response->captcha, 'captcha_url' => $response->url);
}

/* Проверка CAPTCHA */
public function check_captcha($captcha_id, $captcha_value, $id = null) {
self::get_captcha();
$parameters = array(
'captcha' => $captcha_id,
'value' => $captcha_value,
'id' => $id
);
$response = self::xml_query(self::check_captcha_url, $parameters);
return isset($response->ok);
}
}

$captcha = YandexCW::get_captcha();
$_SESSION['captcha_id'] = (string) $captcha['captcha_id'];
$captcha_url = (string) $captcha['captcha_url'];

?>

<div class="bocFormRow">
<div id="recaptcha_div">
<?echo '<img src="'.$captcha_url.'"/>';?><br/>
<label class="bocFormLabel" for="bocFormPhone">Код с картинки:</label>
<input type="text" id="captcha_value" name="captcha_value" value="<?=strip_tags(trim($_POST['captcha_value']))?>">
</div>
</div>
