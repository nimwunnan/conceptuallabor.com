---
layout: post
title: "Tools to Go from Text to Book Part 1"
permalink: "blog/writing-tools-1"
---
Nerd warning -- this gets pretty wonky in the details of text editors, open standards, etc. If you dont find that kind of thing interesting, you might not find this interesting either.

### The long personal story that comes before the recipe

(skip this is if you just want to see the tools)

I say that it took ten years to write Conceptual Labor, which is wrong in both directions. I was working or thinking seriously about the ideas in it well before that, but I also only knew I was writing a book about this for about five or six years. Wherever you draw the line, I worked on this long enough that the tools I used to write it had plenty of time to evolve and adapt as I refined my model of the hyperobject of work that was "Write the Book".

How my tools and methods got to where they ended up reminds of me an experience I had that became a personal archetype about the efficiency of messy work and simple rules. I was 20, living in Portland Oregon, and completely jacked on coffee at sidewalk table outside a cafe in Southeast, looking West. I looked up from my book and was struck by the expanse of forest in the West Hills, across the river. Portland is home to Forest Park -- one of the larger parks within city limits in America. I'd been *there* -- what hit me in that moment was that there was a stretch of forest nearly the same size of forest park on the *other* side of downtown. (Forest Park roughly begins at the division between north and south in Portland -- Burnside street -- and continues north. What I was looking at was all on the south side -- a combination of Washington Park and the lesser-known Marquam Nature Area. This happened many years before the advent of Google Maps or smartphones.)

Being young, relatively without obligations, and posessed of a mountain bike in good condition, I decided to get into that forest. Once I got across the river to the foot of the hills, I set two rules for myself -- I could only bike uphill and only south-west.  This sent me through some yards and other private property I could and should have avoided. It was a small but wonderful adventure, and by the time the caffiene and my enthusiasm wore off, I ended up at a park I had never heard of that had a fantastic view of the city, looking out in the direction of the the cafe where I had started.

Later, I learned that I had found Council Crest park, the highest point in Portland. My two rules turned out to be very effective, as long as I stuck to them.

What does this have to do with writing Conceptual Labor? Well, the last time I felt that archetype activated in my brain, like a power-up in a video game, was when I found this excellent article about [Sustainable Authorship](https://programminghistorian.org/en/lessons/sustainable-authorship-in-plain-text-using-pandoc-and-markdown){:target="blank"}. It described, with a much more considered and intentional line of reasoning, almost the entire suite of tools I had come to rely on for writing and publishing the Theory, covering the rest of my tools in [another article](https://programminghistorian.org/en/lessons/collaborative-blog-with-jekyll-github).{:target="blank"}

### The tools I use to write

* All my text lives in markdown files.
* I use Obsidain, Folding Text, Ghost, or Sublime Text to write, depending on the device I'm on or the thing I'm writing.
* For the print and e-book, I used pandoc to export an .icml document that preserved format and structure that InDesign could read.

	> **This was truly magical.** The relatively-semantic structure that pandoc inferred from my markdown translated into a set of text and paragraph styles that InDesign recognized. This allowed me to set typography in detail for the whole 40,000 word text, in a structured, automated way instead of manually setting headlines, italics, and so on, line by line.

* For review editions, I used pandoc to export directly to .pdf
* This site runs on Jekyll, using the Ed. theme.
	* To publish blog posts like these, I can copy the markdown directly to a file in the site directory or use the admin plugin I run for convenience.
	* To publish the book on the site, I maintain a canonical version of the text which I broke up into individual markdown files for the convenience of readers.

		> I wrote a [simple php script](https://gist.github.com/nimdaghlian/d0621557883cd7c463eec59aea3d8e6c) to re-number footnotes in the order they appear, for al the missing citations I caught while editing, and to make things easier on online-readers.

* The bibliography is a work-in-progress, as I only started using Zotero when I began editing, and have some grooming to do before I can take advantage of the [portability of citations and auto-generation of bibliographies that Zotero can offer as part of this toolset.](https://programminghistorian.org/en/lessons/sustainable-authorship-in-plain-text-using-pandoc-and-markdown#working-with-bibliographies){:target="blank"}
