---
title: "Live HDF5"
externalUrl: https://www.vipm.io/package/lvhdf5
summary: "The Live HDF5 toolkit provides a full-featured interface between LabVIEW and the HDF5 file format."
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

Redirecting to https://www.vipm.io/package/lvhdf5

Vendor: UPVI, LLC

Author(s): Jason D. Sommerville
 
Full Description:
The Live HDF5 toolkit provides a full-featured interface between LabVIEW and the HDF5 file format. The HDF5 format (hierarchical data format) is a versatile and widely-used format for storing scientific data. It is a self-describing file format that can store arbitrarily complex datatypes in 'datasets' arranged in a folder-like hierarchy within the file. Named attributes may also be attached to the datasets or the folders. HDF5 is accessible to such programs as Matlab, IDL, Mathematica, IGOR Pro, C/C++, Fortran, Java, Perl, Python, and is widely used by national laboratories, research centers, and universities. For full details on the HDF5 format and its functions, please visit the HDF5 website at http://www.hdfgroup.org/HDF5.

Live HDF5 makes it easy for LabVIEW programmers to use the HDF5 library. It follows the standard paradigm of 'open, read/write, close.' Open a file, write a dataset and/or read a dataset, close the file. When a write command is wired, it will analyze the LabVIEW datatype connected and create a corresponding HDF5 datatype in which to store the wired data. During read, the data may be read back into the same datatype or into a LabVIEW variant. With care and a deep understanding of LabVIEW memory, the data may also be read into a different, compatible datatype.

The toolkit provides both high-level read and write functions which handle the low-level HDF5 details. It also provides utility functions to make interaction with HDF5 files easier for LabVIEW users, e.g. a VI to populate a LabVIEW Tree control with the folder structure of an HDF5 file. Finally, the library provides low-level interfaces to most of the other HDF5 functions for power-users with particular needs.

The Live HDF5 toolkit is supported under 32- and 64-bit versions of LabVIEW on Windows version 7 and higher. Note that adminstrator privilges are required for successful installation. See:
Checking LabVIEW Administrator Privileges - https://decibel.ni.com/content/docs/DOC-45921