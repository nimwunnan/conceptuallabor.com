---
title: Blog
layout: page
---

  {% assign sorted = site.blog | sort: 'title'  %}
  {% for item in sorted %}
  <div>
    <h2><a href="{{ item.url }}">{{item.title}}</a></h2>
    {{ item.excerpt | markdownify }}
      <a href="{{ item.url }}" class="bluelink">Read more..</a>
   {% endfor %}


  <div class="spacer">&nbsp;</div>
