---
title: "QControl Toolkit: Design Decisions #3"
externalUrl: https://www.qsi.dev/2020/06/05/QControl-Toolkit-Design-Decisions-3/
date: 6/5/2020 1:00:00 PM
summary: "When it came to creating the QControl Toolkit the design went through several iterations before arriving at what is published today.  One of the first decisions that was made was where to store the reference to the control you were extending?"
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

Redirecting to https://www.qsi.dev/2020/06/05/QControl-Toolkit-Design-Decisions-3/

Full Description:
When it came to creating the QControl Toolkit the design went through several iterations before arriving at what is published today.  One of the first decisions that was made was where to store the reference to the control you were extending? In the first iteration is was only stored in on place, the Generic Class' private data but was changed later and this is why...  

#Object-Oriented Programming (OOP)
First, some background.  I'm not going to explain everything about OOP, for that see the [LabVIEWWiki - Object-oriented programming](https://labviewwiki.org/wiki/Object-oriented_programming).  Suffice it to say Classes' have an inheritance hierarchy where children can inherit certain things from a parent.   Each class in the inheritance hierarchy can define its own data.  A child class will have a data space in it for its own data as well as a space for the data of its ancestors up the inheritance chain.  In LabVIEW all data is private so for a child to access a parent data space, the parent must define an accessor to that data.

##The VI Server Class hierarchy
The QControl Toolkit mimics the organization of the classes in the VI Server Class Hierarchy.  The Parent-most class in the toolkit is the *Generic Class*.  This is part of another design decision that will be included in another post.


#Where to store the reference?
The reference to the control being extended must be passed to the QControl classes and stored for use by properties and methods of the classes.  

##Option A
Which brings us to design decision option 'A' which was the wrong one: the reference would be stored in the parent-most class, the *Generic Class'* private data.

![Option A](Option A.png)*Reference loaded once in the Generic Class' data.  All other classes get it via an Accessor.*

This meant when a child class needed the reference it had to:
1. Use the accessor to get the reference
1. Use the **To More Specific Class** function to convert the reference from a *Generic Class* type to its type
1. Then use the reference in the property or method

This was memory intensive and therefor, slooow.

##Option B
![Option B](Option B.png)*References loaded in every classes' data up the inheritance hierarchy.*

The other option was to store it multiple times in all of the data spaces up the inheritance chain, already in the type for the class.  This meant that the reference was stored redundantly but was already converted.  No accessor was needed because the reference could just be unbundled from the class' private data.  

The reference was loaded as part of the constructor and every class would need a *Load Reference Method* to handle conversion and bundling into the class' private data.  All of that happened once at initialization instead of every time a property or method was called.  This significantly reduced the time required for each property/method call.

#Load Reference Example

Here is an example of the Constructor and *Load Reference Method* from the StatusHistory QControl which is included in the QControl Toolkit.

##Inside a Constructor
![Inside a Constructor](Inside a Constructor.png)
The incoming reference is converted to a Generic Reference to avoid having a coercion dot on the Reference input of the *Load Reference Method's*.  The *Load Reference Method's* Reference input must be the Generic reference type because the method is overridden by every class and the connector panes are all required to match.  Therefore, the Reference input is required to all be the Generic Type.

##Inside a Load Reference Method
The (now Generic type) Reference is converted to the reference type of the class for which this *Load Reference Method* is owned and bundled into the class' data space.  The Parent Method is called and given the reference, still as a Generic type.  This iterates up the inheritance hierarchy via calls to every *Load Reference Method* via the Call Parent Method node until the *Generic Class* has been reached.
![Inside a Load Reference Method](Inside a Load Reference Method.png)

An example of the code inside a *Load Reference Method* for a QControl that inherits from the *String Class*.