---
title: "Touchscreen Toolkit for LabVIEW"
externalUrl: https://www.vipm.io/package/aledyne_engineering_lib_touchscreen_toolkit
date: 2016-05-19
summary: "This toolkit provides a LabVIEW API to the Windows 7 Touch API and the UPDD driver in order to read touch coordinates from any number of connected touchscreens."
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

Redirecting to https://www.vipm.io/package/aledyne_engineering_lib_touchscreen_toolkit

Vendor: Aledyne Engineering

Author(s): Aledyne Engineering
 
Full Description:
This toolkit provides a LabVIEW API to the Windows 7 Touch API and the UPDD driver in order to read touch coordinates from any number of connected touchscreens.  Once initialized, either the UPDD or the Windows Touch (WTG) driver will return a LabVIEW user event with the touch coordinates whenever a connected device is touched.  If using a multi-touch display, detected gestures will be reported through the gesture recognition engine, including swipe, zoom, and rotate.

Please visit http://touch-base.com/ to purchase and download the UPDD driver for your hardware or contact Aledyne Engineering for assistance if using NI cDAQ or cRIO standalone chassis. The downloaded UPDD driver will include a TBApi32/64.dll and an ACE_UPDD_5.6.2.Dll which must both be copied into the directory of this toolkit (\\National Instruments\\LabVIEW xxxx\\vi.lib\\Aledyne Engineering\\Touchscreen Toolkit).

If using Windows 7 or 8, the built in touch API can be utilized with the WTG VIs to gain access to the WM_TOUCH and WM_GESTURE messages.  A custom gesture engine for swipe, zoom, rotate, and pan is also implemented that goes above and beyond the capabilities of the WM_GESTURE Windows Touch API.

Refer to '\\National Instruments\\LabVIEW 2012\\examples\\Aledyne Engineering\\Touchscreen Toolkit\\' for examples of how to use this toolkit or search 'touchscreen' in the Example Finder.

For technical support contact Aledyne Engineering at support@aledyne.com.