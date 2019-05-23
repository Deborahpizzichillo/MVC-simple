<?php

class htmlTemplate
{
    protected $charset = "UTF-8";
    protected $language = "en";
    
    private $pageTitle = "Example.com";

//default = $pageTitle = null
    public function __contruct($title = null)
    {
if ($title != null){
    $this->pageTitle = $title;
}

// "\n", = new line
    echo '<!DOCTYPE html>',
    '<html lang="'.$this->language.'">',"\n",
    '<head>',
    '<meta charset="'.$this->charset.'">',
    '<meta name="viewport" 
    content="width=device-width, initial-scale=1.0">,
    <meta http-equiv="X-UA-Compatible" content="ie=edge">,
    <title>'.$this->pageTitle.'</title>',
    '</head>',
    '<body>';
}
public function __destruct()
{
echo '</body>',
'</html>';

    }
}


?>