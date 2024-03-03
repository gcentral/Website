---
title: "Advanced Structures"
externalUrl: https://www.vipm.io/package/lvos_lib_adv_struct
date: 2024-01-14
summary: "Circular Buffer including Queues (FIFO) and Stacks (FILO)"
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

Redirecting to https://www.vipm.io/package/lvos_lib_adv_struct

Vendor: LabVIEW Open Source Project

Author(s): Francois Normandin
 
Full Description:
Circular Buffer including Queues (FIFO) and Stacks (FILO)
- Support for Queue or Stack from the same base class
- Restrict overflow or not
- O(1) operations for insertions (queue/push) and removal (dequeue/pop)
- Preview any element at index, or all
- Insert elements directly from an array in near O(1) time (no for loop)

Base class consists of a Variant Circular Buffer (LabVIEW 2013 and up, no malleables, no interfaces)

- ByteFIFO is strictly-typed to support byte streams in Queue configuration
- Circular Buffer (Object) is strictly-typed to support LabVIEW object type
- Circular BufferMap is a ByRef dictionary of named buffers (for factory-style designs)
- Esily extensible to any strict type by creating a facade (no malleables)