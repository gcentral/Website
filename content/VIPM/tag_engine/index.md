---
title: "Tag Engine"
externalUrl: https://www.vipm.io/package/tag_engine
date: 2024-02-05
summary: "This library aims to provide a tag variable engine to LabVIEW, similar to what would be found in most SCADA application development environments."
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

Redirecting to https://www.vipm.io/package/tag_engine

Vendor: Canter Automation

Author(s): Ryan Porter
 
Full Description:
This library aims to provide a tag variable engine to LabVIEW, similar to what would be found in most SCADA application development environments.

It is inspired by the NI Current Value Table Toolkit and GPower VI Register Toolkit.

Like these toolkits, it provides global access to named variables (called tags).

Key features of this library are:
- Tags can be programmatically created and destroyed.
- Data values stored as variant so that all LabVIEW data types are supported.
- ValueChanged event is triggered on tag write value
- SetRequest event allows request to change value without writing directly to the tag.
- Tags are stored in Data Value References. The API can use either tag's name or the tag's data value reference wire.
- Can store tag properties alongside the tag data. Standard properties are description, units, max value, min value.
- Tag names can be used in math expressions directly, using the provided Tag Expr library (extension of muParser for LabVIEW).
- Malleable VIs are used to provide a convenient interface for reading and writing tags.
- Tag configuration can be stored in JSON format.
- Timestamp of last value change is stored alongside the tag data.