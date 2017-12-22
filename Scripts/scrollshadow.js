var $document = $(document),
$element = $('.nav'),
className = 'navscroll';

$document.scroll(function() {
    if ($document.scrollTop() >= 5) {
        $element.addClass(className);
    } else {
        $element.removeClass(className);
    }
});