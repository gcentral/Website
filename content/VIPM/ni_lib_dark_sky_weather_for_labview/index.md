---
title: "Dark Sky Weather Data for LabVIEW"
externalUrl: https://www.vipm.io/package/ni_lib_dark_sky_weather_for_labview
date: 2017-10-06
summary: "Use these VIs to call the Dark Sky API and incorporate past, current, and predicted future weather data into your applications!"
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
 - "NI"
 - "NI LabVIEW Tools Network"
 - "serial"
---

Redirecting to https://www.vipm.io/package/ni_lib_dark_sky_weather_for_labview

Vendor: National Instruments

Author(s): Matt Justiss
 
Full Description:
The Dark Sky API is one of the most powerful weather APIs available. This LabVIEW addon provides VIs to call the Dark Sky API and retrieve past, current, and predicted-future weather data for a given location. The example VIs also process the returned data and format it for use in LabVIEW applications.

Two high-level functions are available:
1. Dark Sky Forecast Request
This type of request is for current and predicted (in the future) data
More info at: https://darksky.net/dev/docs/forecast

2. Dark Sky Time Machine Request
This type of request is for observed (in the past), current, or predicted (in the future) data
More info at: https://darksky.net/dev/docs/time-machine

To learn more about the Dark Sky API, visit:
https://darksky.net/dev/

Note: the Dark Sky API requires a location, in longitude and latitude coordinates, in order to return data. This LabVIEW addon does not generate coordinates, and should be used alongside another method of retreiving coordinate data. Example VIs have pre-entered default values for demonstration and testing purposes.