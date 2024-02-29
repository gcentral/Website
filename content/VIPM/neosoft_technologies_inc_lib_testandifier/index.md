---
title: "DQMH Testandifier"
externalUrl: https://www.vipm.io/package/neosoft_technologies_inc_lib_testandifier
summary: "NOTE : This tool requires TestStand 2020 (or later) to be installed before executing it!

TestStandifier is a tool that adapts a DQMH module to be efficiently called from TestStand."
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
 - "DQMH"
---

Redirecting to https://www.vipm.io/package/neosoft_technologies_inc_lib_testandifier

Vendor: Neosoft Technologies

Author(s): Neosoft Technologies
 
Full Description:
NOTE : This tool requires TestStand 2020 (or later) to be installed before executing it!

TestStandifier is a tool that adapts a DQMH module to be efficiently called from TestStand.
From a valid DQMH module, it will :
- Create a source distribution
- Modify Requests and Replies to add TestStand Termination Monitoring
- Insert the tester into the module's library
- Create a PPL from the modified code
- Create a sequence file and sequence calls for Requests
- Map the VI IOs to Sequence Parameters
- Create code to launch and sync a module
- Create code to launch and stop the module's tester
- Create a PostStepRunTimeError callback within the sequence file