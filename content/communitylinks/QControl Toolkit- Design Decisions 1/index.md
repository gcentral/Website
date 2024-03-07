---
title: "QControl Toolkit: Design Decisions #1"
externalUrl: https://www.qsi.dev/2020/06/03/QControl-Toolkit-Design-Decisions-1/
date: 6/3/2020 1:00:00 PM
summary: "Let's face it XControls filled a niche but were awful to create and work with in anything but the simplest programs."
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
draft: false
categories:
 - "Get Code"

tags:
 - "Actor Framework"
 - "GUI"
 - "QControl"
---

Redirecting to https://www.qsi.dev/2020/06/03/QControl-Toolkit-Design-Decisions-1/

Full Description:
#Why create the QControl Toolkit?
Let's face it XControls filled a niche but were awful to create and work with in anything but the simplest programs.  The niche XControls filled and now QControls fill is this:

> There needs to be a construct in LabVIEW that allows:
> * creation of complex user interface code
> * event handling that is separated from other business logic and other user interface logic
> * encapsulation and reused without having to duplicate the code


##My Story
My story goes like this:

###Started with XControls
  I used to be a very big proponent of XControls.  A project at work required the user interface to follow standards laid out for a touch screen interface.  I create half a dozen XControls to help facilitate the touch screen interface.  

  Then came a milestone in the project.  We switched to making the program modular by using the Actor Framework.  Some of the XControls began behaving unexpectedly.  We later learned this was due to when the Init Ability and Unit Ability of the XControl fired.  They fire when the VI with the XControl is loaded (enters memory) and is unloaded (leaves memory), respectively.  So in a regular VI the load happens when the VI opens or when the XControl is dropped onto the VI and it is unloaded when the VI finishes or if the XControl is deleted from the VI.  However, if the VI is part of a library or class the load occurs when the class or library loads rather than the individual VI.  A library or class loads at the beginning of the application, unless loaded dynamically later, and unloads at the close of the application, there is no way to force a library or class to unload any earlier.

###Some XControls had to be Refactored, others Removed
  What this means is the Init Ability and Unit Ability of the XControl no longer fired when we expected them to.  For some of the XControls we were able to workaround this problem by adding more code to the Facade VIs.  For others, we had to remove the XControl.

  After that we were going along fine until the next milestone.

###Removed All XControls
  The next milestone came.  The build process was starting to take hours and when it would fail it was difficult to impossible to determine what code caused the failure.  This was when it was decided to separate the build process into Packed Project Libraries (PPLs).  Our code was already modular which lead well into building each module into PPLs.  However, as we began moving each one into its own PPL, the XControls in them stopped working correctly.  There was quite a bit of time put into trying to get them to work.  We probably would have kept trying or threw up our hands and gave up and just integrated the UI code into the main project if I hadn't already developed QControls.  We replaced the XControls with QControls and it worked out great!

###First Iteration of QControls
  So, backing up to when we first started having problems.  I started having this idea of creating an alternative using Object-Oriented Programming (OOP).  My first iteration I called Control Classes and I presented on them at the CLD Summit in Salt Lake City 2015.  They were working but they way I handled references made them slow (See Design Decisions #2).  If there was a stack of properties, the reference was cast to more specific for each property execution.  However, by the time we needed to use them in my main project, I had those issues worked out, had renamed them as QControls, and had them published on the LabVIEW Tools Network (March 2016).

###Replace XControl functionality with QControls
 Now all of the functionality that was XControls have been replaced with QControls.  I have also used them in two other projects and have received feedback from many that have used them as well.