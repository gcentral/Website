---
title: "MGI Panel Manager"
externalUrl: https://www.vipm.io/package/mgi_lib_mgi_panel_manager
summary: "This package helps you quickly and easily build complex, multi-panel user interfaces."
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
 - "UI"
---

Redirecting to https://www.vipm.io/package/mgi_lib_mgi_panel_manager

Vendor: MGI

Author(s): Moore Good Ideas, Inc.
 
Full Description:
This package helps you quickly and easily build complex, multi-panel user interfaces. You no longer have to worry about passing around VI references, the simple framework lets you worry about writing your business logic, not debugging panel errors.

There are two libraries included:
**Panel**
This library contains all of the classes to manage the different types of panels. There are three built in types of panels:

1. Window: This is a typical window
2. Dialog: This is a window that is also modal.
3. Subpanel: This is a panel that will be inserted into a subpanel in another VI.

New panel types can be added by overriding Panel.lvclass.

**Panel Actor**
This is an Actor that uses the Panel framework. This allows you to write the Actor's user interface once, then use it wil multiple types of panels, all without changing your UI code.

Checkout the examples and our website for more info!