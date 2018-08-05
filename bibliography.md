---
title: Bibliography
layout: page
order: 4
---



*Note that this is not a traditional bibliography.* As this theory is written for public use and is closer to a polemic than an academic paper, not all sources or key texts are directly quoted. This list includes all cited and named sources, as well as texts that were key readings in the development of the theory. As such, it is a living document that will be continuously expanded; however, once a source is listed it will not be removed.

---

## Key Texts and References

<br>
  {% assign sorted = site.bibliography | sort: 'title'  %}
  <ol class="bibliography">
  {% for item in sorted %}
        <li id="{{item.title}}">{{ item.content | markdownify}} </li>
  {% endfor %}
  <ol>

  <div class="spacer">&nbsp;</div>