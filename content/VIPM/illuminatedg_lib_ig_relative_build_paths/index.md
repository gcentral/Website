---
title: "IG Relative Build Paths"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_relative_build_paths
date: 2024-01-05
summary: "Saves build spec paths relatively more often."
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
 - "NI"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_relative_build_paths

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Changes how LabVIEW decides to save relative paths so that relative paths can be used in build specs more often.

The priority of checks with this package is as follows:

1) If the referenced path is underneath the folder containing the project file, the path is saved relative to the project.

2) If the referenced path is underneath the folder containing the installed LabVIEW.exe then the path is saved relative to the LabVIEW App.Dir path.

3) If the referenced path and the project have at least 2 path segments in common (drive letter and a folder) then the path will be saved relatively.

Examples for 3:

Saved relatively:
c:\\dev\\ProjectA\\Module1\\mod1.lvproj references c:\\dev\\build\\bin - Common path is c:\\dev which has 2 segments: ['c', 'dev']

Saved absolutely:
c:\\dev\\ProjectA\\Module1\\mod1.lvproj references c:\\libs\\MyCoolLib - Common path is only the drive letter which is less than the 2 required segments.