<?php
$title = "Inspirational Things";
$bodyClass = "inspirational";
$additionalCSSFiles = array("inspirational/quotes.css");
include "../header.php";
?>

<main>

<h2>Personal Heroes of Mine</h2>

<h2>Quotations</h2>

<?php

$quotations = array(
    array(
        'quotation' => "We are what we repeatedly do. Excellence, then, is not an act, but a habit.",
        'attribution' => 'Will Durant paraphrasing Aristotle'
    ),
    array(
        'quotation' => "It is impossible for us to break the law. We can only break ourselves against the law.",
        'attribution' => 'Cecil B. DeMille'
    ),
    array(
        'quotation' => "Do not let your fire go out, spark by irreplaceable spark in the hopeless swamps of the approximate, the not-quite, the not-yet, the not-at-all. Do not let the hero in your soul perish, in lonely frustration for the life you deserved, but have never been able to reach. Check your road and the nature of your battle. The world you desired can be won. It exists. It is real. It is possible. It's yours.",
        'attribution' => 'Ayn Rand',
    ),
    array(
        'quotation' => "Whether you think you can, or you think you can't &mdash; you're right.",
        'attribution' => 'Henry Ford'
    ),
    array(
        'quotation' => 'The best time to plant a tree was 20 years ago. The second best time is now.',
        'attribution' => 'Chinese Proverb'
    ),
    array(
        'quotation' => 'Watch your thoughts, for they become your words.<br>Watch your words, for they become your deeds.<br>Watch your deeds, for they become your habits.<br>Watch your habits, for they become your character.<br>Watch your character, for it becomes your destiny.',
        'attribution' => '<a href="https://quoteinvestigator.com/2013/01/10/watch-your-thoughts/">Unknown</a>'
    ),
    array(
        'quotation' => "Just have one more try &mdash; it's dead easy to die, It's the keeping-on-living that's hard.",
        'attribution' => 'Robert Service'
    )
);

echo "<ul>\n";
foreach ($quotations as $q) {
    echo '<li><div class="quote lquote">&ldquo;</div>' . $q['quotation'] . '<div class="quote rquote">&rdquo;</div><br><div class="attribution">&mdash; ' . $q['attribution'] . "</div></li>\n";
}
echo "</ul>\n";

?>

</main>

<?php
include "../footer.php";
?>
