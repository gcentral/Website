---
title: "NI State Pattern Actor"
externalUrl: https://www.vipm.io/package/ni_lib_state_pattern_actor
date: 2016-08-25
summary: "The state pattern is a behavioral design pattern that “allow[s] an object to alter its behavior when its internal state changes."
showSummary: true
showAuthor: false
showEdit: false
showData: false
showViews: false
showReadingTime: false
showWordCount: false
showBreadcrumbs: false
showHeadingAnchors: false
sharingLinks: false
showZenMode: false
showPagination: false
showRelatedContent: false
draft: true
tags:
 - "VIPM"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/ni_lib_state_pattern_actor

Vendor: National Instruments

Author(s): Allen C. Smith
 
Full Description:
The state pattern is a behavioral design pattern that “allow[s] an object to alter its behavior when its internal state changes.  The object will appear to change its class.”[1]  Use this pattern if an object must change its behavior based on its internal state (i.e. if the class has two or more modes of operation such that the mode change alters the behavior of most of the class methods).  This pattern lets you avoid adding case structures that test for mode to all of your VIs, generally making for more maintainable code. This package demonstrates a straightforward way to create a family of actors that together implement the state pattern. We refer to this collection of actors as a State Pattern Actor.

This package adds a new actor, called State Actor, to your user.lib folder.  It also adds the State Pattern Actor project to your list of available sample projects.

[1] Gamma, Helm, Johnson, and Vlissides, Design Patterns:  Elements of Reusable Object-Oriented Software, 1994, p. 305