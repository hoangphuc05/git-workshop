<?php
    // throw 500 error if see the title "phuc's broken page"
    $path = "git-workshop/pages";
    $files = array_diff(scandir($path), array('.','..'));
    // define("DARKMODE", "dark");
    foreach ($files as $page) {
        $dom = new DOMDocument();
        if ($dom->loadHTMLFile("git-workshop/pages/".$page)){
            if (strcasecmp($dom->getElementsByTagName("title")[0]?->nodeValue??"_notitle", "Phuc's broken website") == 0) {
                header("HTTP/1.1 500 Internal Server Error");
                exit();
            }
            if (strcasecmp($dom->getElementsByTagName("title")[0]?->nodeValue??"_notitle", "Phuc's darkmode") == 0) {
                define("DARKMODE", "dark");
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en" class="<?php echo (defined("DARKMODE") ? DARKMODE:"") ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        color1: '#edede9',
                    }
                }
            }
        }
    </script>
    <!-- <link href="https://{{cdn}}/prismjs@v1.x/themes/prism.css" rel="stylesheet" /> -->
    <title>ACM main sites</title>
    <?php
        if (defined("DARKMODE")){
            echo("<style>
                p {color: #94A3B8;}
            </style>");
        }
    ?>
</head>

<body>
    <nav class="bg-color1 flex justify-between px-5 py-2 dark:bg-neutral-700">
        <div class="flex space-x-4">
            <a>ACM</a>
            <a>First link</a>
        </div>
        <div>Right place</div>
    </nav>
    <!-- Main body -->
    <div class="flex md:justify-center p-3 dark:bg-neutral-800">
        <div class="md:max-w-2xl flex flex-col">

<!-- Read the content in the pages folder and output it -->
        <div>
<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    function fetchAllPage($path) {
        echo("<div class=\"grid md:grid-cols-3 grid-cols-1 gap-4\"> ");
        $files = array_diff(scandir($path), array('.','..'));
        foreach ($files as $page) {
            $dom = new DOMDocument();
            if ($dom->loadHTMLFile($path."/".$page)){
                echo("<a href=\"".$path."/".$page."\" class=\"  rounded-md p-3 border drop-shadow-md dark:hover:bg-gray-700 hover:drop-shadow-xl hover:bg-gray-100\">");
                echo("<p class=\"font-semibold dark:text-slate-100 my-2\">".($dom->getElementsByTagName("title")[0]?->nodeValue??"_notitle")."</p>");
                echo("<p class=\"dark:text-slate-500\">Made by ".substr($page, 0, strrpos($page, "."))."</p>");
                echo("</a>");
            }
        }
        echo("</div>");
    }
    echo("<h2 class=\"text-xl dark:text-slate-200 border-b border-gray-200 font-bold mt-4 mb-1\">Websites made in this Git workshop</h2>");

    fetchAllPage("git-workshop/pages");

    echo("<h2 class=\"text-xl dark:text-slate-200 border-b border-gray-200 font-bold mt-4 mb-1\">Websites made in Spirng 2022 Git workshop</h2>");
    fetchAllPage("git-workshop/pages-spring-22");

    
?>
        </div>

<!-- Read readme and output the content -->
<?php
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    
    // require libraries
    require './lib/Parsedown.php';
    require './lib/ParsedownExtra.php';
    require './lib/ParsedownExtraPlugin.php';
    
    // read the README file
    $readMe = file_get_contents('./git-workshop/README.md');
    // initial setup
    $Parsedown = new ParsedownExtraPlugin;
    $Parsedown->voidElementSuffix = '>';
    // handling header
    $Parsedown->headerAttributes = function($Text, $Attributes, &$Element, $Level) {
        if ($Level === 1) {
            return ['class' => 'text-2xl dark:text-white font-bold border-b border-gray-300 mb-2 mt-5'];
        }
        if ($Level === 2){
            return ['class' => 'text-xl dark:text-slate-200 border-b border-gray-200 font-bold mt-4 mb-1'];
        }
        if ($Level === 3) {
            return ['class' => 'text-xl dark:text-slate-400 font-semibold mt-3'];
        }
        if ($Level === 4) {
            return ['class' => 'text-lg dark:text-slate-500 font-semibold'];
        }
        return ['class'=> $Level];
    };
    $Parsedown->codeHtml = '<code class="bg-gray-100 dark:bg-gray-600 px-2">%s</code>';
    $Parsedown->blockCodeHtml = '<pre class="bg-gray-100 dark:bg-gray-600 dark:text-gray-300 py-3 px-5 my-5 rounded-md"><code>%s</code></pre>';
    $Parsedown->linkAttributes = function($Text, $Attributes, &$Element, $Level) {
        return ['class' => 'font-medium dark:text-slate-400 underline decoration-sky-500'];
    };
    
    echo $Parsedown->text($readMe);
?>
        </div>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.26.0/prism.min.js" integrity="sha512-pSVqGtpGygQlhN8ZTHXx1kqkjQr30eM+S6OoSzhHGTjh6DKdfy7WZlo1DNO9bhtM0Imf6xNLznZ7iVC2YUMwJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</body>
</html>