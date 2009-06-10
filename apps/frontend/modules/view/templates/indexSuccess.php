<div id="container"> 
  <div id="intro"> 
    <div id="pageHeader"> 
      <h1><span>css Zen Garden</span></h1> 
      <h2><span>The Beauty of <acronym title="Cascading Style Sheets">CSS</acronym> Design</span></h2> 
    </div> 
 
    <div id="quickSummary"> 
      <p class="p1"><span>A demonstration of what can be accomplished visually through <acronym title="Cascading Style Sheets">CSS</acronym>-based design. Select any style sheet from the list to load it into this page.</span></p> 
      <p class="p2"><span>Download the sample <a href="zengarden-sample.html" title="This page's source HTML code, not to be modified.">html file</a> and <a href="zengarden-sample.css" title="This page's sample CSS, the file you may modify.">css file</a></span></p> 
    </div> 

  <div id="supportingText"> 
    <?php foreach ($urablog_field_list as $urablog_field): ?>
    <div id="participation"> 
      <h3><span><?php echo $urablog_field->gettitle() ?></span></h3> 
      <p class="p1"><?php echo $urablog_field->getarticle() ?></p>
      <span>Update:<?php echo $urablog_field->getupdated_at() ?></span>
    </div> 
    <?php endforeach; ?>
 
 
    <div id="footer"> 
      <a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s XHTML">xhtml</a> &nbsp; 
      <a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS">css</a> &nbsp; 
      <a href="http://creativecommons.org/licenses/by-nc-sa/1.0/" title="View details of the license of this site, courtesy of Creative Commons.">cc</a> &nbsp;
      <a href="http://mezzoblue.com/zengarden/faq/#s508" title="Read about the accessibility of this site">508</a> &nbsp;
      <a href="http://www.mezzoblue.com/zengarden/faq/#aaa" title="Read about the accessibility of this site">aaa</a> 
    </div> 
 
  </div> 
 
  
  <div id="linkList"> 
    <!--extra div for flexibility - this list will probably be the trickiest spot you'll deal with --> 
    <div id="linkList2"> 
 
    <!-- If you're wondering about the extra &nbsp; at the end of the link, it's a hack to meet WCAG 1 Accessibility. --> 
    <!-- I don't like having to do it, but this is a visual exercise. It's a compromise. --> 
      <div id="lselect"> 
        <h3 class="select"><span>Select a Design:</span></h3> 
        <!-- list of links begins here. There will be no more than 8 links per page --> 
        <ul> 
          <li><a href="/" title="AccessKey: a" accesskey="a">Sample #1</a> by <a href="http://www.mezzoblue.com/" class="c">Dave Shea</a>&nbsp;</li> 
          <li><a href="/" title="AccessKey: b" accesskey="b">Sample #2</a> by <a href="http://www.mezzoblue.com/" class="c">Dave Shea</a>&nbsp;</li> 
          <li><a href="/" title="AccessKey: c" accesskey="c">Sample #3</a> by <a href="http://www.mezzoblue.com/" class="c">Dave Shea</a>&nbsp;</li> 
          <li><a href="/" title="AccessKey: d" accesskey="d">Sample #4</a> by <a href="http://www.mezzoblue.com/" class="c">Dave Shea</a>&nbsp;</li> 
          <li><a href="/" title="AccessKey: e" accesskey="e">Sample #5</a> by <a href="http://www.mezzoblue.com/" class="c">Dave Shea</a>&nbsp;</li> 
          <li><a href="/" title="AccessKey: f" accesskey="f">Sample #6</a> by <a href="http://www.mezzoblue.com/" class="c">Dave Shea</a>&nbsp;</li> 
          <li><a href="/" title="AccessKey: g" accesskey="g">Sample #7</a> by <a href="http://www.mezzoblue.com/" class="c">Dave Shea</a>&nbsp;</li> 
          <li><a href="/" title="AccessKey: h" accesskey="h">Sample #8</a> by <a href="http://www.mezzoblue.com/" class="c">Dave Shea</a>&nbsp;</li> 
        </ul> 
      </div> 
 
      <div id="larchives"> 
        <h3 class="archives"><span>Archives:</span></h3> 
        <ul> 
          <li><a href="/" title="View next set of designs. AccessKey: n" accesskey="n"><span class="accesskey">n</span>ext designs &raquo;</a>&nbsp;</li> 
          <li><a href="/" title="View previous set of designs. AccessKey: p" accesskey="p">&laquo; <span class="accesskey">p</span>revious designs</a></li> 
          <li><a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden. AccessKey: w" accesskey="w">Vie<span class="accesskey">w</span> All Designs</a></li> 
        </ul> 
      </div> 
      
      <div id="lresources"> 
        <h3 class="resources"><span>Resources:</span></h3> 
        <ul> 
          <li><a href="http://www.csszengarden.com/001/001.css" title="View the source CSS file for the currently-viewed design, AccessKey: v" accesskey="v"><span class="accesskey">V</span>iew This Design&#8217;s <acronym title="Cascading Style Sheets">CSS</acronym></a></li> 
          <li><a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS. AccessKey: r" accesskey="r"><acronym title="Cascading Style Sheets">CSS</acronym> <span class="accesskey">R</span>esources</a></li> 
          <li><a href="http://www.mezzoblue.com/zengarden/faq/" title="A list of Frequently Asked Questions about the Zen Garden. AccessKey: q" accesskey="q"><acronym title="Frequently Asked Questions">FA<span class="accesskey">Q</span></acronym></a>&nbsp;</li> 
          <li><a href="http://www.mezzoblue.com/zengarden/submit/" title="Send in your own CSS file. AccessKey: s" accesskey="s"><span class="accesskey">S</span>ubmit a Design</a></li> 
          <li><a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page. AccessKey: t" accesskey="t"><span class="accesskey">T</span>ranslations</a></li> 
        </ul> 
      </div> 
    </div> 
  </div> 
 
 
</div> 
 
<!-- These extra divs/spans may be used as catch-alls to add extra imagery. --> 
<!-- Add a background image to each and use width and height to control sizing, place with absolute positioning --> 
<div id="extraDiv1"><span></span></div><div id="extraDiv2"><span></span></div><div id="extraDiv3"><span></span></div> 
<div id="extraDiv4"><span></span></div><div id="extraDiv5"><span></span></div><div id="extraDiv6"><span></span></div> 
 

