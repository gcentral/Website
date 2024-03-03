---
title: "MGI Robust XML"
externalUrl: https://www.vipm.io/package/mgi_lib_robust_xml
date: 2016-09-08
summary: "Robust XML: Improving Compatibility of the LabVIEW XML Schema"
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

Redirecting to https://www.vipm.io/package/mgi_lib_robust_xml

Vendor: MGI

Author(s): Moore Good Ideas, inc.
 
Full Description:
Robust XML: Improving Compatibility of the LabVIEW XML Schema
At Moore Good Ideas, we're obviously proponents of our  Read/Write Anything VIs that serialize arbitrary data into *.ini style files. The VIs are fast enough to be used with moderately large data sets, and as our programs evolve, they let us read older versions of our data files, returning default data for new fields and ignoring obsolete fields. The data files can also be opened up in a text editor and manually viewed/edited which is often useful.
However, that manual viewing/editing is impossible for class data, since it's represented in hexadecimal format. Wouldn't it be nice if the class data was human readable as well? It IS possible to get a human readable string representation of arbitrary LabVIEW data using the Flatten to XML and corresponding Unflatten from XML functions. The XML you get is in the LabVIEW Schema which is a bloated format, particularly for arrays, but it's still OK to read. If you have class data ONLY, there is enough version information present for LabVIEW classes to mutate their data from old versions to the current version. If you have non-class data such as a cluster, Unflatten from XML will only work if your data type is unchanged from when you stored the data.
MGI has produced a new tool called RobustXML to provide the LabVIEW Schema with the robustness of Read/Write Anything. Its job is to step in when Unflatten from XML fails and adjust your XML string to make it work. Since the string manipulation takes some time, it's best to give Unflatten from XML a try first and only perform the manipulation if it's needed. A merge VI on the palette drops all the code you need.

**NOTE:  VIPM 2014 or later  is required to install this package.**