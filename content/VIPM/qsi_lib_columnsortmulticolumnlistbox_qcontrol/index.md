---
title: "ColumnSortMulticolumnListbox QControl"
externalUrl: https://www.vipm.io/package/qsi_lib_columnsortmulticolumnlistbox_qcontrol
date: 2023-06-12
summary: "This QControl provides sorting on each column of a Multicolumn Listbox by clicking on the column header."
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
 - "OOP"
 - "QControl"
---

Redirecting to https://www.vipm.io/package/qsi_lib_columnsortmulticolumnlistbox_qcontrol

Vendor: QSI

Author(s): Quentin 'Q' Alldredge
 
Full Description:
This QControl provides sorting on each column of a Multicolumn Listbox by clicking on the column header. It also shows in the column header an arrow indicator showing the sorted column and sort direction.

A different sort type can be defined for each column. The sort is implemented via OOP and can be overriden to perform different types of sorting. The default is the built in LabVIEW ASCII string sorting. The QControl also includes Numeric Sort, Natural Sort (requires MGI's Natural Sort VI), and String Length Sort.

In order to draw the arrows correclty in the Multicolumn Listbox the flag, ***UseUnicode=True***, must be added to the LabVIEW.ini. This is done automatically in the post-install step.