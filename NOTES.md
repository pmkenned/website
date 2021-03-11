# Notes

## Coloring nav link for current page

CSS:

```
nav a.current {
    background: hsl(0, 20%, 80%);
    color: white;
}
```

JavaScript:

```
function ready(callbackFunction) {
    if(document.readyState != 'loading') {
        callbackFunction(e)
    } else {
        document.addEventListener("DOMContentLoaded", callbackFunction)
    }
}
ready(e => {
    Array.from(document.getElementsByTagName("a")).forEach(
        element => {
            console.log(element.href);
            console.log(window.location.href);
            if (element.href === window.location.href) {
                element.classList.add("current");
            }
        }
    );
});
```

## Resources

Fonts & Typography

- [Introduction to variable fonts on the web](https://web.dev/variable-fonts/)
- [Butterick’s Practical Typography](https://practicaltypography.com/)

CSS

- [CSS Sprites: What They Are, Why They’re Cool, and How To Use Them](https://css-tricks.com/css-sprites/)
- [Parsing Markdown into an Automated Table of Contents](https://css-tricks.com/parsing-markdown-into-an-automated-table-of-contents/)
- [Sticky Table of Contents with Scrolling Active States](https://css-tricks.com/sticky-table-of-contents-with-scrolling-active-states/)
- [Img Height In HTML: How Not To Use The Height Attribute](https://html.com/attributes/img-height/)
- [‘Scope’ in CSS](https://csswizardry.com/2013/05/scope-in-css/)
- [MindBEMding – getting your head ’round BEM syntax](https://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/)
- [Harry Roberts—Big CSS](https://www.youtube.com/watch?v=R-BX4N8egEc)
- [Keep your CSS selectors short](https://csswizardry.com/2012/05/keep-your-css-selectors-short/)
- [Shoot to kill; CSS selector intent](https://csswizardry.com/2012/07/shoot-to-kill-css-selector-intent/)
- [Quasi-qualified CSS selectors](https://csswizardry.com/2012/07/quasi-qualified-css-selectors/)
- [Writing efficient CSS selectors](https://csswizardry.com/2011/09/writing-efficient-css-selectors/)
- [When using IDs can be a pain in the class...](https://csswizardry.com/2011/09/when-using-ids-can-be-a-pain-in-the-class/)

Misc 

- [HostMonster Help: Error Pages](https://my.hostmonster.com/cgi/help/408)
- [How to create Hamburger Menu for mobile devices?](https://www.geeksforgeeks.org/how-to-create-hamburger-menu-for-mobile-devices/)
