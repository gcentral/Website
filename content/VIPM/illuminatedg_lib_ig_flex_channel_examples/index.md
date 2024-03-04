---
title: "IG Flex Channel Examples"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_flex_channel_examples
date: 2022-03-01
summary: "Examples for the Flex Channel Template in IG Flex Channel"
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
 - "Actor Framework"
 - "GUI"
 - "VIPM Community"
 - "communication"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_flex_channel_examples

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Provides more real-world usage of the Flex Channel template with multiple data types and demonstrates the multiple reader endpoint types. The examples can be found by clicking the Examples button in the package info from VIPM after installing.

The current demo is a somewhat of an Actor-Oriented DAQ Test Panel that leverages the Flex Channel template instead of Actor Framework as the communication mechanism. The top level UI utilizes a nested actor to manage the UI and manage the other two actors: a function generation actor and a DAQmx output actor. The generation and output actors are completely independent of each other but the channel layout allows the generation data to be previewed by a lossy endpoint in the UI as well as send lossless data directly to the output actor.