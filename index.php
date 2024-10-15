require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('index.html.twig');
echo $template->render([
    'title' => 'My Page',
    'heading' => 'Welcome to My Page',
    'content' => '<strong>This is bold text.</strong>'
]);
