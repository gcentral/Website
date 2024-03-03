---
title: "SLL Toolkit"
externalUrl: https://www.vipm.io/package/soliton_technologies_lib_sll_toolkit
date: 2024-02-13
summary: "Available in **Functions Palette -> Addons -> SLL Toolkit** and in **LabVIEW Tools menu -> SLL Toolkit."
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

Redirecting to https://www.vipm.io/package/soliton_technologies_lib_sll_toolkit

Vendor: Soliton Technologies

Author(s): Soliton Technologies
 
Full Description:
Available in **Functions Palette -> Addons -> SLL Toolkit** and in **LabVIEW Tools menu -> SLL Toolkit.**

**Requires VIPM 2017 or greater.**

This contains SLL Queued State Machine (QSM) and collection of various useful general purpose reusable VIs spanning across String, File IO, Scripting, TCP IP and other categories.

The list of tools available in LabVIEW Tools menu for straight away use are
1. SLL Add Copyright
2. SLL Class DVR API Generator
3. SLL Application Memory Monitor
4. SLL Compare VI Folders
5. SLL Find Broken VIs
6. SLL Set VI Settings for a Folder (Re-entrancy, Allow Debugging, Separate Compile Code)

**# SLL Queued State Machine**
A simple, straight forward Queue Based State Machine VI Template. Since this is just a single VI, they can be used for any purpose - from a dialog to a simple application.

**# SLL File IO**
**## Write/Read Spreadsheet File**
The LabVIEW built-in method does not support multi-line strings and delimiters as part of cell contents. Write and Read to Spreadsheet file adds support for delimiters and multi-line strings as part of cell contents. This is similar to how applications like Excel support multiline strings in CSV file.

**## CSV Logger**
CSV Logger with support for dynamically adding new headers during logging. Whenver the logger encounters a new header, it takes care of adding the new header without rewriting the entire file contents.

**# SLL Easy TCP**
SLL Easy TCP takes care of establishing and maintaining connections across any number of TCP clients. Any message received from the client is sent as a user event to the server.

**# SLL Debug**
**## Variant Pop Up**
Allows showing any data type (like a cluster) as a message pop up.
**## Add Error Meta**
Allows to add additional details to the error wire.
**## Time Profile Logger**
Useful for profiling different parts of code to a file. This takes care of storing the log data in memory till 'Close' command is called, so that logging to file won't affect the time profiling.

**# SLL Scripting**
**## Class DVR API Generator**
Generates DVR based APIs for LabVIEW Class Methods.
**## Project Save As**
Make a copy of the project and rename some of the components of the project including their relinking.
**## Compare VI Folders**
Compare two folders containing VIs to identify modified VIs ignoring cosmetic changes.
**## Launch VI in Project Instance**
Launches the VI in the given project path's instance.

**# SLL String**
**## Alpha Numeric Sort 1D Array**
Alpha Numeric Sorting of 1D String Array so that strings are ordered like File 1, File 2..File 10 instead of the usual sorting like File 1, File 10, File 2..

**# SLL Tools**
**## Add Copyright**
A small tool to set/update copyright text to LabVIEW files in a folder.