---
title: "Class Method Node"
externalUrl: https://www.vipm.io/package/qsi_class_method_node
date: 2021-05-25
summary: "The **Class Method Node** acts like an *Invoke Node* but it accepts Classes and DVRs (By-Reference Classes) instead of VI Server references."
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
---

Redirecting to https://www.vipm.io/package/qsi_class_method_node

Vendor: QSI

Author(s): Quentin 'Q' Alldredge
 
Full Description:
The **Class Method Node** acts like an *Invoke Node* but it accepts Classes and DVRs (By-Reference Classes) instead of VI Server references.

* Knows the context of the VI it is being used in
  - Will show Private methods if VI is owned by the wired class
  - Will show Protected methods if VI is owned by the wired class or child of the wired class
  - Will show Community methods if VI is owned by a class that is a friend of the wired class
  - Will show Public methods under any condition
* Wiring selects Class
* Left-click selects Method

**So why use it?**
1. Makes Class Methods easier to find and use.
2. In the case of By-Reference Classes, takes care of In Place Element Structure DVR reads and writes.

**Known Issue and Workaround**
Won't automatically update if the connector pane of the Method changes.  If a Method is changed and LabVIEW can coerce the data type, then the method will not cause a broken run arrow.

To force the node to update, select a different method and then select the desired method again.