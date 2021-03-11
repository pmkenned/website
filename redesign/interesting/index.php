<?php
$title = "Interesting Things";
$bodyClass = "interesting";
$additionalCSSFiles = array("interesting/interesting.css");
include "../header.php";
?>

<main>

    <p>This is where I link to various things that I find interesting for one reason or another. If you know of something that you think I would find interesting, send it to me and I might add it to this list!</p>

<!-- TODO: ability to order by date or how interesting I find it or by category, etc. -->

<ul>

<?php
$listItems = array(
    array(
        'title' => 'Piccolo OS: Write Your Own Multitasking OS',
        'url' => 'https://youtu.be/G_3uvEFSDuA',
        'type' => 'youtube',
        'rating' => '4',
        'curated' => '2021-03-10'
    ),
    array(
        'title' => 'My review of "The Practice of Programming"',
        'url' => '/redesign/reviews/tpop/',
        'type' => 'review',
        'rating' => '3',
        'curated' => '2021-03-10'
    ),
    array(
        'title' => 'Which programming language is fastest?',
        'url' => 'https://benchmarksgame-team.pages.debian.net/benchmarksgame/index.html',
        'type' => 'website',
        'rating' => '3',
        'curated' => '2021-03-10'
    )
);

foreach ($listItems as $item) {
    echo "<li>\n";
    if ($item['type'] === 'youtube') {
        echo '<img src="/redesign/images/youtube_icon_32x22.png" alt="YouTube">' . "\n";
    } else {
        echo '<span class="spacer"></span>' . "\n";
    }
    echo '<a href="' . $item['url'] . '">' . $item['title'] . "</a>\n";
    echo "</li>\n";
}

?>

</ul>

</main>

<?php
include "../footer.php";
?>
