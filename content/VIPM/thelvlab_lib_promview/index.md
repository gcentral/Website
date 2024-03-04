---
title: "PromVIEW"
externalUrl: https://www.vipm.io/package/thelvlab_lib_promview
date: 2021-04-08
summary: "PromVIEW is a client library written in LabVIEW to expose metrics to Prometheus (https://www."
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

Redirecting to https://www.vipm.io/package/thelvlab_lib_promview

Vendor: TheLabVIEWLab

Author(s): EricM
 
Full Description:
PromVIEW is a client library written in LabVIEW to expose metrics to Prometheus (https://www.prometheus.io)

PromVIEW provides the basic functions to instrument your LabVIEW code by creating metrics and collectors, and it can also be used to create an exporter through the *Tools > PromVIEW > Create Exposition Web Service...* menu.
An Prometheus exporter is a web service that exposes the metrics so Prometheus can scrape this web service and update its time-series database with the new values.

**Changelog:**
1.1.0 : - Fixed how labels are stored in metrics so they now allow multiple values
              BREAKING CHANGE: for all metric types, Create.vi now accepts label names as an array
           - Edited the internal structure of metrics to handle internal 'children' metrics
           - Edited examples to reflect changes. Also the basic example is more fitted to track metrics.
           - Partially support OpenMetrics format through metrics format and additional children metrics