# Welcome to the GCentral Website

This repository contains the GCentral website the central hub for all things related to the G (LabVIEW) Community. It is maintained by members of the GCentral Board of Directors and other volunteer community members. It is built on the Hugo Static Website Generator. The infustructure is not free. o maintain this resource, please consider [donating](https://www.gcentral.org/howtodonate) or becoming a [sponsor](https://www.gcentral.org/howtosponsor) of GCentral.


There are two non-financial ways you could also contribute by adding content to GCentral to make it an even more valuable resource. The two main places to add content to GCentral are:

 1. Add to the hub of of community links. These links are organized into six categories. A link can be a member of multiple categories if it make sense to. The categories are:
	- Connect with Others
	- Engage with Peers
	- Find Answers
	- Get Code
	- Handle the Details
	- Learn Something

 2. Add a blog post about anything pertaining to software development in G (LabVIEW).
 
 To add content to this website you can choose to submit requests for changes on out ["Forgot Something"](https://www.gcentral.org/forgotsomething) page or fork, make edits, and submit a merge request through this repo.
 
 To make edits depends on where you want the content added. To submit a link:
 1. Add a uniquely named folder to the /content/posts/communitylinks folder.
 2. Add a file named ***index.md*** with the following content:
	'''
	---
title: "LabVIEW Wiki"
externalUrl: https://labviewwiki.org/wiki/Home
summary: "The LabVIEW Wiki is a community driven information resouce."
showSummary: true
categories:
 - "Find Answers"
 - "Learn Something"
tags:
 - "Community"
 - "Knowledge Base"
 - "Online"
---
'''
