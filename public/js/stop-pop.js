//This function will completely disable the back button - only way out is to click a link, or close the tab/window.
(function (global) {

    if(typeof (global) === "undefined") {
        throw new Error("Undefined Window, Cannot Proceed.");
    }

    var _hash = "!";
    var backButton = function () {
        //Pushstate history only works on second item added to the page, heres the first
        global.location.href += "#";

        //50 millisecond time out to add this to the history
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {
        backButton();

        // Disables backspace on page except on input fields and text-area. (backspace is also a back button behavior)
        document.body.onkeydown = function (a) {
            var element = a.target.nodeName.toLowerCase();
            if (a.which === 8 && (element !== 'input' && element  !== 'textarea')) {
                a.preventDefault();
            }
            // Stopping the event bubbling up the DOM tree...
            a.stopPropagation();
        };
    }
})(window);