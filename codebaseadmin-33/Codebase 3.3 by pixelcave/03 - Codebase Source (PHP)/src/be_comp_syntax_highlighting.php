<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>

<!-- Page JS Plugins CSS -->
<?php $cb->get_css('js/plugins/highlightjs/styles/github-gist.css'); ?>

<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <h2 class="content-heading">Syntax Highlighting</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">HighlightJS</h3>
        </div>
        <div class="block-content">
            <!-- Syntax Highlighting functionality is initialized in Template.highlightjs() -->
            <!-- For more info and examples you can check out https://highlightjs.org/usage/ -->
            <!-- 'pre-sh' class sets bg color to transparent. If you would like to use the original bg color from each theme, just remove the class -->
            <!-- HTML -->
            <h3 class="h4 mt-30">HTML</h3>
            <div class="pull-r-l">
                <div class="content content-full bg-body-light mb-50">
                    <pre class="pre-sh"><code class="html">&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;

        &lt;title&gt;Title&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;!-- Your content --&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                </div>
            </div>
            <!-- END HTML -->

            <!-- CSS -->
            <h3 class="h4">CSS</h3>
            <div class="pull-r-l">
                <div class="content content-full bg-body-light mb-50">
                    <pre class="pre-sh"><code class="css">/*
=================================================================
SECTION
=================================================================
*/

/* Sub section 1 */
selector {

}

/* Sub section 2 */
selector {

}

/*
=================================================================
SECTION
=================================================================
*/

/* Sub section 1 */
selector {

}

/* Sub section 2 */
selector {

}</code></pre>
                </div>
            </div>
            <!-- END CSS -->

            <!-- SCSS -->
            <h3 class="h4">SCSS</h3>
            <div class="pull-r-l">
                <div class="content content-full bg-body-light mb-50">
                    <pre class="pre-sh"><code class="scss">$font-stack: Helvetica, sans-serif;
$primary-color: #333;

body {
  font: 100% $font-stack;
  color: $primary-color;
}</code></pre>
                </div>
            </div>
            <!-- END SCSS -->

            <!-- Less -->
            <h3 class="h4">Less</h3>
            <div class="pull-r-l">
                <div class="content content-full bg-body-light mb-50">
                    <pre class="pre-sh"><code class="less">@base: #f938ab;

.box-shadow(@style, @c) when (iscolor(@c)) {
    -webkit-box-shadow: @style @c;
    box-shadow:         @style @c;
}

.box-shadow(@style, @alpha: 50%) when (isnumber(@alpha)) {
    .box-shadow(@style, rgba(0, 0, 0, @alpha));
}

.box {
    color: saturate(@base, 5%);
    border-color: lighten(@base, 30%);
    div { .box-shadow(0 0 5px, 30%) }
}</code></pre>
                </div>
            </div>
            <!-- END Less -->

            <!-- JavaScript -->
            <h3 class="h4">JavaScript</h3>
            <div class="pull-r-l">
                <div class="content content-full bg-body-light mb-50">
                    <pre class="pre-sh"><code class="javascript">/*
 *  Document   : app.js
 *  Author     : pixelcave
 */

var App = function() {

    // User Interface init
    var uiInit = function() {

    };

    return {
        init: function() {
            uiInit();
        }
    };
}();

// Initialize app when page loads
jQuery(function(){ App.init(); });</code></pre>
                </div>
            </div>
            <!-- END JavaScript -->

            <!-- PHP -->
            <h3 class="h4">PHP</h3>
            <div class="pull-r-l">
                <div class="content content-full bg-body-light mb-50">
                    <pre class="pre-sh"><code class="php">&lt;?php
class App {
    function home() {
        // ...
    }

    function profile() {
        // ...
    }

    function settings() {
        // ...
    }
}</code></pre>
                </div>
            </div>
            <!-- END PHP -->

            <!-- Ruby -->
            <h3 class="h4">Ruby</h3>
            <div class="pull-r-l">
                <div class="content content-full bg-body-light mb-50">
                    <pre class="pre-sh"><code class="ruby"># Output "I love Ruby"
say = "I love Ruby"
puts say

# Output "I *LOVE* RUBY"
say['love'] = "*love*"
puts say.upcase

# Output "I *love* Ruby"
# five times
5.times { puts say }</code></pre>
                </div>
            </div>
            <!-- END Ruby -->

            <!-- Python -->
            <h3 class="h4">Python</h3>
            <div class="pull-r-l">
                <div class="content content-full bg-body-light mb-50">
                    <pre class="pre-sh"><code class="python">name = raw_input('What is your name?\n')

print 'Hi, %s.' % name</code></pre>
                </div>
            </div>
            <!-- END Python -->

            <!-- JSON -->
            <h3 class="h4">JSON</h3>
            <div class="pull-r-l">
                <div class="content content-full bg-body-light mb-50">
                    <pre class="pre-sh"><code class="json">{
    "menu": {
        "id": "file",
        "value": "File",
        "popup": {
            "menuitem": [
                {"value": "New", "onclick": "CreateNewDoc()"},
                {"value": "Open", "onclick": "OpenDoc()"},
                {"value": "Close", "onclick": "CloseDoc()"}
            ]
        }
    }
}</code></pre>
                </div>
            </div>
            <!-- END JSON -->
        </div>
    </div>
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>

<!-- Page JS Plugins -->
<?php $cb->get_js('js/plugins/highlightjs/highlight.pack.min.js'); ?>

<!-- Page JS Helpers (Highlight.js plugin) -->
<script>jQuery(function(){ Codebase.helpers('highlightjs'); });</script>

<?php require 'inc/_global/views/footer_end.php'; ?>