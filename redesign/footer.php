<footer>

<section class="bottom">

<a href="https://www.instagram.com/paulkennedy390/"><div class="socialLinks" id="ig"></div></a>
<a href="https://www.youtube.com/channel/UC_AXcJVAMEHzsMQ1RhMaVlw"><div class="socialLinks" id="yt"></div></a>
<a href="https://www.linkedin.com/in/paulkennedy-ece/"><div class="socialLinks" id="li"></div></a>
<a href="https://www.facebook.com/paulkennedy/"><div class="socialLinks" id="fb"></div></a>
<a href="https://github.com/pmkenned"><div class="socialLinks" id="gh"></div></a>

Paul Kennedy<br />
<a href="/redesign/contact.php">Contact</a><br />

</section>

</footer>

<script>
    // function to set a given theme/color-scheme
    function setTheme(themeName) {
        localStorage.setItem('theme', themeName);
        document.documentElement.className = themeName;
    }

    // function to toggle between light and dark theme
    function toggleTheme() {
        if (localStorage.getItem('theme') === 'theme-dark') {
            setTheme('theme-light');
        } else {
            setTheme('theme-dark');
        }
    }

    // Immediately invoked function to set the theme on initial load
    (function () {
        if (localStorage.getItem('theme') === 'theme-dark') {
            setTheme('theme-dark');
            document.getElementById('themeCheckbox').checked = false;
        } else {
            setTheme('theme-light');
            document.getElementById('themeCheckbox').checked = true;
        }
    })();

    function preloadImage(url) {
        const img = new Image();
        img.src = url;
    }

    const imagesToPreload = [
        '/redesign/images/icons/gh_gt.png',
        '/redesign/images/icons/fb_gt.png',
        '/redesign/images/icons/li_gt.png',
        '/redesign/images/icons/yt_gt.png',
        '/redesign/images/icons/ig_gt.png',
        '/redesign/images/icons/gh_ct.png',
        '/redesign/images/icons/fb_ct.png',
        '/redesign/images/icons/li_ct.png',
        '/redesign/images/icons/yt_ct.png',
        '/redesign/images/icons/ig_ct.png',
    ];

    imagesToPreload.forEach(img => preloadImage(img));

</script>

</body>

</html>
