---
title: "JSON Object Serialization"
externalUrl: https://www.vipm.io/package/gcraftsman_lib_json_object_serialization
summary: "GCraftsman JSON Object Serializer is an extension of the JKI JSON Library."
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

Redirecting to https://www.vipm.io/package/gcraftsman_lib_json_object_serialization

Vendor: G Craftsman

Author(s): GCraftsman
 
Full Description:
GCraftsman JSON Object Serializer is an extension of the JKI JSON Library. 
It provides the additional feature of serializing and de-serializing LabVIEW Class Objects to JSON.

Does not require accessor methods to read/write class private data.
Performs best-fit de-serialization to convert JSON to LabVIEW object, cleanly handling out-of-order and missing or extra items.

Class hierarchical relationships and composition are treated as nested clusters.
Objects can be de-serialized to any ancestor type (including LabVIEW Object), and still retain child data.

Included on the functions palette:
Flatten to JSON String : Flatten anything (including objects) to JSON
Unflatten from JSON String : Unflatten a JSON string to specified type 
Adapt To Type:  convert objects to/from clusters, using best-fit matching
JSON File I/O: Open, Close, Read, Write JSON file