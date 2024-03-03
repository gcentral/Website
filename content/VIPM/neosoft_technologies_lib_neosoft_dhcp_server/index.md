---
title: "Neosoft DHCP Server"
externalUrl: https://www.vipm.io/package/neosoft_technologies_lib_neosoft_dhcp_server
date: 2024-01-23
summary: "This toolkit implements a DHCP server in the form of a DQMH module."
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

Redirecting to https://www.vipm.io/package/neosoft_technologies_lib_neosoft_dhcp_server

Vendor: Neosoft Technologies

Author(s): Neosoft Technologies Inc.
 
Full Description:
This toolkit implements a DHCP server in the form of a DQMH module.
It allows to provide IP addresses to any Ethernet device visible to the application.
IP pool and lease time are configurable.
 
The current API contains the following capabilities:
- Get Config
- Set Config
- Add IP Address Reservation
- Remove IP Address Reservation
- Retrieve Leases
- Reset Leases
 
**Note:**
 
Only the following DHCP client functions are currently implemented:
- Discovery
- Request
- Release
 
IMPORTANT! This implementation can only be used if there is NO other DHCP server on the network as it does NOT support forwarding.
It also does NOT support unicast IP address delivery based on MAC address. The IP address proposal is always broadcast.
Therefore, some devices may NOT be able to successfully obtain an IP with this DHCP server implementation.
 
A standalone version (exe) can be found on the Neosoft Technologies website: 
<u>www.neosoft.ca</u>