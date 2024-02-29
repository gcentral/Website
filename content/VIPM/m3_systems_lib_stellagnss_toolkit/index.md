---
title: "StellaGNSS Toolkit"
externalUrl: https://www.vipm.io/package/m3_systems_lib_stellagnss_toolkit
summary: "M3 Systems's Stella NGC Toolkit product is a GNSS simulator which generates RF signals, thereby simulating a complete set of navigation satellite constellation signals (GPS, GLONASS, Galileo)."
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

Redirecting to https://www.vipm.io/package/m3_systems_lib_stellagnss_toolkit

Vendor: M3 Systems

Author(s): M3 Systems
 
Full Description:
M3 Systems's Stella NGC Toolkit product is a GNSS simulator which generates RF signals, thereby simulating a complete set of navigation satellite constellation signals (GPS, GLONASS, Galileo). Given a user-defined trajectory, the simulator provides to the user's GNSS-receiver-under-test, the set of GNSS RF-signals that are truly expected to be received on that given trajectory.
The following are the available features:

-	Constellation configurability: GPS, Galileo, GLONASS.

-	Receiver trajectory may be imported from file, defined parametrically or sent as frames via TCP sockets in closed loop mode.

-	Receiver attitude is fully configurable in evolving roll, pitch and yaw or automatically computed by the simulator. Other pre-defined attitudes can be selected such as Earth Center pointing, Sun Pointing.

-	Receiver antenna pointing and offset position are configurable as well as the antenna gain pattern.

-	The formatted Trajectory output data flow is available in real-time and provides the receiver's motion: 3D position, velocity, acceleration and jerk. Also available is the receiver's attitude (roll, pitch, yaw) and associated velocity, acceleration and jerk.

-	The GNSS Model software output data flow is available in real-time: each channel provides information concerning a single satellite where its GNSS raw data is provided. These include Pseudoranges, Phase information, Dopplers, and Received Powers.

-	The TCP socket communication allows the SW application to be deported to a separate CPU other than the one controlling the HW.

-	Real-time monitoring of receiver position, and generated satellite GNSS raw data.

To use the StellaNGC Toolkit, a separate application needs to be downloaded and installed: it is M3 System's StellaNGC Simulator Engine. This application is available from the NI Tools Network.