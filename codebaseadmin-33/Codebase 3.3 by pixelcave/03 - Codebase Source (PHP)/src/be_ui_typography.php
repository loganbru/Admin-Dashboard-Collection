<?php require 'inc/_global/config.php'; ?>
<?php require 'inc/backend/config.php'; ?>
<?php require 'inc/_global/views/head_start.php'; ?>
<?php require 'inc/_global/views/head_end.php'; ?>
<?php require 'inc/_global/views/page_start.php'; ?>

<!-- Page Content -->
<div class="content">
    <!-- Headings -->
    <h2 class="content-heading">Headings</h2>
    <div class="row">
        <div class="col-lg-6">
            <!-- Light -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Light</h3>
                </div>
                <div class="block-content">
                    <h1 class="font-w300">h1. Heading <small>Subtitle</small></h1>
                    <h2 class="font-w300">h2. Heading <small>Subtitle</small></h2>
                    <h3 class="font-w300">h3. Heading <small>Subtitle</small></h3>
                    <h4 class="font-w300">h4. Heading <small>Subtitle</small></h4>
                    <h5 class="font-w300">h5. Heading <small>Subtitle</small></h5>
                </div>
            </div>
            <!-- END Light -->
        </div>
        <div class="col-lg-6">
            <!-- Normal -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Normal</h3>
                </div>
                <div class="block-content">
                    <h1 class="font-w400">h1. Heading <small>Subtitle</small></h1>
                    <h2 class="font-w400">h2. Heading <small>Subtitle</small></h2>
                    <h3 class="font-w400">h3. Heading <small>Subtitle</small></h3>
                    <h4 class="font-w400">h4. Heading <small>Subtitle</small></h4>
                    <h5 class="font-w400">h5. Heading <small>Subtitle</small></h5>
                </div>
            </div>
            <!-- END Normal -->
        </div>
        <div class="col-lg-6">
            <!-- Bold -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Bold <small>(Default)</small></h3>
                </div>
                <div class="block-content">
                    <h1>h1. Heading <small>Subtitle</small></h1>
                    <h2>h2. Heading <small>Subtitle</small></h2>
                    <h3>h3. Heading <small>Subtitle</small></h3>
                    <h4>h4. Heading <small>Subtitle</small></h4>
                    <h5>h5. Heading <small>Subtitle</small></h5>
                </div>
            </div>
            <!-- END Bold -->
        </div>
        <div class="col-lg-6">
            <!-- Extra Bold -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Extra Bold</h3>
                </div>
                <div class="block-content">
                    <h1 class="font-w700">h1. Heading <small>Subtitle</small></h1>
                    <h2 class="font-w700">h2. Heading <small>Subtitle</small></h2>
                    <h3 class="font-w700">h3. Heading <small>Subtitle</small></h3>
                    <h4 class="font-w700">h4. Heading <small>Subtitle</small></h4>
                    <h5 class="font-w700">h5. Heading <small>Subtitle</small></h5>
                </div>
            </div>
            <!-- END Extra Bold -->
        </div>
        <div class="col-lg-12">
            <!-- Hero -->
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Hero</h3>
                </div>
                <div class="block-content block-content-full">
                    <h2 class="display-1"><span class="d-none d-sm-inline-block">Heading</span> Display 1</h2>
                    <h2 class="display-2"><span class="d-none d-sm-inline-block">Heading</span> Display 2</h2>
                    <h2 class="display-3"><span class="d-none d-sm-inline-block">Heading</span> Display 3</h2>
                    <h2 class="display-4"><span class="d-none d-sm-inline-block">Heading</span> Display 4</h2>
                </div>
            </div>
            <!-- END Hero -->
        </div>
    </div>
    <!-- END Headings -->

    <!-- Typography -->
    <h2 class="content-heading">Typography</h2>

    <!-- Links -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Links</h3>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <a href="javascript:void(0)">Default link</a>
                    </p>
                    <p>
                        <a class="text-success" href="javascript:void(0)">Success link</a>
                    </p>
                    <p>
                        <a class="text-info" href="javascript:void(0)">Info link</a>
                    </p>
                    <p>
                        <a class="text-warning" href="javascript:void(0)">Warning link</a>
                    </p>
                    <p>
                        <a class="text-danger" href="javascript:void(0)">Danger link</a>
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <a class="link-effect" href="javascript:void(0)">Link with effect</a>
                    </p>
                    <p>
                        <a class="link-effect text-success" href="javascript:void(0)">Success link with effect</a>
                    </p>
                    <p>
                        <a class="link-effect text-info" href="javascript:void(0)">Info link with effect</a>
                    </p>
                    <p>
                        <a class="link-effect text-warning" href="javascript:void(0)">Warning link with effect</a>
                    </p>
                    <p>
                        <a class="link-effect text-danger" href="javascript:void(0)">Danger link with effect</a>
                    </p>
                </div>
                <div class="col-md-4">

                    <p>
                        <a class="badge badge-primary" href="javascript:void(0)">Badge link</a>
                    </p>
                    <p>
                        <a class="badge badge-success" href="javascript:void(0)">Success Badge link</a>
                    </p>
                    <p>
                        <a class="badge badge-info" href="javascript:void(0)">Info Badge link</a>
                    </p>
                    <p>
                        <a class="badge badge-warning" href="javascript:void(0)">Warning Badge link</a>
                    </p>
                    <p>
                        <a class="badge badge-danger" href="javascript:void(0)">Danger Badge link</a>
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- END Links -->

    <!-- Contextual Colors -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Contextual Colors</h3>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-6">
                    <p class="text-success">This text has the success color..</p>
                    <p class="text-info">This text has the info color..</p>
                    <p class="text-warning">This text has the warning color..</p>
                    <p class="text-danger">This text has the danger color..</p>
                    <p class="text-muted">This text has the muted color..</p>
                </div>
                <div class="col-6">
                    <p class="text-primary-darker">This text has the primary darker color..</p>
                    <p class="text-primary-dark">This text has the primary dark color..</p>
                    <p class="text-primary">This text has the primary color ..</p>
                    <p class="text-primary-light">This text has the primary light color..</p>
                    <p class="text-primary-lighter">This text has the primary lighter color..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Contextual Colors -->

    <!-- Contextual Backgrounds -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Contextual Backgrounds</h3>
        </div>
        <div class="block-content text-white">
            <div class="row">
                <div class="col-6">
                    <p class="p-10 bg-muted">Muted</p>
                    <p class="p-10 bg-success">Success</p>
                    <p class="p-10 bg-info">Info</p>
                    <p class="p-10 bg-warning">Warning</p>
                    <p class="p-10 bg-danger">Danger</p>
                </div>
                <div class="col-6">
                    <p class="p-10 bg-primary-darker">Darker</p>
                    <p class="p-10 bg-primary-dark">Dark</p>
                    <p class="p-10 bg-primary">Primary</p>
                    <p class="p-10 bg-primary-light">Light</p>
                    <p class="p-10 bg-primary-lighter text-primary-dark">Lighter</p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Contextual Backgrounds -->

    <!-- Badges -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Badges</h3>
        </div>
        <div class="block-content">
            <p>
                <span class="badge badge-secondary">Default</span>
                <span class="badge badge-primary">Primary</span>
                <span class="badge badge-success">Success</span>
                <span class="badge badge-info">Info</span>
                <span class="badge badge-warning">Warning</span>
                <span class="badge badge-danger">Danger</span>
            </p>
            <p>
                <span class="badge badge-secondary"><i class="fa fa-home mr-5"></i>Home</span>
                <span class="badge badge-primary"><i class="fa fa-cog mr-5"></i>Settings</span>
                <span class="badge badge-success"><i class="fa fa-check mr-5"></i>Great!</span>
                <span class="badge badge-info"><i class="fa fa-info-circle mr-5"></i>More Info</span>
                <span class="badge badge-warning"><i class="fa fa-exclamation-circle mr-5"></i>Attention</span>
                <span class="badge badge-danger"><i class="fa fa-times-circle mr-5"></i>Error</span>
            </p>
        </div>
    </div>
    <!-- END Badges -->

    <!-- Badge Pills -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Badge Pills</h3>
        </div>
        <div class="block-content">
            <p>
                <span class="badge badge-pill badge-secondary">Default</span>
                <span class="badge badge-pill badge-primary">Primary</span>
                <span class="badge badge-pill badge-success">Success</span>
                <span class="badge badge-pill badge-info">Info</span>
                <span class="badge badge-pill badge-warning">Warning</span>
                <span class="badge badge-pill badge-danger">Danger</span>
            </p>
            <p>
                <span class="badge badge-pill badge-secondary"><i class="fa fa-home mr-5"></i>Home</span>
                <span class="badge badge-pill badge-primary"><i class="fa fa-cog mr-5"></i>Settings</span>
                <span class="badge badge-pill badge-success"><i class="fa fa-check mr-5"></i>Great!</span>
                <span class="badge badge-pill badge-info"><i class="fa fa-info-circle mr-5"></i>More Info</span>
                <span class="badge badge-pill badge-warning"><i class="fa fa-exclamation-circle mr-5"></i>Attention</span>
                <span class="badge badge-pill badge-danger"><i class="fa fa-times-circle mr-5"></i>Error</span>
            </p>
        </div>
    </div>
    <!-- END Badge Pills -->

    <!-- Blockquotes -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Blockquotes</h3>
        </div>
        <div class="block-content">
            <blockquote class="blockquote">
                <p>Don't cry because it's over, smile because it happened.</p>
                <footer class="blockquote-footer">Dr. Seuss</footer>
            </blockquote>
            <blockquote class="blockquote text-right">
                <p>Be yourself; everyone else is already taken.</p>
                <footer class="blockquote-footer">Oscar Wilde</footer>
            </blockquote>
        </div>
    </div>
    <!-- END Blockquotes -->

    <!-- Addresses -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Addresses</h3>
        </div>
        <div class="block-content">
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
        </div>
    </div>
    <!-- END Addresses -->

    <!-- Text -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Text</h3>
        </div>
        <div class="block-content">
            <div class="row">
                <div class="col-xl-6">
                    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
                    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
                </div>
                <div class="col-xl-6">
                    <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                    <p><del>This line of text is meant to be treated as deleted text.</del></p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Text -->

    <!-- Lists -->
    <div class="block">
        <div class="block-header block-header-default">
            <div class="block-title">Lists</div>
        </div>
        <div class="block-content">
            <div class="row items-push">
                <div class="col-lg-3">
                    <h3>Unordered List</h3>
                    <ul>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>
                            Sublist
                            <ul>
                                <li>First subitem</li>
                                <li>Second subitem</li>
                                <li>Third subitem</li>
                            </ul>
                        </li>
                        <li>Third item</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Ordered List</h3>
                    <ol>
                        <li>First item</li>
                        <li>Second item</li>
                        <li>
                            Sublist
                            <ol>
                                <li>First subitem</li>
                                <li>Second subitem</li>
                                <li>Third subitem</li>
                            </ol>
                        </li>
                        <li>Third item</li>
                    </ol>
                </div>
                <div class="col-lg-3">
                    <h3>Icon List</h3>
                    <ul class="fa-ul">
                        <li><i class="fa fa-check fa-li"></i>First item</li>
                        <li><i class="fa fa-check fa-li"></i>Second item</li>
                        <li>
                            <i class="fa fa-check fa-li"></i>Sublist
                            <ul class="fa-ul">
                                <li><i class="fa fa-angle-right fa-li"></i>First subitem</li>
                                <li><i class="fa fa-angle-right fa-li"></i>Second subitem</li>
                                <li><i class="fa fa-angle-right fa-li"></i>Third subitem</li>
                            </ul>
                        </li>
                        <li><i class="fa fa-check fa-li"></i>Third item</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Unstyled List</h3>
                    <ul class="list-unstyled">
                        <li>First item</li>
                        <li>Second item</li>
                        <li>
                            Sublist
                            <ul>
                                <li>First subitem</li>
                                <li>Second subitem</li>
                                <li>Third subitem</li>
                            </ul>
                        </li>
                        <li>Third item</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Lists -->
    <!-- END Typography -->

    <!-- Paragraphs -->
    <h2 class="content-heading">Paragraphs</h2>

    <!-- Lead -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Lead</h3>
        </div>
        <div class="block-content">
            <p class="lead">This is a lead paragraph. You can use it you highlight your main point before your article. It is great for such usage.</p>
        </div>
    </div>
    <!-- END Lead -->

    <!-- Normal -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Normal</h3>
        </div>
        <div class="block-content">
            <?php $cb->get_text('medium', 2); ?>
        </div>
    </div>
    <!-- END Normal -->

    <!-- Nice Copy -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Nice Copy <small>(For cleaner paragraphs)</small></h3>
        </div>
        <div class="block-content nice-copy">
            <?php $cb->get_text('medium', 2); ?>
        </div>
    </div>
    <!-- END Nice Copy -->

    <!-- Nice Copy Story -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Nice Copy Story <small>(For stories and articles)</small></h3>
        </div>
        <div class="block-content nice-copy-story">
            <h2>Title</h2>
            <?php $cb->get_text('medium'); ?>
            <h3>Title</h3>
            <?php $cb->get_text('medium'); ?>
            <h4>Title</h4>
            <?php $cb->get_text('medium'); ?>
        </div>
    </div>
    <!-- END Nice Copy Story -->
    <!-- END Paragraphs -->
</div>
<!-- END Page Content -->

<?php require 'inc/_global/views/page_end.php'; ?>
<?php require 'inc/_global/views/footer_start.php'; ?>
<?php require 'inc/_global/views/footer_end.php'; ?>