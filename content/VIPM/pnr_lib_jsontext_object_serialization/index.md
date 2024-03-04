---
title: "JSONtext Object Serialization"
externalUrl: https://www.vipm.io/package/pnr_lib_jsontext_object_serialization
date: 2023-08-06
summary: "Object serialization strategies for JSONtext"
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
 - "JSON"
 - "VIPM Community"
 - "serial"
---

Redirecting to https://www.vipm.io/package/pnr_lib_jsontext_object_serialization

Vendor: PNR

Author(s): Pascal Neuperger
 
Full Description:
This package provides object serialization strategies for JSONtext.

Object serialization ia a feature in JSONtext 1.5 and higher, which provides a class-based API to serialize objects from and to JSON. This package adds different strategies to the JSONtext palette.

**Generic Object Serializer**
Represents the entire inheritance hierarchy of an object as a single JSON object, optionally with type information for deserialization. Type information is produced by serialization binders, which can be replaced by custom implementations. The default serialization binder uses the fully qualified class name for the type name.

**JSON Serializable Serializer**
Only serializes classes that inherit from JSON Serializable that defines methods to serialize to JSON and deserialize from JSON to allow for better control over the serialization process. Objects that don't inherit from JSON Serializable will produce empty JSON objects '{ }'.