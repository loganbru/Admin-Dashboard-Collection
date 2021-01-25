
@extends('layouts/contentLayoutMaster')

@section('title', 'Text Utilities')

@section('content')
{{-- Contextual colors --}}
<section id="contextual-colors" class="card overflow-hidden">
    <div class="card-header">
      <h4 class="card-title">Contextual colors</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Convey meaning through color with a handful of emphasis utility classes. These may also be applied to links
            and will darken on hover just like our default link styles.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-mx-0">
          <thead>
            <tr>
              <th>Example</th>
              <th>Classes</th>
              <th>Snippet</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
              </td>
              <td><code>.text-muted</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-muted"&gt;Your Text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </td>
              <td><code>.text-primary</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-primary"&gt;Your Text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
              </td>
              <td><code>.text-success</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-success"&gt;Your Text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
              </td>
              <td><code>.text-info</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-info"&gt;Your Text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-warning">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
              </td>
              <td><code>.text-warning</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-warning"&gt;Your Text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
              </td>
              <td><code>.text-danger</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-danger"&gt;Your Text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-body">
        <div class="card-text">
          <p>You can also use text lighten, darken and accent classes.</p>
          <ul>
            <li><code>.{colorName} .lighten-*</code> For lighten text color, this two classes needed. Here *: 1,2,3,4 for lighten color options.</li>
            <li><code>.{colorName} .darken-*</code> For darken text color, this two classes needed. Here *: 1,2,3,4 for darken color options.</li>
            <li><code>.{colorName} .accent-*</code> For accent text color, this two classes needed. Here *: 1,2,3,4 for accent color options.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  {{--/ Contextual colors --}}

  {{-- Text alignment --}}
  <section id="text-alignment" class="card overflow-hidden">
    <div class="card-header">
      <h4 class="card-title">Text alignment</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Easily realign text to components with text alignment classes.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table mb-0 table-mx-0">
          <thead>
            <tr>
              <th>Example</th>
              <th>Classes</th>
              <th>Snippet</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                  Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
              </td>
              <td><code>.text-justify</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-justify"&gt;Justified text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-nowrap">It is a long established fact that a reader.</p>
              </td>
              <td><code>.text-nowrap</code></td>
              <td>
                <pre class="language-html">
                                <code class="language-html">
                                  &lt;p class="text-nowrap"&gt;No wrap text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-body">
        <div class="card-text">
          <p>For left, right, and center alignment, responsive classes are available that use the same viewport width
            breakpoints as the grid system.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-white-space no-wrap table-middle mb-0 table-mx-0">
          <thead>
            <tr>
              <th>Example</th>
              <th>Classes</th>
              <th>Snippet</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p class="text-left">Left aligned text on all viewport sizes.</p>
              </td>
              <td><code>.text-left</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-left"&gt;Left aligned text on all viewport sizes.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-center">Center aligned text on all viewport sizes.</p>
              </td>
              <td><code>.text-center</code></td>
              <td>
                <pre class="language-html">
                                <code class="language-html">
                                  &lt;p class="text-center"&gt;Center aligned text on all viewport sizes.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-right">Right aligned text on all viewport sizes.</p>
              </td>
              <td><code>.text-right</code></td>
              <td>
                <pre class="language-html">
                                <code class="language-html">
                                  &lt;p class="text-right"&gt;Right aligned text on all viewport sizes.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-sm-left">Left aligned text on viewports sized SM or wider.</p>
              </td>
              <td><code>.text-{sm/md/lg/xl}-left</code></td>
              <td>
                <pre class="language-html">
                                <code class="language-html">
                                  &lt;p class="text-{sm/md/lg/xl}-left"&gt;Left aligned text on viewports sized SM/MD/LG/XL or wider.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-sm-center">Center aligned text on viewports sized SM or wider.</p>
              </td>
              <td><code>.text-{sm/md/lg/xl}-center</code></td>
              <td>
                <pre class="language-html">
                                <code class="language-html">
                                  &lt;p class="text-{sm/md/lg/xl}-center"&gt;Center aligned text on viewports sized SM/MD/LG/XL or wider.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-sm-right">Right aligned text on viewports sized SM or wider.</p>
              </td>
              <td><code>.text-{sm/md/lg/xl}-right</code></td>
              <td>
                <pre class="language-html">
                                <code class="language-html">
                                  &lt;p class="text-{sm/md/lg/xl}-right"&gt;Right aligned text on viewports sized SM/MD/LG/XL or wider.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  {{--/ Text alignment --}}

  {{-- Text transform --}}
  <section id="text-transform" class="card overflow-hidden">
    <div class="card-header">
      <h4 class="card-title">Text transform</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <p>Transform text in components with text capitalization classes.</p>
          <p>Note how <code class="highlighter-rouge">text-capitalize</code> only changes the first letter of each word,
            leaving the case of any other letters unaffected.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table mb-0 table-mx-0">
          <thead>
            <tr>
              <th>Example</th>
              <th>Classes</th>
              <th>Snippet</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p class="text-lowercase">Lowercased text.</p>
              </td>
              <td><code>.text-lowercase</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-lowercase"&gt;Lowercased text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-uppercase">Uppercased text.</p>
              </td>
              <td><code>.text-uppercase</code></td>
              <td>
                <pre class="language-html">
                                <code class="language-html">
                                  &lt;p class="text-uppercase"&gt;Uppercased text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-capitalize">CapiTaliZed text.</p>
              </td>
              <td><code>.text-capitalize</code></td>
              <td>
                <pre class="language-html">
                                <code class="language-html">
                                  &lt;p class="text-capitalize"&gt;CapiTaliZed text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  {{--/ Text transform --}}

  {{-- Text option --}}
  <section id="text-option" class="card overflow-hidden">
    <div class="card-header">
      <h4 class="card-title">Text option</h4>
    </div>
    <div class="card-content">
      <div class="card-body">
        <div class="card-text">
          <h5 class="mb-1">Font size</h5>
          <p>Vuexy Admin provide font large & small sizes variant classes to change font size.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table mb-0 table-mx-0">
          <thead>
            <tr>
              <th>Example</th>
              <th>Classes</th>
              <th>Snippet</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="font-large-3">Large lg text size.</span>
              </td>
              <td>
                <code>.font-large-3</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="font-large-3" &gt;Large lg text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <span class="font-large-2">Large lg text size.</span>
              </td>
              <td>
                <code>.font-large-2</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="font-large-2" &gt;Large lg text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <span class="font-large-1">Large lg text size.</span>
              </td>
              <td>
                <code>.font-large-1</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="font-large-1" &gt;Large lg text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <span class="font-medium-3">Large md text size.</span>
              </td>
              <td>
                <code>.font-medium-3</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="font-medium-3" &gt;Large md text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <span class="font-medium-2">Large md text size.</span>
              </td>
              <td>
                <code>.font-medium-2</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="font-medium-2" &gt;Large md text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <span class="font-medium-1">Large sm text size.</span>
              </td>
              <td>
                <code>.font-medium-1</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="font-medium-1" &gt;Large sm text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p>Normal base text size.</p>
              </td>
              <td>
                N/A
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt;Normal base text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <span class="font-small-3">Small lg text size.</span>
              </td>
              <td>
                <code>.font-small-3</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="font-small-3" &gt;Small lg text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <span class="font-small-2">Small md text size.</span>
              </td>
              <td>
                <code>.font-small-2</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="font-small-2" &gt;Small md text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <span class="font-small-1">Small sm text size.</span>
              </td>
              <td>
                <code>.font-small-1</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="font-small-1" &gt;Small sm text size.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-body">
        <div class="card-text">
          <h5 class="my-1">Font weight</h5>
          <p>Vuexy Admin provide font weight class <code>.text-bold-{weight}</code>, where
            <code>{weight} value can be 300, 400, 500, 600, 700.</code></p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table mb-0 table-mx-0">
          <thead>
            <tr>
              <th>Example</th>
              <th>Classes</th>
              <th>Snippet</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p class="text-bold-300">Font weight 300</p>
              </td>
              <td><code>.text-bold-300</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-bold-300"&gt;Font weight 300.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-bold-400">Font weight 400</p>
              </td>
              <td><code>.text-bold-400</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-bold-400"&gt;Font weight 400.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-bold-600">Font weight 600</p>
              </td>
              <td><code>.text-bold-600</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-bold-600"&gt;Font weight 600.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p class="text-bold-700">Font weight 700</p>
              </td>
              <td><code>.text-bold-700</code></td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p class="text-bold-700"&gt;Font weight 700.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-body">
        <div class="card-text">
          <h5 class="my-1">Inline text elements</h5>
          <p>Styling for common inline HTML5 elements.</p>
          <p><code class="highlighter-rouge">.mark</code> and <code class="highlighter-rouge">.small</code> classes are
            also available to apply the same styles as <code class="highlighter-rouge">&lt;mark&gt;</code> and <code
              class="highlighter-rouge">&lt;small&gt;</code> while avoiding any unwanted semantic implications that the
            tags would bring.</p>
          <p class="">While not shown above, feel free to use <code class="highlighter-rouge">&lt;b&gt;</code> and <code
              class="highlighter-rouge">&lt;i&gt;</code> in HTML5. <code class="highlighter-rouge">&lt;b&gt;</code> is
            meant to highlight words or phrases
            without conveying additional importance while <code class="highlighter-rouge">&lt;i&gt;</code> is mostly for
            voice, technical terms, etc.</p>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table mb-0 table-mx-0">
          <thead>
            <tr>
              <th>Example</th>
              <th>Snippet</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <p>You can use the mark tag to
                  <mark>highlight</mark> text.</p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  <del>This line of text is meant to be treated as deleted text.</del>
                </p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  <s>This line of text is meant to be treated as no longer accurate.</s>
                </p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p>
                  This line of text
                  <ins>is meant to be treated as an addition to the document.</ins>
                </p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p><u>This line of text will render as underlined</u></p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt;&lt;u&gt;This line of text will render as underlined.&lt;/u&gt;&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p><small>This line of text is meant to be treated as fine print.</small></p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p><strong>This line rendered as bold text.</strong></p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p><em>This line rendered as italicized text.</em></p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p>Sample
                  <abbr title="" data-popup="tooltip" data-original-title="Abbr title">abbreviation</abbr>
                </p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt; Sample &lt;abbr&gt;Abbreviations.&lt;/abbr&gt;&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p>Sample
                  <abbr title="HyperText Markup Language" class="initialism">HTML</abbr> title.</p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt; Sample &lt;abbr title="HyperText Markup Language" class="initialism"&gt;HTML.&lt;/abbr&gt;&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <var>y</var> =
                <var>m</var>
                <var>x</var> +
                <var>b</var>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt; For indicating variables use the &lt;var&gt; tag.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <p>Edit settings, press
                  <kbd>
                    <kbd>ctrl</kbd> +
                    <kbd>,</kbd>
                  </kbd>
                </p>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt; Use the &lt;kbd&gt;  to indicate input that is typically entered via keyboard.&lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <samp>This text is meant to be treated as sample output from a computer program.</samp>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt; For indicating sample output from a program use the  &lt;samp&gt;  tag. &lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
            <tr>
              <td>
                <code>Inline code snippet</code>
              </td>
              <td>
                <pre class="language-html">
                                <code>
                                  &lt;p&gt; Wrap inline snippets of code with &lt;code&gt; tag. &lt;/p&gt;</code>
                              </pre>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
{{--/ Text option --}}
@endsection
