---
title: Blog
layout: page
---

  {% assign sorted = site.blog | sort: 'title'  %}
  {% for item in sorted %}
  <div class="post">
    <h2>{{item.title}}</h2>
    {{ item.content | markdownify}}
  </div>
   {% endfor %}


  <div class="spacer">&nbsp;</div>