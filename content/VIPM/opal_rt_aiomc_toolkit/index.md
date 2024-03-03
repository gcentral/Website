---
title: "OPAL-RT Analog IO Mapping and Conditioning Toolkit"
externalUrl: https://www.vipm.io/package/opal_rt_aiomc_toolkit
date: 2019-04-11
summary: "**Note:** This installer requires VIPM to be run with Administrator privileges."
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

Redirecting to https://www.vipm.io/package/opal_rt_aiomc_toolkit

Vendor: OPAL-RT Technologies

Author(s): OPAL-RT Technologies
 
Full Description:
**Note:** This installer requires VIPM to be run with Administrator privileges.  To do so, close VIPM & LabVIEW, right-click the VIPM shortcut, and select 'Run As Administrator'.

The OPAL-RT AIOMC Toolkit contains Host and FPGA VIs that are designed to facilitate the process of reading and writing data to/from analog IO. The toolkit includes high performance mapping engines that allow the user to easily route data from different parts of an FPGA design without the need to recompile their firmware. In addition, the toolkit includes built-in scaling, offset, and saturation processes that can be applied to up to 32 analog IO channels.

The AIOMC API is designed to compile at rates of up to 200MHz which allows it to dynamically condition and route up to 32 analog IO channels in less then 250ns.

To improve user experience with certain NI boards, the toolkit also contains analog IO utility VIs that can reduce development time when using NI FPGA IO.
				 
**Requirements:**
    Operating Systems:
       - Windows 7
		    	- Windows 10	
	
    National Instruments Software:
        - LabVIEW 2016 (+)
				    - LabVIEW Real-Time Module 2016 (+)
				    - LabVIEW FPGA Module 2016 (+)
	       - VI Package Manager 18.0.0 f2 (+)
	       
		  National Instruments Hardware:
			     - NI Kintex7 FPGA Target (i.e PXIe-7976R, PXIe-7858R, etc.)
	       
	   OPAL-RT Software:
         - OPAL-RT Utilities Toolkit
         - OPAL-RT SCTL Math Toolkit