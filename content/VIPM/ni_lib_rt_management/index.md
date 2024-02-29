---
title: "NI RT Management"
externalUrl: https://www.vipm.io/package/ni_lib_rt_management
summary: "The RT Management library provides an easy to use API for the System Configuration, FTP, and WebDAV APIs in LabVIEW."
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

Redirecting to https://www.vipm.io/package/ni_lib_rt_management

Vendor: National Instruments

Author(s): Blake Mitchell
 
Full Description:
The RT Management library provides an easy to use API for the System Configuration, FTP, and WebDAV APIs in LabVIEW. There are two main components or APIs that provides commonly used functions used in the configuration of and interaction with RT targets.

*********************
File Transfer Behavior API
*********************
This provides an abstract interface for file transfer protocols. There are two included implementations, FTP and WebDAV, but a user can add their own protocol by inheriting from the File Transfer Behavior.lvclass, overriding the required methods, and following the development examples set by the FTP and WebDAV implementations. The file transfer behaviors can be switched at run time for different targets or even the same target by simply toggling the class passed into the Initialize.vi. This allows you to use a single API for both file transfer protocols, or any further protocol implemented. The included implementations for the FTP and WebDAV protocols work around many of the quirks amongst different NI RT targets, so that the File Transfer Behavior works seemlessly across every RT target NI manufactures with no needed workarounds or changes in the use of the API.

*********************
RT Management API
*********************
This API wraps the above File Transfer Behavior API and the NI System Configuration API to provide commonly used behaviors when configuring an RT target, such as configuring VI server or installing a startup application. This API, like the File Transfer API, handles many of the differences between NI targets, so that the same API can work seemlessly across any RT target.