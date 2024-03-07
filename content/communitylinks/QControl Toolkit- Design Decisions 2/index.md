---
title: "QControl Toolkit: Design Decisions #2"
externalUrl: https://www.qsi.dev/2020/06/03/QControl-Toolkit-Design-Decisions-2/
date: 6/4/2020 1:00:00 PM
summary: "One drawback I saw with XControls is that any Property or Method of the control in the Facade had to be reprogrammed to expose it in the XControl."
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
 - "QControl"
---

Redirecting to https://www.qsi.dev/2020/06/03/QControl-Toolkit-Design-Decisions-2/

Full Description:
#Why does the QControl Toolkit need to mimic the VI Server Class Hierarchy?
  One drawback I saw with XControls is that any Property or Method of the control in the Facade had to be reprogrammed to expose it in the XControl.  I had started to develop a scripting tool that automatically created the desired Properties and Methods but abandoned it when I started QControls.

##QControls Contains All Properties and Methods
  In order to make QControls work similar to the way the VI Server works the QControl Class Hierarchy had to match the VI Server Class Hierarchy.  This is so that accessing inherited Properties and Methods work the same way they do in the VI Server.  So after the underlying code was written to launch the asychronous Event Handler.  I scripted code to recreate ever class, property, and method in the VI Server.  I limited creation to only those that were Basic  or VI Scripting and were available in the Run-Time Engine.  This created over 70 classes, over 1500 properties, and over 500 methods.

##Every Class, Property, and Method is Extensible
  I set out to make QControls extensible.  Therefore all of the properties and methods, and the classes were designed to inherit from.  In fact it really make no sense using the regular classes because you just get the same behavior as using the VI Server directly.  The advantage of QControls is they allow the developer to extend controls; where Xcontrol only allowed developers to replace controls.

#Much of the Work is Done for You
  With this infrastructure already in place, and with the use of the Wizard to help create the structure of a new QControl, the developer has the power to create some truly unique and helpful controls.  The Wizard, itself, has three QControls in it that I developed and distribute with the QControl Toolkit.  Those are the TreeSelection, Steps, and Status History QControls.