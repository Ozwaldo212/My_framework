<?php
namespace Myframework;

class core
{
    public function run() {
        echo __class__ . "[ok]" . PHP_EOL;
    }
}
?>

<?php
define ('BASE_URI', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT'])));
require_once (implode(DIRECTORY_SEPARATOR,['application','autoload.php']));

$app = new MyFramework\Core();
$app->run();
?>