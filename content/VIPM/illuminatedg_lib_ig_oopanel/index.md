---
title: "IG OOPanel"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_oopanel
summary: "Provides an OOP based panel UI manager and also includes functionality for simulating arrays with these Panels for highly flexible dynamic UI content."
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
 - "VIPM Community"
 - "DQMH"
 - "OOP"
 - "UI"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_oopanel

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Provides an OOP based panel UI manager and also includes functionality for simulating arrays with these Panels for highly flexible dynamic UI content. This library is not based on any existing framework (DQMH, AF, etc.) and can be used as part of any UIs being developed.

Panels are run as asynchronous VIs so this approach is not suitable when a LOT of elements are needed. For a faster performing, more light-weight library when lots of elements are needed in an array-like UI check out the ControlArray package.

Panel management includes moving VI panels around different subpanels, popping subpanel contents out as standalone windows, and toggling the visiblity of a panel. The panel manager keeps track of the state of panels so it can ensure that panels are removed from subpanels before another is inserted.