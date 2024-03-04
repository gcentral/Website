---
title: "CSM API String Arguments Support"
externalUrl: https://www.vipm.io/package/nevstop_lib_csm_api_string_arguments_support
date: 2024-03-03
summary: "API string argument support enhancement for CSM"
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
---

Redirecting to https://www.vipm.io/package/nevstop_lib_csm_api_string_arguments_support

Vendor: NEVSTOP

Author(s): NEVSTOP
 
Full Description:
The purpose of this library is to enhance the API parameters for Communicable State Machine (CSM). It allows for the inclusion of various data types in plain text format. Two more templates which include 'Data: Get Configuration', 'Data: Set Configuration' and 'Data: Get Internal Data' states, are provided in the library. These templates can serve as a starting point for building your CSM module with the ability to access data stored in the '>> internal data >>' shift register.

![example](.github/doc.png)

## Supported Data Type

- String/Path
- Boolean
- Integer(I8,I16,I32,I64,U8,U16,U32,U64)
- Float(DBL/SGL)
- Complex(DBL/SGL)
- Timestamp
- Enum
- Array
- Cluster
- Other(use CSM-Hexstr)

More information for the supported datatype format, please visit: https://github.com/NEVSTOP-LAB/CSM-API-String-Arugments-Support

## Know Issue

1.  **Cluster in Array is not fully supported. Need to imporve.**
2.  **2D array in cluster is not supported now. Need to imporve.**