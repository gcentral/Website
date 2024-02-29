---
title: "LabVIEW Icon Version Overlay"
externalUrl: https://www.vipm.io/package/jki_tool_labview_icon_version_overlay
summary: "= About =
This package applies a four digit year overlay (e.g."
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

Redirecting to https://www.vipm.io/package/jki_tool_labview_icon_version_overlay

Vendor: JKI

Author(s): Jim Kring
 
Full Description:
= About =
This package applies a four digit year overlay (e.g. the text '2009' in orange font) to the LabVIEW EXE program icon (similar to LabVIEW 2014 icon). This package  was inspired by the LabVIEW idea exchange idea posted by the great @dnatt here:
http://forums.ni.com/t5/LabVIEW-Idea-Exchange/Include-LabVIEW-Version-Number-in-Application-Icon/idi-p/1002117/page/2

= Compatibility =
This package works on 32-bit LabVIEW 2009 through 2013 (on 32-bit or 64-bit Windows). When installed on LabVIEW 2014 or greater, the package will take no action (it does not attempt to alter the icon, since LabVIEW 2014 and greater already have the year number in the icon).

= UNINSTALLATION INSTRUCTIONS = 
To remove the icon overlay, run the batch file located here (this should be done *prior* to uninstalling the package, since uninstalling the package will remove the files):
<LabVIEW>\\project\\_lv_icon_overlay\\restore_icon.bat