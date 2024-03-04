---
title: "ControlArray"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_controlarray
date: 2021-10-13
summary: "Library to simulate an array with a handful of controls, useful for simulating arrays with XControls."
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
tags:
 - "VIPM"
 - "GUI"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_controlarray

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Enables providing array-like UIs with arbitrary, homogeneous controls. This is especially useful to create a simulated array with XControls which normally can't be used in arrays.

The library needs to be provided an array of the controls that will serve as the element views, a scrollbar, and an array that matches the value type of the controls used. The array serves as the full store of elements and the library manages inserting the proper elements into each of the controls as the view is scrolled.

When using XControls it is imperative that the Data Change event in the Facade VI finish as quickly as possible. With this in mind the data type of the XControl will typically include some of the values used in an XControl's State data so that each element's UI can be updated immediately from the data past in as the XControl's new value.

A simple temperature setpoint editor sample app is included to demonstrate the basic setup and interaction of the library.