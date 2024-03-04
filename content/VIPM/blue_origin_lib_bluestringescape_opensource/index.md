---
title: "BlueStringEscape (OpenSource)"
externalUrl: https://www.vipm.io/package/blue_origin_lib_bluestringescape_opensource
date: 2023-01-02
summary: "A small library for escaping and un-escaping strings.  Primarily intended for escaping strings written to and read from TDMS files for different operating systems"
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
 - "VIPM Community"
 - "real-time"
---

Redirecting to https://www.vipm.io/package/blue_origin_lib_bluestringescape_opensource

Vendor: Blue Origin

Author(s): Brent Justice
 
Full Description:
This small utility package provides a tool for escaping and un-escaping strings.  The following strategies currently exist:

Windows TDMS
Escapes the string so that it can be safely written to a TDMS file as data on a Windows OS

LV-RT TDMS 
Escapes the string so that it can be safely written to a TDMS file as data on a LabVIEW realtime (Linux) OS

HEX
Converts the string to non-deliminated HEX.  This guarantees that the string will only be composed
of alpha-numeric characters

Relevant discussion thread:
https://forums.ni.com/t5/Example-Code/Read-and-Write-array-of-Cluster-to-TDMS-Get-Set-Cluster-and-Enum/ta-p/3685247