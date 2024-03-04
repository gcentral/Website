---
title: "VIPM API"
externalUrl: https://www.vipm.io/package/jki_lib_vipm_api
date: 2022-10-08
summary: "Programmatic VI-based API for VIPM"
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
 - "JKI"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/jki_lib_vipm_api

Vendor: JKI

Author(s): JKI
 
Full Description:
The VIPM VI-based API is a collection of VIs that allow you to command and control VIPM (VI Package Manager). The VIs have been compiled in LabVIEW 2013 and can be used for automation code written in LabVIEW 2013 or newer.

The VIPM 2020 API VIs only work with **VIPM 2020 Pro or Community Edition** (or newer). It will not work with VIPM Free Edition. Also, In order for the API to work, you must have the main VIPM application running. It can be minimized, but it must be running.

For help with the VIPM API, please visit: support.vipm.io

List of Functions:

**Main (Root Palette)**
- Install VI Packages by Name.vi
- Uninstall VI Packages by Name.vi

**Library Subpalette**
- Add VI Packages to VIPM Package Library.vi
- Remove VI Package from VIPM Package Library.vi
- Download VI Packages.vi
- Network Update and Sync VIPM Package Library.vi
- List VIPM Package Library Contents.vi

**Package Building Subpalette**
- Build VI package.vi
- Write VI Package Build Spec.vi
- Read VI Package Build Spec.vi

**VI Package Configuration (VIPC) Subpalette**
- Apply VIPC File.vi
- Test VIPC Apply Needed.vi
- Scan Project.vi
- Create New VIPC File.vi

**Repository Subpalette**
- Publish VI Packages to Repository.vi
- Unpublish VI Packages from Repository.vi
- List Repository Contents.vi
- List VIPM Managed Repositories.vi

**Utility Subpalette**
- List VIPM LabVIEW Target Version.vi
- Switch Target.vi
- Open VIPM.vi
- Check is VIPM Running.vi
- Minimize VIPM.vi
- Exit VIPM.vi