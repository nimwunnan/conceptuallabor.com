---
title: Blog
layout: page
---

  {% assign sorted = site.blog   %}
  {% for item in sorted reversed %}
  {% if item.meta == "pinned"  %}
  {% include article.html %}
  {% endif  %}
  {% endfor  %}
  {% for item in sorted reversed %}
  {% if item.meta != "pinned"  %}
  {% include article.html %}
  {% endif  %}

  {% endfor %}


  <div class="spacer">&nbsp;</div>
