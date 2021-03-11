<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Paul Kennedy<?php if (!empty($title)) { echo " | $title"; } ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="/redesign/main.css">
<?php
if (isset($additionalCSSFiles) and count($additionalCSSFiles) > 0) {
    foreach ($additionalCSSFiles as $cssFile) {
        echo "    <link rel=\"stylesheet\" href=\"/redesign/$cssFile\">\n";
    }
}
?>
</head>

<body <?php if (!empty($bodyClass)) { echo "class=\"$bodyClass\""; } ?>>

<header>
<button>Log in</button>
<!--
<button id="switch" onclick="toggleTheme()">Theme</button>
-->

<label class="switch">
  <input type="checkbox" checked id="themeCheckbox" onclick="toggleTheme()">
  <span class="slider round"></span>
</label>

</header>

<h1>PAUL KENNEDY</h1>

<nav>
    <ul>

<?php
$navLinks = array(
    array(
        'title' => 'Home',
        'class' => 'home',
        'url' => ''
    ),
    array(
        'title' => 'Blog',
        'class' => 'blog',
        'url' => 'blog/'
    ),
    array(
        'title' => 'Useful',
        'class' => 'useful',
        'url' => 'useful/'
    ),
    array(
        'title' => 'Interesting',
        'class' => 'interesting',
        'url' => 'interesting/'
    ),
    array(
        'title' => 'Hobbies',
        'class' => 'hobbies',
        'url' => 'hobbies/'
    ),
    array(
        'title' => 'Fun',
        'class' => 'fun',
        'url' => 'fun/'
    ),
    array(
        'title' => 'Inspirational',
        'class' => 'inspirational',
        'url' => 'inspirational/'
    ),
    array(
        'title' => 'Beautiful',
        'class' => 'beautiful',
        'url' => 'beautiful/'
    ),
    array(
        'title' => 'About',
        'class' => 'about',
        'url' => 'about.php'
    )
);

foreach ($navLinks as $item) {
    echo '<li><a href="/redesign/' . $item['url'] . '" class="'. $item['class'] .'">' . $item['title'] . '</a></li>';
}
echo "\n";

?>
    </ul>
</nav>
