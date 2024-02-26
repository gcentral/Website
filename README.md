# Welcome to the GCentral Website

This repository contains the GCentral website the central hub for all things related to the G (LabVIEW) Community. It is maintained by members of the GCentral Board of Directors and other volunteer community members. It is built on the Hugo Static Website Generator. 

## Donate or Sponsor

The infrastructure is not free. To maintain this resource, please consider [donating](https://www.gcentral.org/howtodonate) or becoming a [sponsor](https://www.gcentral.org/howtosponsor) of GCentral.

## Contribute

There are two non-financial ways you could also contribute by adding content to GCentral to make it an even more valuable resource. The two main places to add content to GCentral are:

 1. Add to the hub of of community links. These links are organized into six categories. A link can be a member of multiple categories if it make sense to. The categories are:
	- Connect with Others
	- Engage with Peers
	- Find Answers
	- Get Code
	- Handle the Details
	- Learn Something

 2. Add a blog post about software development in G (LabVIEW).
 
 To add content to this website you can choose to submit requests for changes on our ["Forgot Something"](https://www.gcentral.org/forgotsomething) page or fork, make edits, and submit a merge request through this repo.
 
 ## Add a Community Link
 
 To submit a link:
 1. Fork the repo or update your repo if forked previously.
 2. Add a uniquely named folder to the /content/posts/communitylinks folder.
 3. Add a file named ***index.md*** with the following content:
```
---
title: "LabVIEW Wiki"
externalUrl: https://labviewwiki.org/wiki/Home
summary: "The LabVIEW Wiki is a community-driven information resource."
showSummary: true
categories:
 - "Find Answers"
 - "Learn Something"
tags:
 - "Community"
 - "Knowledge Base"
 - "Online"
---
```
	Where:	title is the Title for your link
 		externalURL is the URL address
   		summary is a couple of sentence description of the resource
     	categories should include one or more of the categories above
    	tags can be any other keywords useful in describing or helping to find your resource in a search
 3. Add the image/icon to the folder called ***featured.png*** (can be *.jpg).
 4. Go through the merge request steps.

 ## Add a Blog Post
 If you haven't created an author profile, create that first by:
 1. Fork the repo or update your repo if forked previously.
 2. Add an author file to /data/authors folder. Name it uniquely as a *.json file with the following content:
```
{
    "name": "Q",
    "image" : "authors/QAuthorPic.jpg",
    "bio": "Ravenclaw, Engineer, Builder, Programmer",
    "social": [
        { "linkedin": "https://linkedin.com/in/quentin-q-alldredge" }
    ]
}
```
	Where:	name is the name you want to be displayed in quotation marks
 		image is the path and filename with the author folder "authors/[image filename]
  		bio is whatever you want recommended a few words to a sentence
   		social is any social links you want to link to, recommend at least you linkedin address
3. Add an author image to the /assets/img/authors folder.  It is best if it is square between 256 and 768 pixels.
4. It is recommended to have Hugo development set up ([see how here](https://gohugo.io/getting-started/quick-start/#Prerequisites)).
5. Start a blog post using [Hugo Instruction](https://gohugo.io/getting-started/quick-start/#add-content).
```
hugo new content posts/my-first-post.md
```
6. The file will be created in the content/posts folder. If you want to add images, move your file to a custom subfolder and rename it ***index.md***.
7. Edit the file the front matter, or metadata at the front of the file, should be edited as follows:
```
---
title: "The Weasley Clock Project, Step 1: Tutorials"
summary: "Other tutorials on the internet."
date: 2023-12-09T12:37:49-04:00
authors:
  - "q"
categories:
 -  "Find Answers"
tags:
 - "Community"
 - "Knowledge Base"
 - "Online"
---
```
	Where:	title is the title of your blog
		summary is one or two sentences about the blog post
  		authors is the author file you created earlier. There can be more than one author
		categories should include one or more of the categories above
    	tags can be any other keywords useful in describing or helping to find your resource in a search 
8. Add your blog content and use the rules for Hugo markdown.
9. Go through the merge request steps.
