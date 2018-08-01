<?php
class  View{
    protected $pages = [];
    protected $title = 'Contacts';
    protected $body = 'Page content';
    public function addPage($page, $pageCallback){
        $this->pages[$page] = $pageCallback->bindTo($this, __CLASS__);
    }

    public function render($page){
        $this->pages[$page];

        $content=<<<HTML
<!doctype html>
        <html lang="en">
        <head>
        <meta charset="UTF-8">
                     
                     <title>{$this->title}</title>
        </head>
        
        <body>
          <p>{$this->body}</p>
        </body>
        </html>
HTML;
    echo $content;
    }
    public function title(){
        return htmlspecialchars($this->title);
    }

    public function body(){
        return n12br(htmlspecialchars($this->title));
    }
}

$view = new View();
$view->addPage('about',function (){
    $this->title = 'About us';
    $this->body = 'Content of view';
});
$view->render('about');
echo '<pre>';
var_dump($view);





